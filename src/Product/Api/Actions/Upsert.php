<?php

declare(strict_types=1);

namespace Maginium\ProductApi\Actions;

use Maginium\Framework\Crud\Actions\Upsert as BaseUpsert;
use Maginium\Framework\Support\Facades\Log;
use Maginium\ProductApi\Interfaces\UpsertInterface;
use Maginium\ProductElasticIndexer\Interfaces\Services\ProductServiceInterface;

/**
 * Class UpsertAction.
 *
 * This action upserts (updates or inserts) an model in the service.
 */
class Upsert extends BaseUpsert implements UpsertInterface
{
    /**
     * @var ProductServiceInterface
     */
    protected $service;

    /**
     * UpsertAction constructor.
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
