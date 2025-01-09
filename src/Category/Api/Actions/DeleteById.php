<?php

declare(strict_types=1);

namespace Maginium\CategoryApi\Actions;

use Maginium\CategoryApi\Interfaces\DeleteInterface;
use Maginium\CategoryElasticIndexer\Interfaces\Services\CategoryServiceInterface;
use Maginium\Framework\Crud\Actions\DeleteById as BaseDeleteById;
use Maginium\Framework\Support\Facades\Log;

/**
 * Class DeleteByIdAction.
 *
 * This action deletes an model by its ID.
 */
class DeleteById extends BaseDeleteById implements DeleteInterface
{
    /**
     * @var CategoryServiceInterface
     */
    protected $service;

    /**
     * DeleteByIdAction constructor.
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
