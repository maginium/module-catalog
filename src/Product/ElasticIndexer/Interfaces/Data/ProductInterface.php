<?php

declare(strict_types=1);

namespace Maginium\ProductElasticIndexer\Interfaces\Data;

use Maginium\Product\Interfaces\Data\ProductInterface as BaseProductInterface;

/**
 * Interface ProductInterface.
 *
 * This interface defines constants used for interacting with the product model in the Maginium module.
 * It includes table name, event prefix, and field identifiers that are commonly used across models and other parts
 * of the application related to the product data.
 */
interface ProductInterface extends BaseProductInterface
{
    /**
     * Entity table identifier.
     *
     * This constant represents the name of the table used to store product data.
     * It is used across models, repositories, and other parts of the application to reference the database table.
     *
     * @var string
     */
    public const INDEX_NAME = 'products';
}
