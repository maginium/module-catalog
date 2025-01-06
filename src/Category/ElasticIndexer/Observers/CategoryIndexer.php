<?php

declare(strict_types=1);

namespace Maginium\CategoryElasticIndexer\Observers;

use Maginium\Category\Interfaces\Data\CategoryInterface;
use Maginium\ElasticIndexer\Abstracts\AbstractIndexerObserver;
use Maginium\Framework\Database\Interfaces\Data\ModelInterface;
use Maginium\Framework\Support\Facades\Log;

/**
 * Class CategoryIndexer.
 *
 * This class observes category-related events such as save, delete, duplicate, and mass actions.
 * It processes the reindexing of categories based on changes made to category models.
 */
class CategoryIndexer extends AbstractIndexerObserver
{
    /**
     * CategoryIndexer constructor.
     *
     * Initializes the observer with optional dependencies for the model and index repository.
     * Additionally, it sets the class name for logging purposes, allowing for easier tracking of events.
     *
     * @param ModelInterface $model The model for category models.
     */
    public function __construct(
        CategoryInterface $model,
    ) {
        // Call parent constructor to initialize model and index repository
        parent::__construct($model);

        // Set the logger class name to the current observer's class for better logging context
        Log::setClassName(static::class);
    }

    /**
     * Executes actions after a category is saved.
     *
     * Logs the event and triggers reindexing for the saved category model.
     *
     * @param object $model The category model that was saved.
     *
     * @return void
     */
    protected function saveAfter($model): void
    {
        // Trigger reindexing for the saved category by its model ID
        $this->reindex([$model->getData($this->model->getKeyName())]);
    }

    /**
     * Executes actions after a category is deleted.
     *
     * Logs the event and triggers reindexing for the deleted category model.
     *
     * @param object $model The category model that was deleted.
     *
     * @return void
     */
    protected function deleteAfter($model): void
    {
        // Trigger reindexing for the deleted category by its model ID
        $this->reindex([$model->getData($this->model->getKeyName())]);
    }

    /**
     * Executes actions before duplicating a category.
     *
     * Logs the event and triggers reindexing for the duplicated category model.
     *
     * @param object $model The category model to be duplicated.
     *
     * @return void
     */
    protected function duplicateEvent($model): void
    {
        // Trigger reindexing for the duplicated category by its model ID
        $this->reindex([$model->getData($this->model->getKeyName())]);
    }

    /**
     * Executes actions after mass duplicating categories.
     *
     * Logs the event and triggers reindexing for each duplicated category model.
     *
     * @param ModelInterface[] $models The array of duplicated category models.
     *
     * @return void
     */
    protected function massDuplicateAfter(array $models): void
    {
        // Loop through the array of duplicated models and trigger reindexing for each category
        foreach ($models as $model) {
            // Trigger reindexing for each duplicated category model
            $this->reindex([$model->getData($this->model->getKeyName())]);
        }
    }

    /**
     * Executes actions after mass deleting categories.
     *
     * Logs the event and triggers reindexing for each deleted category model.
     *
     * @param ModelInterface[] $models The array of deleted category models.
     *
     * @return void
     */
    protected function massDeleteAfter(array $models): void
    {
        // Loop through the array of deleted models and trigger reindexing for each category
        foreach ($models as $model) {
            // Trigger reindexing for each deleted category model
            $this->reindex([$model->getData($this->model->getKeyName())]);
        }
    }
}
