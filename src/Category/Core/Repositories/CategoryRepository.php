<?php

declare(strict_types=1);

namespace Maginium\Category\Repositories;

use Maginium\Category\Interfaces\Data\CategoryInterface;
use Maginium\Category\Interfaces\Repositories\CategoryRepositoryInterface;
use Maginium\Framework\Crud\Repository;

/**
 * Class CategoryRepository.
 *
 * This class extends the base `CategoryRepository` and implements custom functionality for handling categories.
 */
class CategoryRepository extends Repository implements CategoryRepositoryInterface
{
    /**
     * StoreRepository constructor.
     *
     * @param CategoryInterface $model The category model factory.
     */
    public function __construct(
        CategoryInterface $model,
    ) {
        parent::__construct($model);
    }
}
