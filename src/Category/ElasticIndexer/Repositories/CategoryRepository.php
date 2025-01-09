<?php

declare(strict_types=1);

namespace Maginium\CategoryElasticIndexer\Repositories;

use Maginium\Category\Interfaces\Repositories\CategoryRepositoryInterface;
use Maginium\CategoryElasticIndexer\Interfaces\Data\CategoryInterface;
use Maginium\Framework\Crud\Repository;

/**
 * Class CategoryRepository.
 *
 * This class extends the base `CategoryRepository` and implements custom functionality for handling categorys.
 */
class CategoryRepository extends Repository implements CategoryRepositoryInterface
{
    /**
     * The repository identifier.
     *
     * @var string
     */
    protected string $repositoryId = 'category';

    /**
     * CategoryRepository constructor.
     *
     * @param CategoryInterface $model The category model interface.
     */
    public function __construct(CategoryInterface $model)
    {
        parent::__construct($model);
    }
}
