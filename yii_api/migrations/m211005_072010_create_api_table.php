<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%api}}`.
 */
class m211005_072010_create_api_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%api}}', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer(),
            'module_id' => $this->integer(),
            'url' => $this->string(255)->notNull(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'method' => $this->string(255),
            'request' => $this->string(255),
            'response' => $this->string(255),
            'created_at' => $this->timestamp()->notNull(),
            'updated_at' => $this->timestamp()->notNull(),
        ]);

        $this->addForeignKey(name:'FK_api_project', table:'api', columns:'project_id', refTable:'project', refColumns:'id');
        $this->addForeignKey(name:'FK_api_module', table:'api', columns:'module_id', refTable:'module', refColumns:'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(name:'FK_api_module', table: 'api');
        $this->dropForeignKey(name:'FK_api_project', table: 'api');
        $this->dropTable('{{%api}}');
    }
}
