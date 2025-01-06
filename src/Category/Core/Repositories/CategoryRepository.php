<?php

declare(strict_types=1);

namespace Maginium\Category\Repositories;

use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory as CategoryCollectionFactory;
use Maginium\Category\Interfaces\Data\CategoryInterfaceFactory as ModelFactory;
use Maginium\Category\Interfaces\Repositories\CategoryRepositoryInterface;
use Maginium\Framework\Crud\Repository;

/**
 * Class CategoryRepository.
 *
 * This class extends the base `CategoryRepository` and implements custom functionality for handling categories.
 */
class CategoryRepository /* extends Repository */ implements CategoryRepositoryInterface
{
    /**
     * StoreRepository constructor.
     *
     * @param ModelFactory $model The category model factory.
     * @param CategoryCollectionFactory $collection The category collection factory.
     */
    public function __construct(
        ModelFactory $model,
        CategoryCollectionFactory $collection,
    ) {
        // parent::__construct($model, $collection);
    }
}
