<?php

declare(strict_types=1);

namespace Maginium\ProductElasticIndexer\Models;

use Maginium\Foundation\Enums\DataType;
use Maginium\Framework\Database\Eloquent\Model as EloquentModel;
use Maginium\Framework\Database\Enums\SearcherEngines;
use Maginium\Framework\Elasticsearch\Eloquent\Model;
use Maginium\Product\Interfaces\Data\ProductInterface;
use Maginium\Product\Models\Attributes\ProductAttributes;
use Maginium\ProductElasticIndexer\Models\Scopes\ProductScopes;
use Maginium\ProductReviews\Interfaces\Data\ReviewInterface;
use Maginium\ProductReviewsElasticIndexer\Models\Review;

/**
 * Product Model.
 *
 * Represents the Product model with attributes and relationships mapped
 * to the `products` table and Elasticsearch for indexing purposes.
 *
 * @mixin EloquentModel
 */
class Product extends Model
{
    // Trait for handling attributes
    use ProductAttributes;
    // Trait for handling scopes
    use ProductScopes;

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
    protected $index = ProductInterface::TABLE_NAME;

    /**
     * Primary key for the Product model.
     *
     * @var string
     */
    protected $primaryKey = ProductInterface::ID;

    /**
     * The "type" of the primary key ID.
     *
     * This is usually 'int', but could be 'string' for UUIDs.
     *
     * @var string
     */
    protected $keyType = DataType::INT;

    // Relationship: Product has many reviews.
    // public function reviews()
    // {
    //     return $this->hasMany(Review::class, ReviewInterface::PRODUCT_ID, static::ID);
    // }
}
