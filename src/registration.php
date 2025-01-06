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
    // Core catalog modules
    'Maginium_Catalog' => __DIR__ . '/Core',
    'Maginium_Inventory' => __DIR__ . '/Inventory',

    // Core product modules
    'Maginium_Product' => __DIR__ . '/Product/Core',
    'Maginium_ProductApi' => __DIR__ . '/Product/Api',
    'Maginium_ProductStats' => __DIR__ . '/Product/Stats',
    'Maginium_ProductElasticIndexer' => __DIR__ . '/Product/ElasticIndexer',

    // Product reviews modules
    'Maginium_ProductReviews' => __DIR__ . '/Product/Extensions/Reviews/Core',
    'Maginium_ProductReviewsElasticIndexer' => __DIR__ . '/Product/Extensions/Reviews/ElasticIndexer',

    // Additional product modules
    'Maginium_ProductSku' => __DIR__ . '/Product/Extensions/Sku',
    'Maginium_ProductTabs' => __DIR__ . '/Product/Extensions/Tabs',
    'Maginium_ProductLabel' => __DIR__ . '/Product/Extensions/Label',
    'Maginium_ProductAlerts' => __DIR__ . '/Product/Extensions/Alerts',
    'Maginium_ProductBarcode' => __DIR__ . '/Product/Extensions/Barcode',
    'Maginium_ProductRelated' => __DIR__ . '/Product/Extensions/Related',
    'Maginium_ProductHoverImage' => __DIR__ . '/Product/Extensions/HoverImage',
    'Maginium_ProductRecentlyViewed' => __DIR__ . '/Product/Extensions/RecentlyViewed',
    'Maginium_FrequentlyBoughtTogether' => __DIR__ . '/Product/Extensions/FrequentlyBoughtTogether',

    // Core category modules
    'Maginium_Category' => __DIR__ . '/Category/Core',
    'Maginium_CategoryApi' => __DIR__ . '/Category/Api',
    'Maginium_CategoryStats' => __DIR__ . '/Category/Stats',
    'Maginium_CategoryElasticIndexer' => __DIR__ . '/Category/ElasticIndexer',

    // Core brand modules
    'Maginium_Brand' => __DIR__ . '/Brand/Core',
    'Maginium_BrandApi' => __DIR__ . '/Brand/Api',
    'Maginium_BrandStats' => __DIR__ . '/Brand/Stats',
    'Maginium_BrandElasticIndexer' => __DIR__ . '/Brand/ElasticIndexer',

    // Rest of the category extensions
    'Maginium_FeaturedCategory' => __DIR__ . '/Category/Featured',
    'Maginium_CategoryThumbnail' => __DIR__ . '/Category/Thumbnail',
];

// Register each module using the provided extensions list.
Module::registerModules($extensions);
