<?php

declare(strict_types=1);

namespace Maginium\ProductApi\Actions;

use Maginium\Framework\Crud\Actions\Save as BaseSave;
use Maginium\Framework\Support\Facades\Log;
use Maginium\ProductApi\Interfaces\CreateInterface;
use Maginium\ProductElasticIndexer\Interfaces\Services\ProductServiceInterface;

/**
 * Class SaveAction.
 *
 * This action saves a new model into the service.
 */
class Save extends BaseSave implements CreateInterface
{
    /**
     * @var ProductServiceInterface
     */
    protected $service;

    /**
     * SaveAction constructor.
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
