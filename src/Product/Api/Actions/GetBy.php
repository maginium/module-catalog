<?php

declare(strict_types=1);

namespace Maginium\ProductApi\Actions;

use Maginium\Framework\Crud\Actions\GetBy as BaseGetBy;
use Maginium\Framework\Support\Facades\Log;
use Maginium\ProductApi\Interfaces\GetByInterface;
use Maginium\ProductElasticIndexer\Interfaces\Services\ProductServiceInterface;

/**
 * Class GetByAction.
 *
 * This action retrieves an model based on specific criteria.
 */
class GetBy extends BaseGetBy implements GetByInterface
{
    /**
     * @var ProductServiceInterface
     */
    protected $service;

    /**
     * GetByAction constructor.
     *
     * @param ProductServiceInterface $service
     */
    public function __construct(ProductServiceInterface $service)
    {
        parent::__construct($service);

        // Set the class name for logging purposes
        Log::setClassName(static::class);
    }
}
