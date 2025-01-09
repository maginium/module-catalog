<?php

declare(strict_types=1);

namespace Maginium\Product\Interfaces\Data;

use Maginium\Framework\Database\Interfaces\Data\ModelInterface;

// use Maginium\Framework\Database\Interfaces\HasMetadataInterface;

/**
 * Interface ProductInterface.
 *
 * This interface defines constants used for interacting with the product model in the Maginium module.
 * It includes table name, event prefix, and field identifiers that are commonly used across models and other parts
 * of the application related to the product data.
 */
interface ProductInterface extends ModelInterface
{
    /**
     * Entity table identifier.
     *
     * This constant represents the name of the table used to store product data.
     * It is used across models, repositories, and other parts of the application to reference the database table.
     *
     * @var string
     */
    public const TABLE_NAME = 'product';

    /**
     * Prefix of model events names.
     *
     * This constant defines the prefix used for model-related event names.
     * Events related to product data can be triggered with names like
     * "product_save_before" or "product_delete_after".
     *
     * @var string
     */
    public const EVENT_PREFIX = 'product';

    /**
     * The name of the table that stores product name and other varchar attributes.
     *
     * This table is used to store attributes of type `varchar` related to products,
     * such as product name, SKU, and other short text attributes.
     */
    public const CATALOG_PRODUCT_ENTITY_VARCHAR_TABLE_NAME = 'catalog_product_entity_varchar';

    /**
     * The name of the table that stores product description and other text attributes.
     *
     * This table is used to store attributes of type `text` related to products,
     * such as product descriptions, long attributes, or any detailed text data.
     */
    public const CATALOG_PRODUCT_ENTITY_TEXT_TABLE_NAME = 'catalog_product_entity_text';

    /**
     * The name of the table that stores EAV attribute labels.
     *
     * This table contains labels for EAV (Entity-Attribute-Value) attributes,
     * which provide a human-readable name for attributes used across models like
     * products, categories, and customers.
     */
    public const EAV_ATTRIBUTE_LABEL_TABLE_NAME = 'eav_attribute_label';

    /**
     * Product ID field.
     *
     * This constant represents the field name for the unique identifier (ID) of the product.
     * It is used in database operations to reference the product's ID field.
     *
     * @var string
     */
    public const ID = 'entity_id';
}
