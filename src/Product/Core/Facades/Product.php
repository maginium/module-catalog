<?php

declare(strict_types=1);

namespace Maginium\Product\Facades;

use Maginium\Framework\Database\Interfaces\Data\ModelInterface;
use Maginium\Framework\Support\Facade;
use Maginium\Product\Interfaces\Data\ProductInterface;

/**
 * Class Product.
 *
 * Facade for interacting with the Product Repository, which retrieves country information.
 *
 * @method static int|null getSortOrder() Get the sort order of the product.
 * @method static void setSortOrder(int $sortOrder) Set the sort order of the product.
 * @method static bool isDefault() Check if the product is the default product.
 * @method static void setIsDefault(bool $isDefault) Set whether the product is the default.
 * @method static int getId() Get the product ID.
 * @method static void setId(int $id) Set the product ID.
 * @method static string getCode() Get the product code.
 * @method static void setCode(string $code) Set the product code.
 * @method static string getName() Get the product name.
 * @method static void setName(string $name) Set the product name.
 * @method static int getDefaultGroupId() Get the default group ID for the product.
 * @method static void setDefaultGroupId(int $defaultGroupId) Set the default group ID for the product.
 * @method static \Magento\Store\Api\Data\ProductExtensionInterface|null getExtensionAttributes() Retrieve the product's extension attributes.
 * @method static void setExtensionAttributes(\Magento\Store\Api\Data\ProductExtensionInterface $extensionAttributes) Set the product's extension attributes.
 *
 * @see ProductInterface
 * @see ModelInterface
 */
class Product extends Facade
{
    /**
     * Get the accessor for the facade.
     *
     * This method must be implemented by subclasses to return the accessor string
     * corresponding to the underlying service or class the facade represents.
     *
     * @return string The accessor for the facade.
     */
    protected static function getAccessor(): string
    {
        return ProductInterface::class;
    }
}
