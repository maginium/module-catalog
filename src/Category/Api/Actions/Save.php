<?php

declare(strict_types=1);

namespace Maginium\CategoryApi\Actions;

use Maginium\CategoryApi\Interfaces\CreateInterface;
use Maginium\CategoryElasticIndexer\Interfaces\Services\CategoryServiceInterface;
use Maginium\Framework\Crud\Actions\Save as BaseSave;
use Maginium\Framework\Support\Facades\Log;

/**
 * Class SaveAction.
 *
 * This action saves a new model into the service.
 */
class Save extends BaseSave implements CreateInterface
{
    /**
     * @var CategoryServiceInterface
     */
    protected $service;

    /**
     * SaveAction constructor.
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
