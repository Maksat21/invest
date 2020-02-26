<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%management}}`.
 */
class m200226_070653_create_management_table extends Migration
{
    public $tableName = '{{%management}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'            => $this->primaryKey(),
            'full_name'     => $this->string(),
            'content'       => $this->string(),
            'post'          => $this->string(),
            'created_at'    => $this->dateTime(),
            'updated_at'    => $this->dateTime(),
        ]);

        $this->addCommentOnTable($this->tableName,'Руководство компании');
        $this->addCommentOnColumn($this->tableName,'full_name','ФИО');
        $this->addCommentOnColumn($this->tableName,'content','Описание');
        $this->addCommentOnColumn($this->tableName,'post','Должность');
        $this->addCommentOnColumn($this->tableName,'created_at','Дата создания');
        $this->addCommentOnColumn($this->tableName,'updated_at','Дата обновления');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
