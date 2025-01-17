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
interface CategoryInterface extends ModelInterface
{
    /**
     * Entity table identifier.
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
    public const ID = 'entity_id';

    /**
     * Constant for the "path" attribute.
     *
     * Represents the path of the entity within its hierarchy.
     *
     * @var string
     */
    public const PATH = 'path';

    /**
     * Constant for the "level" attribute.
     *
     * Represents the level in the entity's hierarchy.
     *
     * @var string
     */
    public const LEVEL = 'level';

    /**
     * Constant for the "position" attribute.
     *
     * Represents the position or ordering of the entity.
     *
     * @var string
     */
    public const POSITION = 'position';

    /**
     * Constant for the "parent_id" attribute.
     *
     * Represents the ID of the parent entity.
     *
     * @var string
     */
    public const PARENT_ID = 'parent_id';

    /**
     * Constant for the "children_count" attribute.
     *
     * Represents the count of child entities.
     *
     * @var string
     */
    public const CHILDREN_COUNT = 'children_count';

    /**
     * Constant for the "attribute_set_id" attribute.
     *
     * Represents the ID of the attribute set.
     *
     * @var string
     */
    public const ATTRIBUTE_SET_ID = 'attribute_set_id';
}
