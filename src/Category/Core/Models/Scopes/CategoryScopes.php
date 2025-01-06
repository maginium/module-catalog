<?php

declare(strict_types=1);

namespace Maginium\Category\Models\Scopes;

use Maginium\Category\Models\Scopes\Category\GeneralScopes;

/**
 * Trait CategoryScopes.
 *
 * This trait provides common query scopes for the Category model, enabling
 * flexible querying options through the use of predefined scopes.
 *
 * It includes general, store, and website scopes to allow querying across
 * different contexts like store and website-specific data.
 */
trait CategoryScopes
{
    // Include general query scopes applicable to the Category model.
    use GeneralScopes;
}
