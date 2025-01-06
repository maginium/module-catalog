<?php

declare(strict_types=1);

namespace Maginium\Category\Facades;

use Maginium\Category\Interfaces\Data\CategoryInterface;
use Maginium\Framework\Database\Interfaces\Data\ModelInterface;
use Maginium\Framework\Support\Facade;

/**
 * Class Category.
 *
 * Facade for interacting with the Category Repository, which retrieves country information.
 *
 * @method static int|null getSortOrder() Get the sort order of the category.
 * @method static void setSortOrder(int $sortOrder) Set the sort order of the category.
 * @method static bool isDefault() Check if the category is the default category.
 * @method static void setIsDefault(bool $isDefault) Set whether the category is the default.
 * @method static int getId() Get the category ID.
 * @method static void setId(int $id) Set the category ID.
 * @method static string getCode() Get the category code.
 * @method static void setCode(string $code) Set the category code.
 * @method static string getName() Get the category name.
 * @method static void setName(string $name) Set the category name.
 * @method static int getDefaultGroupId() Get the default group ID for the category.
 * @method static void setDefaultGroupId(int $defaultGroupId) Set the default group ID for the category.
 * @method static \Magento\Store\Api\Data\CategoryExtensionInterface|null getExtensionAttributes() Retrieve the category's extension attributes.
 * @method static void setExtensionAttributes(\Magento\Store\Api\Data\CategoryExtensionInterface $extensionAttributes) Set the category's extension attributes.
 *
 * @see CategoryInterface
 * @see ModelInterface
 */
class Category extends Facade
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
        return CategoryInterface::class;
    }
}
