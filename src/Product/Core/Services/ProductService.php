<?php

declare(strict_types=1);

namespace Maginium\Product\Services;

use Maginium\Framework\Crud\Service;
use Maginium\Product\Interfaces\Repositories\ProductRepositoryInterface;
use Maginium\Product\Interfaces\Services\ProductServiceInterface;

/**
 * Class ProductService.
 *
 * This class extends the base `ProductService` and implements custom functionality for handling products.
 */
class ProductService extends Service implements ProductServiceInterface
{
    /**
     * ProductService constructor.
     *
     * @param ProductRepositoryInterface $productRepository The product repository interface.
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        parent::__construct($productRepository);
    }
}
