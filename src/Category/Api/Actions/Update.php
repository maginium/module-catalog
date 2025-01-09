<?php

declare(strict_types=1);

namespace Maginium\CategoryApi\Actions;

use Maginium\CategoryApi\Interfaces\UpdateInterface;
use Maginium\CategoryElasticIndexer\Interfaces\Services\CategoryServiceInterface;
use Maginium\Framework\Crud\Actions\Update as BaseUpdate;
use Maginium\Framework\Support\Facades\Log;

/**
 * Class UpdateAction.
 *
 * This action updates an existing model in the service.
 */
class Update extends BaseUpdate implements UpdateInterface
{
    /**
     * @var CategoryServiceInterface
     */
    protected $service;

    /**
     * UpdateAction constructor.
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
