<?php

declare(strict_types=1);

namespace Maginium\ProductApi\Actions;

use Maginium\Framework\Crud\Actions\Update as BaseUpdate;
use Maginium\Framework\Support\Facades\Log;
use Maginium\ProductApi\Interfaces\UpdateInterface;
use Maginium\ProductElasticIndexer\Interfaces\Services\ProductServiceInterface;

/**
 * Class UpdateAction.
 *
 * This action updates an existing model in the service.
 */
class Update extends BaseUpdate implements UpdateInterface
{
    /**
     * @var ProductServiceInterface
     */
    protected $service;

    /**
     * UpdateAction constructor.
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
