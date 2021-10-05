<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%module}}`.
 */
class m211005_070609_create_module_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%module}}', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'created_at' => $this->timestamp()->notNull(),
            'updated_at' => $this->timestamp()->notNull(),
        ]);

        $this->addForeignKey(name:'FK_module_project', table:'module', columns:'project_id', refTable:'project', refColumns:'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(name:'FK_module_project', table: 'module');
        $this->dropTable('{{%module}}');
    }
}
