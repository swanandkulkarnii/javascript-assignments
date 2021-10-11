<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_address}}`.
 */
class m211011_142204_create_users_address_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users_address}}', [
            'id' => $this->primaryKey(),
            'users_id' => $this->integer(), 
            'address1' => $this->string(255),
            'address2' => $this->string(255),
            'zip' => $this->string(50),
            'city' => $this->string(155),
            'state' => $this->string(100),
            'country' => $this->string(155),
        ]);


        $this->addForeignKey(name:'FK_usersaddress_users', table:'users_address', columns:'users_id', refTable:'users', refColumns:'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(name:'FK_usersaddress_users', table: 'users_address');
        $this->dropTable('{{%users_address}}');
    }
}
