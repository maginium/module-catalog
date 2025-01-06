<?php

declare(strict_types=1);

namespace Maginium\Product\Models\Attributes;

// use Maginium\Framework\Database\Concerns\HasCustomAttributes;
// use Maginium\Framework\Database\Concerns\HasMetadata;
// use Maginium\Framework\Database\Concerns\HasStatus;
use Maginium\Framework\Database\Concerns\HasTimestamps;
use Maginium\Product\Models\Attributes\Product\GetterAttributes;
use Maginium\Product\Models\Attributes\Product\SetterAttributes;
use Maginium\Store\Models\Concerns\HasStores;

/**
 * Trait ProductAttributes.
 *
 * Defines attributes for the Product model, including getters, setters,
 * and common product-related functionalities like date of birth, gender, status, etc.
 */
trait ProductAttributes
{
    // Getters for product attributes (e.g., name, email)
    use GetterAttributes;
    // Methods to manage custom attributes
    // use HasCustomAttributes;
    // Methods for managing metadata
    // use HasMetadata;
    // Methods to manage product status
    // use HasStatus;
    // Methods for managing stores associated with the product
    use HasStores;
    // Methods to handle timestamps (created_at, updated_at)
    use HasTimestamps;
    // Setters for product attributes (e.g., name, email)
    use SetterAttributes;
}
