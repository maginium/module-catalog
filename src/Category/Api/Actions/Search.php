<?php

declare(strict_types=1);

namespace Maginium\CategoryApi\Actions;

use Maginium\CategoryApi\Interfaces\SearchInterface;
use Maginium\CategoryElasticIndexer\Interfaces\Services\CategoryServiceInterface;
use Maginium\Framework\Crud\Actions\Search as BaseSearch;
use Maginium\Framework\Support\Facades\Log;

/**
 * Class SearchAction.
 *
 * This action searches for models in the service based on search criteria.
 */
class Search extends BaseSearch implements SearchInterface
{
    /**
     * @var CategoryServiceInterface
     */
    protected $service;

    /**
     * SearchAction constructor.
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
