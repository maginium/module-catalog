<?php

declare(strict_types=1);

namespace Maginium\CategoryApi\Actions;

use Maginium\CategoryApi\Interfaces\GetByInterface;
use Maginium\CategoryElasticIndexer\Interfaces\Services\CategoryServiceInterface;
use Maginium\Framework\Crud\Actions\GetBy as BaseGetBy;
use Maginium\Framework\Support\Facades\Log;

/**
 * Class GetByAction.
 *
 * This action retrieves an model based on specific criteria.
 */
class GetBy extends BaseGetBy implements GetByInterface
{
    /**
     * @var CategoryServiceInterface
     */
    protected $service;

    /**
     * GetByAction constructor.
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
