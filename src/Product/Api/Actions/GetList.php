<?php

declare(strict_types=1);

namespace Maginium\ProductApi\Actions;

use Maginium\Framework\Crud\Actions\GetList as BaseGetList;
use Maginium\Framework\Support\Facades\Log;
use Maginium\ProductApi\Interfaces\GetListInterface;
use Maginium\ProductElasticIndexer\Interfaces\Services\ProductServiceInterface;

/**
 * Class GetListAction.
 *
 * This action retrieves a list of models from the service.
 */
class GetList extends BaseGetList implements GetListInterface
{
    /**
     * @var ProductServiceInterface
     */
    protected $service;

    /**
     * GetListAction constructor.
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
