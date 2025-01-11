<?php

declare(strict_types=1);

namespace Maginium\CategoryElasticIndexer\Services;

use Maginium\CategoryElasticIndexer\Interfaces\Repositories\CategoryRepositoryInterface;
use Maginium\CategoryElasticIndexer\Interfaces\Services\CategoryServiceInterface;
use Maginium\Framework\Crud\Service;

/**
 * Class CategoryService.
 *
 * This class extends the base `CategoryService` and implements custom functionality for handling categorys.
 */
class CategoryService extends Service implements CategoryServiceInterface
{
    /**
     * CategoryService constructor.
     *
     * @param CategoryRepositoryInterface $categoryRepository The category repository interface.
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        parent::__construct($categoryRepository);
    }
}
