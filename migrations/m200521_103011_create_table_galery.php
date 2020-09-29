<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%galery}}`.
 */
class m200521_103011_create_table_galery extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%galery}}', [

            'id' => $this->primaryKey()->notNull(),
            'category' => $this->string(20)->notNull(),
            'timestamp' => $this->integer()->unsigned(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->string(255)->notNull(),
            'full_text' => $this->text()->notNull(),
            'alt' => $this->string(255),
            'price' => $this->string(11),

        ]);
     }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%galery}}');
    }
}
