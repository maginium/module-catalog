<?php

declare(strict_types=1);

namespace Maginium\ProductElasticIndexer\Repositories;

use Maginium\Framework\Crud\Repository;
use Maginium\Product\Interfaces\Repositories\ProductRepositoryInterface;
use Maginium\ProductElasticIndexer\Interfaces\Data\ProductInterface;

/**
 * Class ProductRepository.
 *
 * This class extends the base `ProductRepository` and implements custom functionality for handling products.
 */
class ProductRepository extends Repository implements ProductRepositoryInterface
{
    /**
     * The repository identifier.
     *
     * @var string
     */
    protected string $repositoryId = 'product';

    /**
     * ProductRepository constructor.
     *
     * @param ProductInterface $model The product model interface.
     */
    public function __construct(ProductInterface $model)
    {
        parent::__construct($model);
    }
}
