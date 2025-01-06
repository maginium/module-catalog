<?php

declare(strict_types=1);

namespace Maginium\Category\Interfaces\Data;

use Maginium\Framework\Database\Interfaces\Data\ModelInterface;

// use Maginium\Framework\Database\Interfaces\HasMetadataInterface;

/**
 * Interface CategoryInterface.
 *
 * This interface defines constants used for interacting with the category model in the Maginium module.
 * It includes table name, event prefix, and field identifiers that are commonly used across models and other parts
 * of the application related to the category data.
 */
interface CategoryInterface extends /* HasMetadataInterface, */ ModelInterface
{
    /**
     * Entity table_name identifier.
     *
     * This constant represents the name of the table used to store category data.
     * It is used across models, repositories, and other parts of the application to reference the database table.
     *
     * @var string
     */
    public const TABLE_NAME = 'category';

    /**
     * Prefix of model events names.
     *
     * This constant defines the prefix used for model-related event names.
     * Events related to category data can be triggered with names like
     * "category_save_before" or "category_delete_after".
     *
     * @var string
     */
    public const EVENT_PREFIX = 'category';

    /**
     * The name of the table that stores category name and other varchar attributes.
     *
     * This table is used to store attributes of type `varchar` related to categories,
     * such as category name, SKU, and other short text attributes.
     */
    public const CATALOG_CATEGORY_ENTITY_VARCHAR_TABLE_NAME = 'catalog_category_entity_varchar';

    /**
     * The name of the table that stores category description and other text attributes.
     *
     * This table is used to store attributes of type `text` related to categories,
     * such as category descriptions, long attributes, or any detailed text data.
     */
    public const CATALOG_CATEGORY_ENTITY_TEXT_TABLE_NAME = 'catalog_category_entity_text';

    /**
     * Category ID field.
     *
     * This constant represents the field name for the unique identifier (ID) of the category.
     * It is used in database operations to reference the category's ID field.
     *
     * @var string
     */
    public const ID = 'model_id';
}
