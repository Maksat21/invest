<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tared_type}}`.
 */
class m200407_091150_create_tared_type_table extends Migration
{
    public $tableName = '{{%tared_type}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'     => $this->primaryKey(),
            'name'   => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at'    => $this->dateTime(),
            'updated_at'    => $this->dateTime(),
        ]);

        $this->addCommentOnTable($this->tableName,'Тип тарирования');
        $this->addCommentOnColumn($this->tableName,'name','Название');
        $this->addCommentOnColumn($this->tableName,'status','Статус');
        $this->addCommentOnColumn($this->tableName,'created_at','Дата создания');
        $this->addCommentOnColumn($this->tableName,'updated_at','Дата обновления');

        $this->insert($this->tableName,[
            'name' => 'Стальные барабаны по 50кг',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $this->insert($this->tableName,[
            'name' => 'Биг-беги по 400кг',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
