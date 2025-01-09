<?php

declare(strict_types=1);

namespace Maginium\CategoryApi\Actions;

use Maginium\CategoryApi\Interfaces\GetListInterface;
use Maginium\CategoryElasticIndexer\Interfaces\Services\CategoryServiceInterface;
use Maginium\Framework\Crud\Actions\GetList as BaseGetList;
use Maginium\Framework\Support\Facades\Log;

/**
 * Class GetListAction.
 *
 * This action retrieves a list of models from the service.
 */
class GetList extends BaseGetList implements GetListInterface
{
    /**
     * @var CategoryServiceInterface
     */
    protected $service;

    /**
     * GetListAction constructor.
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
