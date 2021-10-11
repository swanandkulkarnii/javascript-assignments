<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m211011_101818_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(255),
            'last_name' => $this->string(255),
            //'profile_pic' => $this->blob(),
            'gender' => $this->string(10),
            'email' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
