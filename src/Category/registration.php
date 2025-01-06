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
    // Core category modules
    'Maginium_Category' => __DIR__ . '/Core',
    'Maginium_CategoryApi' => __DIR__ . '/Api',
    'Maginium_CategoryElasticIndexer' => __DIR__ . '/ElasticIndexer',

    // Rest of the extensions
    'Maginium_FeaturedCategory' => __DIR__ . '/Featured',
    'Maginium_CategoryThumbnail' => __DIR__ . '/Thumbnail',
];

// Register each module using the provided extensions list.
Module::registerModules($extensions);
