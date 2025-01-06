<?php

declare(strict_types=1);

namespace Maginium\CategoryElasticIndexer\Models\Scopes;

use Maginium\Category\Models\Scopes\Category\GeneralScopes;

/**
 * Trait CategoryScopes.
 *
 * This trait provides common query scopes for the Category model, enabling
 * flexible querying options through the use of predefined scopes.
 */
trait CategoryScopes
{
    // Include general query scopes applicable to the Category model.
    use GeneralScopes;
}
