<?php

declare(strict_types=1);

use Maginium\Framework\Component\Module;

/**
 * Registers multiple modules based on a list of namespaces and their respective paths.
 *
 * This script registers each module by iterating over an associative array of module namespaces
 * and their corresponding directory paths. The `Module::register` method is called
 * for each module to register it within the application.
 *
 * @param array $extensions An associative array where each key is a fully-qualified module namespace
 *                           (e.g., 'Maginium_Framework'), and the value is the absolute file path
 *                           to the module's directory (e.g., __DIR__).
 */
$extensions = [
    // Core product modules
    'Maginium_Product' => __DIR__ . '/Core',
    'Maginium_ProductApi' => __DIR__ . '/Api',
    'Maginium_ProductElasticIndexer' => __DIR__ . '/ElasticIndexer',

    // Product reviews modules
    'Maginium_ProductReviews' => __DIR__ . '/Extensions/Reviews/Core',
    'Maginium_ProductReviewsElasticIndexer' => __DIR__ . '/Extensions/Reviews/ElasticIndexer',

    // Additional product modules
    'Maginium_ProductSku' => __DIR__ . '/Extensions/Sku',
    'Maginium_ProductTabs' => __DIR__ . '/Extensions/Tabs',
    'Maginium_ProductLabel' => __DIR__ . '/Extensions/Label',
    'Maginium_ProductAlerts' => __DIR__ . '/Extensions/Alerts',
    'Maginium_ProductBarcode' => __DIR__ . '/Extensions/Barcode',
    'Maginium_ProductRelated' => __DIR__ . '/Extensions/Related',
    'Maginium_ProductHoverImage' => __DIR__ . '/Extensions/HoverImage',
    'Maginium_ProductRecentlyViewed' => __DIR__ . '/Extensions/RecentlyViewed',
    'Maginium_FrequentlyBoughtTogether' => __DIR__ . '/Extensions/FrequentlyBoughtTogether',
];

// Register each module using the provided extensions list.
Module::registerModules($extensions);
