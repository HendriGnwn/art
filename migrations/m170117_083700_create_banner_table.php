<?php

use app\migrations\Migration;

/**
 * Handles the creation of table `banner`.
 */
class m170117_083700_create_banner_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('banner', [
            'id' => $this->primaryKey(),
            'name' => $this->string(150)->notNull(),
            'url' => $this->string(255)->null(),
            'is_absolute_url' => $this->smallInteger()->notNull()->defaultValue(1),
            'photo' => $this->string(255)->notNull(),
            'category' => $this->integer()->notNull(),
            'description' => $this->text()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null(),
            'created_by' => $this->integer()->null(),
            'updated_by' => $this->integer()->null(),
        ], $this->tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('banner');
    }
}
