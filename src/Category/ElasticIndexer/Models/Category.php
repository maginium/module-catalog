<?php

declare(strict_types=1);

namespace Maginium\CategoryElasticIndexer\Models;

use Maginium\Category\Interfaces\Data\CategoryInterface;
use Maginium\Category\Models\Attributes\CategoryAttributes;
use Maginium\CategoryElasticIndexer\Models\Scopes\CategoryScopes;
use Maginium\Foundation\Enums\DataType;
use Maginium\Framework\Database\Eloquent\Model as EloquentModel;
use Maginium\Framework\Database\Enums\SearcherEngines;
use Maginium\Framework\Elasticsearch\Eloquent\Model;

/**
 * Category Model.
 *
 * Represents the Category model with attributes and relationships mapped
 * to the `categories` table and Elasticsearch for indexing purposes.
 *
 * @mixin EloquentModel
 */
class Category extends Model
{
    // Trait for handling attributes
    use CategoryAttributes;
    // Trait for handling scopes
    use CategoryScopes;

    /**
     * Connection name for the database.
     *
     * @var string
     */
    protected $connection = SearcherEngines::ELASTIC_SEARCH;

    /**
     * Elasticsearch index name.
     *
     * @var string
     */
    protected $index = CategoryInterface::TABLE_NAME;

    /**
     * Primary key for the Category model.
     *
     * @var string
     */
    protected $primaryKey = CategoryInterface::ID;

    /**
     * The "type" of the primary key ID.
     *
     * This is usually 'int', but could be 'string' for UUIDs.
     *
     * @var string
     */
    protected $keyType = DataType::INT;
}
