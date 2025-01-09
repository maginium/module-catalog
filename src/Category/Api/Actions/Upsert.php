<?php

declare(strict_types=1);

namespace Maginium\CategoryApi\Actions;

use Maginium\CategoryApi\Interfaces\UpsertInterface;
use Maginium\CategoryElasticIndexer\Interfaces\Services\CategoryServiceInterface;
use Maginium\Framework\Crud\Actions\Upsert as BaseUpsert;
use Maginium\Framework\Support\Facades\Log;

/**
 * Class UpsertAction.
 *
 * This action upserts (updates or inserts) an model in the service.
 */
class Upsert extends BaseUpsert implements UpsertInterface
{
    /**
     * @var CategoryServiceInterface
     */
    protected $service;

    /**
     * UpsertAction constructor.
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
