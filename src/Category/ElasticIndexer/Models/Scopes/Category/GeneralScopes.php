<?php

declare(strict_types=1);

namespace Maginium\CategoryElasticIndexer\Models\Scopes\Category;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Trait CategoryScopes.
 *
 * This trait provides scope methods specifically for filtering category-based data,
 * such as by `category_id`, `category_code`, and other category-related attributes.
 *
 * @method AbstractCollection scopeCategoryId(int $categoryId) Find categories by their `category_id`.
 */
trait GeneralScopes
{
}
