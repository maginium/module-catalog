<?php

declare(strict_types=1);

namespace Maginium\Product\Repositories;

use Maginium\Framework\Crud\Repository;
use Maginium\Product\Interfaces\Data\ProductInterface;
use Maginium\Product\Interfaces\Repositories\ProductRepositoryInterface;

/**
 * Class ProductRepository.
 *
 * This class extends the base `ProductRepository` and implements custom functionality for handling products.
 */
class ProductRepository extends Repository implements ProductRepositoryInterface
{
    /**
     * StoreRepository constructor.
     *
     * @param ProductInterface $model The product model factory.
     */
    public function __construct(
        ProductInterface $model,
    ) {
        parent::__construct($model);
    }
}
