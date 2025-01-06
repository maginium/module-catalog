<?php

declare(strict_types=1);

namespace Maginium\Catalog\Setup\Patch\Schema;

use Maginium\Framework\Database\Setup\Migration\Migration;
use Maginium\Product\Interfaces\Data\ProductInterface;

/**
 * Class EavAttributePatchToAllowEmoji.
 *
 * This class handles the migration for updating the character set and column definition
 * of the 'value' column in the 'eav_attribute_label' table to support emoji characters
 * and other multi-byte characters.
 *
 * The change ensures that the 'value' column in the 'eav_attribute_label' table can
 * store text data, including emojis and special characters, by altering its type to 'TEXT'.
 */
class EavAttributePatchToAllowEmoji extends Migration
{
    /**
     * Apply the schema changes.
     *
     * This method modifies the 'eav_attribute_label' table by updating the 'value' column
     * to support multi-byte characters, including emojis. The column type is changed to 'TEXT'
     * to allow the storage of special characters in the database.
     *
     * @return void
     */
    public function up(): void
    {
        // Update the eav_attribute_label table
        $this->updateTableCharsetAndColumns(
            ProductInterface::EAV_ATTRIBUTE_LABEL_TABLE_NAME,
            ['value' => 'TEXT'],
        );
    }
}
