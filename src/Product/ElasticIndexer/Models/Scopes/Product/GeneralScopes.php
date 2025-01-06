<?php

declare(strict_types=1);

namespace Maginium\ProductElasticIndexer\Models\Scopes\Product;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Trait ProductScopes.
 *
 * This trait provides scope methods specifically for filtering product-based data,
 * such as by `product_id`, `product_code`, and other product-related attributes.
 *
 * @method AbstractCollection scopeProductId(int $productId) Find products by their `product_id`.
 */
trait GeneralScopes
{
}
