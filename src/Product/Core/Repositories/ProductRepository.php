<?php

declare(strict_types=1);

namespace Maginium\Product\Repositories;

use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use Maginium\Framework\Crud\Repository;
use Maginium\Product\Interfaces\Data\ProductInterfaceFactory as ModelFactory;
use Maginium\Product\Interfaces\Repositories\ProductRepositoryInterface;

/**
 * Class ProductRepository.
 *
 * This class extends the base `ProductRepository` and implements custom functionality for handling products.
 */
class ProductRepository /* extends Repository */ implements ProductRepositoryInterface
{
    /**
     * StoreRepository constructor.
     *
     * @param ModelFactory $model The product model factory.
     * @param ProductCollectionFactory $collection The product collection factory.
     */
    public function __construct(
        ModelFactory $model,
        ProductCollectionFactory $collection,
    ) {
        // parent::__construct($model, $collection);
    }
}
