<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%image}}`.
 */
class m200521_103034_create_table_image extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%image}}', [

            'id' => $this->primaryKey()->notNull(),
            'filePath' => $this->string(400)->notNull(),
            'itemId' => $this->integer(),
            'isMain' => $this->integer(),
            'modelName' => $this->string(150)->notNull(),
            'urlAlias' => $this->string(400)->notNull(),
            'name' => $this->string(80),

        ]);
     }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%image}}');
    }
}
