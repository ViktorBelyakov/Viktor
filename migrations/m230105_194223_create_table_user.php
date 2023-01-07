<?php

use yii\db\Migration;

/**
 * Class m230105_194223_create_table_user
 */
class m230105_194223_create_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', ['id' => $this->integer()]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
