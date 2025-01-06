<?php

declare(strict_types=1);

namespace Maginium\Product\Setup\Patch\Schema;

use Maginium\Framework\Database\Setup\Migration\Migration;
use Maginium\Product\Interfaces\Data\ProductInterface;

/**
 * Class ProductPatchToAllowEmoji.
 *
 * Handles schema migration for updating product-related database tables.
 * Specifically, it modifies the character set and column definitions for
 * the `catalog_product_entity_text` and `catalog_product_entity_varchar` tables
 * to support emoji characters and other special characters.
 *
 * This patch ensures that the 'value' columns in both tables are appropriately
 * set to store text and varchar data with enhanced support for emoji and multi-byte characters.
 */
class ProductPatchToAllowEmoji extends Migration
{
    /**
     * Apply the schema changes.
     *
     * This method applies necessary changes to the database schema. It updates
     * the character set and column definitions for the 'value' column in both
     * the `catalog_product_entity_text` and `catalog_product_entity_varchar` tables,
     * ensuring they can store emoji and other special characters.
     *
     * @return void
     */
    public function up(): void
    {
        // Update the catalog_product_entity_text table
        $this->updateTableCharsetAndColumns(
            ProductInterface::CATALOG_PRODUCT_ENTITY_TEXT_TABLE_NAME,
            ['value' => 'TEXT'],
        );

        // Update the catalog_product_entity_varchar table
        $this->updateTableCharsetAndColumns(
            ProductInterface::CATALOG_PRODUCT_ENTITY_VARCHAR_TABLE_NAME,
            ['value' => 'VARCHAR(255)'],
        );
    }
}
