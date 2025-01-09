<?php

declare(strict_types=1);

namespace Maginium\CategoryElasticIndexer\Interfaces\Data;

use Maginium\Category\Interfaces\Data\CategoryInterface as BaseCategoryInterface;

/**
 * Interface CategoryInterface.
 *
 * This interface defines constants used for interacting with the category model in the Maginium module.
 * It includes table name, event prefix, and field identifiers that are commonly used across models and other parts
 * of the application related to the category data.
 */
interface CategoryInterface extends BaseCategoryInterface
{
    /**
     * Entity table identifier.
     *
     * This constant represents the name of the table used to store category data.
     * It is used across models, repositories, and other parts of the application to reference the database table.
     *
     * @var string
     */
    public const INDEX_NAME = 'categorys';
}
