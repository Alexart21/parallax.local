<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%user}}`.
 */
class m200521_103105_create_table_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [

            'id' => $this->integer()->unsigned()->notNull(),
            'username' => $this->string(255)->notNull(),
            'password' => $this->string(255)->notNull(),
            'auth_key' => $this->string(255),

        ]);
     }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
