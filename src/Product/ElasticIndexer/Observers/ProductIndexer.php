<?php

declare(strict_types=1);

namespace Maginium\ProductElasticIndexer\Observers;

use Maginium\ElasticIndexer\Abstracts\AbstractIndexerObserver;
use Maginium\Framework\Database\Interfaces\Data\ModelInterface;
use Maginium\Framework\Support\Facades\Log;
use Maginium\Product\Interfaces\Data\ProductInterface;

/**
 * Class ProductIndexer.
 *
 * This class observes product-related events such as save, delete, duplicate, and mass actions.
 * It processes the reindexing of categories based on changes made to product models.
 */
class ProductIndexer extends AbstractIndexerObserver
{
    /**
     * ProductIndexer constructor.
     *
     * Initializes the observer with optional dependencies for the model and index repository.
     * Additionally, it sets the class name for logging purposes, allowing for easier tracking of events.
     *
     * @param ModelInterface $model The model for product models.
     */
    public function __construct(
        ProductInterface $model,
    ) {
        // Call parent constructor to initialize model and index repository
        parent::__construct($model);

        // Set the logger class name to the current observer's class for better logging context
        Log::setClassName(static::class);
    }

    /**
     * Executes actions after a product is saved.
     *
     * Logs the event and triggers reindexing for the saved product model.
     *
     * @param object $model The product model that was saved.
     *
     * @return void
     */
    protected function saveAfter($model): void
    {
        // Trigger reindexing for the saved product by its model ID
        $this->reindex([$model->getData($this->model->getKeyName())]);
    }

    /**
     * Executes actions after a product is deleted.
     *
     * Logs the event and triggers reindexing for the deleted product model.
     *
     * @param object $model The product model that was deleted.
     *
     * @return void
     */
    protected function deleteAfter($model): void
    {
        // Trigger reindexing for the deleted product by its model ID
        $this->reindex([$model->getData($this->model->getKeyName())]);
    }

    /**
     * Executes actions before duplicating a product.
     *
     * Logs the event and triggers reindexing for the duplicated product model.
     *
     * @param object $model The product model to be duplicated.
     *
     * @return void
     */
    protected function duplicateEvent($model): void
    {
        // Trigger reindexing for the duplicated product by its model ID
        $this->reindex([$model->getData($this->model->getKeyName())]);
    }

    /**
     * Executes actions after mass duplicating categories.
     *
     * Logs the event and triggers reindexing for each duplicated product model.
     *
     * @param ModelInterface[] $models The array of duplicated product models.
     *
     * @return void
     */
    protected function massDuplicateAfter(array $models): void
    {
        // Loop through the array of duplicated models and trigger reindexing for each product
        foreach ($models as $model) {
            // Trigger reindexing for each duplicated product model
            $this->reindex([$model->getData($this->model->getKeyName())]);
        }
    }

    /**
     * Executes actions after mass deleting categories.
     *
     * Logs the event and triggers reindexing for each deleted product model.
     *
     * @param ModelInterface[] $models The array of deleted product models.
     *
     * @return void
     */
    protected function massDeleteAfter(array $models): void
    {
        // Loop through the array of deleted models and trigger reindexing for each product
        foreach ($models as $model) {
            // Trigger reindexing for each deleted product model
            $this->reindex([$model->getData($this->model->getKeyName())]);
        }
    }
}
