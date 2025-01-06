<?php

declare(strict_types=1);

namespace Maginium\CategoryElasticIndexer\Models\Indexer;

use Magento\CatalogSearch\Model\Indexer\IndexerHandlerFactory;
use Magento\Framework\Indexer\ConfigInterface as IndexerConfigInterface;
use Magento\Framework\Search\Request\DimensionFactory;
use Maginium\CategoryElasticIndexer\Models\Indexer\Fulltext\Action\Full;
use Maginium\ElasticIndexer\Models\Indexer\AbstractFulltext;

/**
 * Fulltext.
 *
 * Handles category-specific full-text indexing operations, extending the shared functionality
 * from the AbstractFulltext class.
 */
class Fulltext extends AbstractFulltext
{
    /**
     * Constructor.
     *
     * Initializes the Fulltext indexer for categories with specific dependencies and passes them to the parent class.
     *
     * @param Full $fullAction Executes category-specific full index operations.
     * @param DimensionFactory $dimensionFactory Creates dimension instances for index operations.
     * @param IndexerConfigInterface $indexerConfig Provides configuration for the indexer.
     * @param IndexerHandlerFactory $indexHandlerFactory Creates index handler instances.
     */
    public function __construct(
        Full $fullAction,
        DimensionFactory $dimensionFactory,
        IndexerConfigInterface $indexerConfig,
        IndexerHandlerFactory $indexHandlerFactory,
    ) {
        // Pass dependencies to the parent AbstractFulltext constructor.
        parent::__construct($fullAction, $dimensionFactory, $indexerConfig, $indexHandlerFactory);
    }
}
