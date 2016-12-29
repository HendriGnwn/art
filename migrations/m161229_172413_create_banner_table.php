<?php

use yii\db\Migration;

/**
 * Handles the creation of table `banner`.
 */
class m161229_172413_create_banner_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('banner', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'banner_category_id' => $this->integer()->notNull(),
            'description' => $this->string(255)->notNull(),
            'picture' => $this->string(100)->notNull(),
            'url' => $this->string(200)->notNull(),
            'is_absolute' => $this->smallInteger()->null(),
            'status' => $this->smallInteger()->notNull()->default(1),
            'created_at' => $this->datetime()->null(),
            'updated_at' => $this->datetime()->null(),
            'created_by' => $this->integer()->null(),
            'updated_by' => $this->integer()->null(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('banner');
    }
}
