<?php

declare(strict_types=1);

// namespace Maginium\Inventory\Ui\DataProvider\Product\Form\Modifier;

// use Magento\Catalog\Model\Locator\LocatorInterface;
// use Magento\InventoryCatalogApi\Model\IsSingleSourceModeInterface;
// use Magento\InventoryConfigurationApi\Model\IsSourceItemManagementAllowedForProductTypeInterface;
// use Magento\InventorySalesAdminUi\Model\GetSalableQuantityDataBySku;
// use Magento\InventorySalesAdminUi\Ui\DataProvider\Product\Form\Modifier\SalableQuantity as BaseSalableQuantity;
// use Maginium\Core\Helpers\Data;
// use Maginium\Framework\Support\Facades\Config;

// class SalableQuantity extends BaseSalableQuantity
// {
//     /**
//      * Config path constant for determining if salable quantity should be shown in the product view.
//      */
//     public const SHOW_SALABLE_QTY_PRODUCT_VIEW = 'cataloginventory/options/show_salable_qty_product_view';

//     /**
//      * @var IsSourceItemManagementAllowedForProductTypeInterface
//      * Interface to check if source item management is allowed for the product type.
//      */
//     private $isSourceItemManagementAllowedForProductType;

//     /**
//      * @var LocatorInterface
//      * Interface to locate the product in the UI context.
//      */
//     private $locator;

//     /**
//      * @var IsSingleSourceModeInterface
//      * Interface to check if the system is in single source mode.
//      */
//     private $isSingleSourceMode;

//     /**
//      * @var GetSalableQuantityDataBySku
//      * Service to fetch salable quantity data by product SKU.
//      */
//     private $getSalableQuantityDataBySku;

//     /**
//      * Constructor to initialize dependencies for the SalableQuantity class.
//      *
//      * @param LocatorInterface $locator Interface to locate the product in the UI context.
//      * @param IsSingleSourceModeInterface $isSingleSourceMode Interface to check if the system is in single source mode.
//      * @param GetSalableQuantityDataBySku $getSalableQuantityDataBySku Service to fetch salable quantity data by SKU.
//      * @param IsSourceItemManagementAllowedForProductTypeInterface $isSourceItemManagementAllowedForProductType Interface to check if source item management is allowed for the product type.
//      */
//     public function __construct(
//         LocatorInterface $locator,
//         IsSingleSourceModeInterface $isSingleSourceMode,
//         GetSalableQuantityDataBySku $getSalableQuantityDataBySku,
//         IsSourceItemManagementAllowedForProductTypeInterface $isSourceItemManagementAllowedForProductType,
//     ) {
//         parent::__construct(
//             $isSourceItemManagementAllowedForProductType,
//             $locator,
//             $isSingleSourceMode,
//             $getSalableQuantityDataBySku,
//         );

//         $this->isSourceItemManagementAllowedForProductType = $isSourceItemManagementAllowedForProductType;
//         $this->locator = $locator;
//         $this->isSingleSourceMode = $isSingleSourceMode;
//         $this->getSalableQuantityDataBySku = $getSalableQuantityDataBySku;
//     }

//     /**
//      * Modifies the product data by adding salable quantity based on the product SKU.
//      *
//      * This method retrieves the salable quantity for a product by its SKU and
//      * adds it to the provided data array.
//      *
//      * @param array $data
//      * The product data array to be modified.
//      *
//      * @return array
//      * The modified data array with salable quantity.
//      *
//      * {@inheritdoc}
//      */
//     public function modifyData(array $data)
//     {
//         $product = $this->locator->getProduct();

//         // If source item management is not allowed for the product type or product ID is null, return data unchanged.
//         if (
//             $this->isSourceItemManagementAllowedForProductType->execute($product->getTypeId()) === false ||
//             $product->getId() === null
//         ) {
//             return $data;
//         }

//         // Add salable quantity for the product identified by its SKU.
//         $data[$product->getId()]['salable_quantity'] = $this->getSalableQuantityDataBySku->execute($product->getSku());

//         return $data;
//     }

//     /**
//      * Modifies the meta data to determine if the salable quantity should be visible.
//      *
//      * This method checks the configuration and visibility settings to determine
//      * if the salable quantity should be displayed in the UI. It also validates
//      * if source item management is allowed for the product type.
//      *
//      * @param array $meta
//      * The metadata to be modified.
//      *
//      * @return array
//      * The modified meta data with visibility settings.
//      *
//      * @since 100.1.0
//      */
//     public function modifyMeta(array $meta)
//     {
//         // Retrieve the configuration setting to check if salable quantity should be visible.
//         $salableQtyProductView = Config::getString(self::SHOW_SALABLE_QTY_PRODUCT_VIEW) ?? '';
//         $product = $this->locator->getProduct();

//         // If the salable quantity view is not enabled, check the product's type and ID to determine visibility.
//         if ((bool)$salableQtyProductView !== true) {
//             if (
//                 $this->isSourceItemManagementAllowedForProductType->execute($product->getTypeId()) === false ||
//                 $product->getId() === null
//             ) {
//                 return $meta;
//             }
//             // Set salable quantity field to visible in the meta data.
//             $meta['salable_quantity'] = [
//                 'arguments' => [
//                     'data' => [
//                         'config' => [
//                             'visible' => 1,
//                         ],
//                     ],
//                 ],
//             ];
//         }

//         return $meta;
//     }
// }
