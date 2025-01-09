<?php

declare(strict_types=1);

namespace Maginium\ProductApi\Actions;

use Maginium\Framework\Crud\Actions\DeleteById as BaseDeleteById;
use Maginium\Framework\Support\Facades\Log;
use Maginium\ProductApi\Interfaces\DeleteInterface;
use Maginium\ProductElasticIndexer\Interfaces\Services\ProductServiceInterface;

/**
 * Class DeleteByIdAction.
 *
 * This action deletes an model by its ID.
 */
class DeleteById extends BaseDeleteById implements DeleteInterface
{
    /**
     * @var ProductServiceInterface
     */
    protected $service;

    /**
     * DeleteByIdAction constructor.
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
