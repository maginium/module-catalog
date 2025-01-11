<?php

declare(strict_types=1);

namespace Maginium\Product\Models;

use Magento\Catalog\Api\Data\ProductInterface as BaseModelInterface;
use Magento\Framework\Model\AbstractExtensibleModel;
use Magento\Framework\Model\AbstractModel;
use Maginium\Foundation\Enums\DataType;
use Maginium\Framework\Crud\Traits\Filterable;
use Maginium\Framework\Crud\Traits\Sortable;
use Maginium\Framework\Database\Eloquent\Model;
use Maginium\Framework\Database\Interfaces\SearchableInterface;
use Maginium\Product\Interfaces\Data\ProductInterface;
use Maginium\Product\Models\Attributes\ProductAttributes;
use Maginium\Product\Models\Scopes\ProductScopes;
use Maginium\ProductElasticIndexer\Models\Product as ElasticModel;

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
class Product extends Model implements ProductInterface, SearchableInterface
{
    // Trait for handling filters
    use Filterable;
    // Trait for handling attributes
    use ProductAttributes;
    // Trait for handling scopes
    use ProductScopes;
    // Trait for handling sorts
    use Sortable;

    /**
     * The table associated with the model.
     *
     * @var string|null
     */
    public $table = self::TABLE_NAME;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    public $primaryKey = self::ID;

    /**
     * The "type" of the primary key ID.
     *
     * This is usually 'int', but could be 'string' for UUIDs.
     *
     * @var string
     */
    public $keyType = DataType::INT;

    /**
     * The status column key associated with the model.
     *
     * @var string
     */
    public string $statusKey = BaseModelInterface::STATUS;

    /**
     * The class name of the Elastic model associated with this instance.
     *
     * Used for Elasticsearch integration, enabling indexing and querying of model data.
     *
     * @var class-string<ElasticModel>|null
     */
    public ?string $elasticModel = ElasticModel::class;

    /**
     * The class name of the base model associated with this instance.
     *
     * Provides a base configuration model for resource handling or fallback logic.
     *
     * @var class-string<AbstractModel>|class-string<AbstractExtensibleModel>|null
     */
    protected ?string $baseModel = BaseModelInterface::class;
}
