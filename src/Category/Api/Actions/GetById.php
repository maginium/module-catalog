<?php

declare(strict_types=1);

namespace Maginium\CategoryApi\Actions;

use Maginium\CategoryApi\Interfaces\GetByIdInterface;
use Maginium\CategoryElasticIndexer\Interfaces\Services\CategoryServiceInterface;
use Maginium\Framework\Crud\Actions\GetById as BaseGetById;
use Maginium\Framework\Support\Facades\Log;

/**
 * Class GetByIdAction.
 *
 * This action retrieves an model by its ID.
 */
class GetById extends BaseGetById implements GetByIdInterface
{
    /**
     * @var CategoryServiceInterface
     */
    protected $service;

    /**
     * GetByIdAction constructor.
     *
     * @param CategoryServiceInterface $service
     */
    public function __construct(CategoryServiceInterface $service)
    {
        parent::__construct($service);

        // Set the class name for logging purposes
        Log::setClassName(static::class);
    }
}
