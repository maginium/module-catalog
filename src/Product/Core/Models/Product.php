<?php

declare(strict_types=1);

namespace Maginium\Product\Models;

use Magento\Catalog\Api\Data\ProductInterface as BaseProductInterface;
use Magento\Catalog\Model\Product as BaseProduct;
use Maginium\Foundation\Enums\DataType;
use Maginium\Framework\Database\Concerns\HasEnhancedModel;
use Maginium\Framework\Database\Interfaces\SearchableInterface;
use Maginium\Product\Interfaces\Data\ProductInterface;
use Maginium\Product\Models\Attributes\ProductAttributes;
use Maginium\Product\Models\Scopes\ProductScopes;

/**
 * Class Product.
 *
 * Model for handling countries.
 * This model interacts with the corresponding resource model
 * for database operations and provides methods to access and modify
 * the data fields.
 *
 * @template TKey of array-key
 * @template TValue
 */
class Product extends BaseProduct implements BaseProductInterface, ProductInterface, SearchableInterface
{
    // Include additional database handling utilities.
    use HasEnhancedModel;
    // Trait for handling attributes
    use ProductAttributes;
    // Trait for handling scopes
    use ProductScopes;

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
    public static string $statusKey = self::STATUS;

    /*
     * Get the instance as an array.
     *
     * @param array $keys Optional keys to include in the resulting array.
     *
     * @return array<TKey, TValue>
     */
    // public function toDataArray(array $keys = ['*']): array
    // {
    //     // Build an array with key-value pairs representing different properties of the Entity
    //     $this->dataArray = [
    //         // Basic information
    //         'id' => $this->getId(),
    //         'created_at' => $this->getCreatedAt(),
    //         'updated_at' => $this->getUpdatedAt(),

    //         // Metadata
    //         'metadata' => $this->getMetadata(),
    //     ];

    //     // Convert the response array to a collection for easier manipulation and filtering
    //     $dataArray = collect($this->dataArray);

    //     // If no specific keys are provided, or if '*' is included, include all response data
    //     if (empty($keys) || in_array('*', $keys, true)) {
    //         // Return the full response as an array
    //         return $dataArray->toArray();
    //     }

    //     // If specific keys are provided, filter the response to include only those keys
    //     // Return only the specified keys from the response
    //     return $dataArray->only($keys)->toArray();
    // }
}
