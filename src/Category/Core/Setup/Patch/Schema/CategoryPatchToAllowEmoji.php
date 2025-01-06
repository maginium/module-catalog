<?php

declare(strict_types=1);

namespace Maginium\Category\Setup\Patch\Schema;

use Maginium\Category\Interfaces\Data\CategoryInterface;
use Maginium\Framework\Database\Setup\Migration\Migration;

/**
 * Class CategoryPatchToAllowEmoji.
 *
 * This class handles the migration to modify the character set and data type of
 * the 'value' column in the 'catalog_category_entity_varchar' and 'catalog_category_entity_text'
 * tables to allow the storage of multi-byte characters, such as emojis. The 'value' column
 * in these tables is updated to the 'TEXT' data type, enabling it to handle more complex characters.
 */
class CategoryPatchToAllowEmoji extends Migration
{
    /**
     * Create the database schema.
     *
     * This method applies the schema changes, specifically updating the 'value' column
     * in the 'catalog_category_entity_varchar' and 'catalog_category_entity_text' tables
     * to the 'TEXT' data type to accommodate multi-byte characters such as emojis.
     *
     * @return void
     */
    public function up(): void
    {
        // Update the catalog_category_entity_varchar table
        $this->updateTableCharsetAndColumns(
            CategoryInterface::CATALOG_CATEGORY_ENTITY_VARCHAR_TABLE_NAME,
            ['value' => 'TEXT'],
        );

        // Update the catalog_category_entity_text table
        $this->updateTableCharsetAndColumns(
            CategoryInterface::CATALOG_CATEGORY_ENTITY_TEXT_TABLE_NAME,
            ['value' => 'TEXT'],
        );
    }
}
