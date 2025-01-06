<?php

declare(strict_types=1);

namespace Maginium\Product\Ui\DataProvider\Product\Form\Modifier;

use Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\AbstractModifier as BaseAbstractModifier;
use Maginium\Framework\Support\Facades\Config;

/**
 * Class AbstractModifier.
 *
 * This class extends the Magento `AbstractModifier` to modify product form data and metadata
 * based on custom business logic, such as checking the status of specific configuration options
 * (e.g., gift options and downloadable products).
 */
class AbstractModifier extends BaseAbstractModifier
{
    /**
     * Config path for checking if the gift option is enabled in the system settings.
     *
     * This constant holds the configuration path used to retrieve the value for enabling or
     * disabling the gift option feature. The value is typically a boolean that indicates whether
     * the gift option is active in the application.
     */
    public const IS_GIFT_ACTIVE = 'rma/general/is_gift_active';

    /**
     * Config path for checking if downloadable products are enabled.
     *
     * This constant holds the configuration path used to retrieve the value for enabling or
     * disabling downloadable products in the system. The value is typically a boolean that determines
     * whether downloadable products are available in the store.
     */
    public const ORDER_ITEM_STATUS = 'catalog/downloadable/enabled';

    /**
     * Modify product form data before rendering.
     *
     * This method can be overridden to modify product data. Currently, it returns the original
     * data without modification, allowing other modifiers to apply changes.
     *
     * @param array $data The product data.
     *
     * @return array The modified data (no modification in the current version).
     *
     * @since 100.1.0
     */
    public function modifyData(array $data)
    {
        // No modification applied in this method for now
        return $data;
    }

    /**
     * Modify product form metadata based on configuration settings.
     *
     * This method checks the configuration values for gift options and downloadable products.
     * If these features are disabled, their corresponding form fields are removed from the UI.
     *
     * @param array $meta The metadata for the product form.
     *
     * @return array The modified metadata.
     *
     * @since 100.1.0
     */
    public function modifyMeta(array $meta)
    {
        // Fetch gift option status from configuration
        $giftOptionStatus = Config::getString(self::IS_GIFT_ACTIVE) ?? '';

        // If the gift option is disabled, remove the 'gift-options' field from metadata
        if ((bool)$giftOptionStatus === true) {
            unset($meta['gift-options']);
        }

        // Fetch downloadable product status from configuration
        $downloadableStatus = Config::getString(self::ORDER_ITEM_STATUS) ?? '';

        // If downloadable products are disabled, remove the 'downloadable' field from metadata
        if ((bool)$downloadableStatus === true) {
            unset($meta['downloadable']);
        }

        // Return the modified metadata
        return $meta;
    }
}
