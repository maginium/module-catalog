<?php

declare(strict_types=1);

namespace Maginium\CategoryElasticIndexer\Models\ResourceModel\Indexer\Fulltext\Action;

use Magento\Catalog\Api\Data\CategoryInterface as BaseCategoryInterface;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;
use Maginium\Category\Interfaces\Data\CategoryInterfaceFactory as ModelFactory;
use Maginium\Category\Models\Category;
use Maginium\ElasticIndexer\Models\ResourceModel\Indexer\Fulltext\Action\AbstractResourceModel;
use Maginium\Foundation\Enums\SortOrder;
use Maginium\Foundation\Enums\Status;
use Maginium\Framework\Support\Validator;

/**
 * Class FulltextIndexer.
 *
 * Provides indexing capabilities for category-related data, leveraging Magento's category module
 * and integrating with Magento's search functionality.
 */
class FulltextIndexer extends AbstractResourceModel
{
    /**
     * Constructor.
     *
     * Initializes the FulltextIndexer with required dependencies.
     *
     * @param ModelFactory $model Represents the category model and its associated metadata.
     * @param CollectionFactory $collectionFactory Factory to create and manage category collections.
     */
    public function __construct(
        ModelFactory $model,
        CollectionFactory $collectionFactory,
    ) {
        // Call parent constructor for shared resource model setup
        parent::__construct($model, $collectionFactory);
    }

    /**
     * Retrieve indexable documents for the index.
     *
     * Fetches a collection of models filtered by various parameters
     * (e.g., model ID, model IDs, pagination limits) and prepares them for indexing.
     *
     * @param int $storeId The store ID to filter results by.
     * @param array|null $modelIds Optional array of model IDs to include in the results.
     * @param int|null $lastEntityId Optional ID of the last processed model (used for pagination).
     * @param int $limit Maximum number of documents to retrieve (default is 100).
     *
     * @return array The array of indexable documents, ready for processing.
     */
    public function getIndexableDocuments(
        int $storeId,
        ?array $modelIds = null,
        ?int $lastEntityId = null,
        int $limit = 100,
    ): array {
        // Create a new instance of the model collection.
        $collection = $this->getCollection();

        // Set the item object class to the model.
        $collection->setItemObjectClass(Category::class);

        // Filter by status.
        $collection->addFieldToFilter(BaseCategoryInterface::KEY_IS_ACTIVE, Status::ACTIVE);

        // Filter by specific model IDs if provided.
        if (! Validator::isEmpty($modelIds)) {
            $collection->addFieldToFilter($this->getModel()->getKeyName(), ['in' => $modelIds]);
        }

        // Filter by last processed model ID if provided.
        if (! Validator::isNull($lastEntityId)) {
            $collection->addFieldToFilter($this->getModel()->getKeyName(), ['gt' => $lastEntityId]);
        }

        // Apply pagination and sorting.
        $collection->setPageSize($limit)
            ->setOrder($this->getModel()->getKeyName(), SortOrder::ASC);

        // Initialize an array to hold the processed data.
        $documents = [];

        // Map collection items to documents using the model.
        foreach ($collection as $item) {
            $documents[] = $this->getModel()->load($item->getId())->toDataArray();
        }

        return $documents;
    }
}
