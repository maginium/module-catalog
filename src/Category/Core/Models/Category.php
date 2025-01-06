<?php

declare(strict_types=1);

namespace Maginium\Category\Models;

use Magento\Catalog\Api\Data\CategoryInterface as BaseCategoryInterface;
use Magento\Catalog\Model\Category as BaseCategory;
use Maginium\Category\Interfaces\Data\CategoryInterface;
use Maginium\Category\Models\Attributes\CategoryAttributes;
use Maginium\Category\Models\Scopes\CategoryScopes;
use Maginium\Foundation\Enums\DataType;
use Maginium\Framework\Database\Concerns\HasEnhancedModel;
use Maginium\Framework\Database\Interfaces\SearchableInterface;

/**
 * Class Category.
 *
 * Model for handling countries.
 * This model interacts with the corresponding resource model
 * for database operations and provides methods to access and modify
 * the data fields.
 *
 * @template TKey of array-key
 * @template TValue
 */
class Category extends BaseCategory implements BaseCategoryInterface, CategoryInterface, SearchableInterface
{
    // Trait for handling attributes
    use CategoryAttributes;
    // Trait for handling scopes
    use CategoryScopes;
    // Include additional database handling utilities.
    use HasEnhancedModel;

    /**
     * The table associated with the model.
     *
     * @var string|null
     */
    public static string $table = self::TABLE_NAME;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    public static string $primaryKey = self::ID;

    /**
     * The "type" of the primary key ID.
     *
     * This is usually 'int', but could be 'string' for UUIDs.
     *
     * @var string
     */
    public static string $keyType = DataType::INT;

    /**
     * The status column key associated with the model.
     *
     * @var string
     */
    public static string $statusKey = self::KEY_IS_ACTIVE;

    /**
     * Get the instance as an array.
     *
     * @param array $keys Optional keys to include in the resulting array.
     *
     * @return array<TKey, TValue>
     */
    public function toDataArray(array $keys = ['*']): array
    {
        // Build an array with key-value pairs representing different properties of the Entity
        $this->dataArray = [
            // Basic information
            'id' => $this->getId(),
            'status' => $this->getStatus(),
            'created_at' => $this->getCreatedAt(),
            'updated_at' => $this->getUpdatedAt(),

            // Metadata
            'metadata' => $this->getMetadata(),
        ];

        // Convert the response array to a collection for easier manipulation and filtering
        $dataArray = collect($this->dataArray);

        // If no specific keys are provided, or if '*' is included, include all response data
        if (empty($keys) || in_array('*', $keys, true)) {
            // Return the full response as an array
            return $dataArray->toArray();
        }

        // If specific keys are provided, filter the response to include only those keys
        // Return only the specified keys from the response
        return $dataArray->only($keys)->toArray();
    }
}
