<?php

declare(strict_types=1);

namespace Maginium\Product\Models\Scopes;

use Maginium\Product\Models\Scopes\Product\GeneralScopes;

/**
 * Trait ProductScopes.
 *
 * This trait provides common query scopes for the Product model, enabling
 * flexible querying options through the use of predefined scopes.
 *
 * It includes general, store, and website scopes to allow querying across
 * different contexts like store and website-specific data.
 */
trait ProductScopes
{
    // Include general query scopes applicable to the Product model.
    use GeneralScopes;
}
