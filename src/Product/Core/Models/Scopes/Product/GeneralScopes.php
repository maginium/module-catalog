<?php

declare(strict_types=1);

namespace Maginium\Product\Models\Scopes\Product;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Maginium\Product\Models\Product;

/**
 * Trait ProductScopes.
 *
 * Defines general scopes for product operations.
 *
 * @method AbstractCollection|null scopeFindById(int $productId) Finds a product by their ID.
 * @method AbstractCollection scopeFindByStatus(string $status) Retrieves products based on their account status.
 * @method AbstractCollection scopeFindByCreatedAt(string $date) Retrieves products created on or after the given date.
 * @method AbstractCollection scopeFindByUpdatedAt(string $date) Retrieves products updated on or after the given date.
 */
trait GeneralScopes
{
    /**
     * Finds a product by their ID.
     *
     * @param int $productId The product ID to search for.
     *
     * @return AbstractCollection|null The product, or null if not found.
     */
    public function scopeFindById(int $productId): ?AbstractCollection
    {
        return $this->getCollection()
            ->addFieldToFilter('entity_id', ['eq' => $productId])
            ->addAttributeToSelect('*');
    }

    /**
     * Retrieves products based on their account status (e.g., enabled or disabled).
     *
     * @param string $status The status of the account (e.g., 'enabled', 'disabled').
     *
     * @return AbstractCollection The collection of products with the specified status.
     */
    public function scopeFindByStatus(string $status): AbstractCollection
    {
        return $this->getCollection()
            ->addFieldToFilter('status', ['eq' => $status])
            ->addAttributeToSelect('*');
    }

    /**
     * Retrieves products created on or after the given date.
     *
     * @param string $date The date to filter products by.
     *
     * @return AbstractCollection The collection of products created on or after the specified date.
     */
    public function scopeFindByCreatedAt(string $date): AbstractCollection
    {
        return $this->getCollection()
            ->addFieldToFilter('created_at', ['gteq' => $date])
            ->addAttributeToSelect('*');
    }

    /**
     * Retrieves products updated on or after the given date.
     *
     * @param string $date The date to filter products by.
     *
     * @return AbstractCollection The collection of products updated on or after the specified date.
     */
    public function scopeFindByUpdatedAt(string $date): AbstractCollection
    {
        return $this->getCollection()
            ->addFieldToFilter('updated_at', ['gteq' => $date])
            ->addAttributeToSelect('*');
    }
}
