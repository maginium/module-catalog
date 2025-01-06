<?php

declare(strict_types=1);

namespace Maginium\Category\Models\Scopes\Category;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Trait CategoryScopes.
 *
 * Defines general scopes for category operations.
 *
 * @method AbstractCollection|null scopeFindById(int $categoryId) Finds a category by their ID.
 * @method AbstractCollection scopeFindByStatus(string $status) Retrieves categories based on their account status.
 * @method AbstractCollection scopeFindByCreatedAt(string $date) Retrieves categories created on or after the given date.
 * @method AbstractCollection scopeFindByUpdatedAt(string $date) Retrieves categories updated on or after the given date.
 */
trait GeneralScopes
{
    /**
     * Finds a category by their ID.
     *
     * @param int $categoryId The category ID to search for.
     *
     * @return AbstractCollection|null The category, or null if not found.
     */
    public function scopeFindById(int $categoryId): ?AbstractCollection
    {
        return $this->getCollection()
            ->addFieldToFilter('model_id', ['eq' => $categoryId])
            ->addAttributeToSelect('*');
    }

    /**
     * Retrieves categories based on their account status (e.g., enabled or disabled).
     *
     * @param string $status The status of the account (e.g., 'enabled', 'disabled').
     *
     * @return AbstractCollection The collection of categories with the specified status.
     */
    public function scopeFindByStatus(string $status): AbstractCollection
    {
        return $this->getCollection()
            ->addFieldToFilter('status', ['eq' => $status])
            ->addAttributeToSelect('*');
    }

    /**
     * Retrieves categories created on or after the given date.
     *
     * @param string $date The date to filter categories by.
     *
     * @return AbstractCollection The collection of categories created on or after the specified date.
     */
    public function scopeFindByCreatedAt(string $date): AbstractCollection
    {
        return $this->getCollection()
            ->addFieldToFilter('created_at', ['gteq' => $date])
            ->addAttributeToSelect('*');
    }

    /**
     * Retrieves categories updated on or after the given date.
     *
     * @param string $date The date to filter categories by.
     *
     * @return AbstractCollection The collection of categories updated on or after the specified date.
     */
    public function scopeFindByUpdatedAt(string $date): AbstractCollection
    {
        return $this->getCollection()
            ->addFieldToFilter('updated_at', ['gteq' => $date])
            ->addAttributeToSelect('*');
    }
}
