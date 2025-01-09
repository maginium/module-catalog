<?php

declare(strict_types=1);

namespace Maginium\ProductApi\Actions;

use Maginium\Framework\Crud\Actions\Search as BaseSearch;
use Maginium\Framework\Support\Facades\Log;
use Maginium\ProductApi\Interfaces\SearchInterface;
use Maginium\ProductElasticIndexer\Interfaces\Services\ProductServiceInterface;

/**
 * Class SearchAction.
 *
 * This action searches for models in the service based on search criteria.
 */
class Search extends BaseSearch implements SearchInterface
{
    /**
     * @var ProductServiceInterface
     */
    protected $service;

    /**
     * SearchAction constructor.
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
