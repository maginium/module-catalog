<?php

declare(strict_types=1);

namespace Maginium\Product\Facades;

use Magento\Product\Model\Log;
use Magento\Product\Model\Logger as ProductLoggerManager;
use Maginium\Framework\Support\Facade;

/**
 * Facade for interacting with the Product Logger service.
 *
 * @method static void log(int $productId, array $data) Save or update log for the given product.
 * @method static Log get(int $productId = null) Load the log for the specified product ID.
 *
 * @see ProductLoggerManager
 */
class ProductLogger extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getAccessor(): string
    {
        return ProductLoggerManager::class;
    }
}
