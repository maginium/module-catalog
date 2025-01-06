<?php

declare(strict_types=1);

namespace Maginium\Category\Models\Attributes;

use Maginium\Category\Models\Attributes\Category\GetterAttributes;
use Maginium\Category\Models\Attributes\Category\SetterAttributes;
// use Maginium\Framework\Database\Concerns\HasCustomAttributes;
// use Maginium\Framework\Database\Concerns\HasMetadata;
use Maginium\Framework\Database\Concerns\HasStatus;
use Maginium\Framework\Database\Concerns\HasTimestamps;
use Maginium\Store\Models\Concerns\HasStores;

/**
 * Trait CategoryAttributes.
 *
 * Defines attributes for the Category model, including getters, setters,
 * and common category-related functionalities like date of birth, gender, status, etc.
 */
trait CategoryAttributes
{
    // Getters for category attributes (e.g., name, email)
    use GetterAttributes;
    // Methods to manage custom attributes
    // use HasCustomAttributes;
    // Methods for managing metadata
    // use HasMetadata;
    // Methods to manage category status
    use HasStatus;
    // Methods for managing stores associated with the category
    use HasStores;
    // Methods to handle timestamps (created_at, updated_at)
    use HasTimestamps;
    // Setters for category attributes (e.g., name, email)
    use SetterAttributes;
}
