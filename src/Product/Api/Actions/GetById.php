<?php

declare(strict_types=1);

namespace Maginium\ProductApi\Actions;

use Maginium\Framework\Crud\Actions\GetById as BaseGetById;
use Maginium\Framework\Support\Facades\Log;
use Maginium\ProductApi\Interfaces\GetByIdInterface;
use Maginium\ProductElasticIndexer\Interfaces\Services\ProductServiceInterface;

/**
 * Class GetByIdAction.
 *
 * This action retrieves an model by its ID.
 */
class GetById extends BaseGetById implements GetByIdInterface
{
    /**
     * @var ProductServiceInterface
     */
    protected $service;

    /**
     * GetByIdAction constructor.
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
