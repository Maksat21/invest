<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vacancies}}`.
 */
class m200226_070313_create_vacancies_table extends Migration
{
    public $tableName = '{{%vacancies}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'            => $this->primaryKey(),
            'title'         => $this->string(),
            'description'   => $this->string(),
            'wage'          => $this->string(),
            'status'        => $this->smallInteger()->defaultValue(1),
            'created_at'    => $this->dateTime(),
            'updated_at'    => $this->dateTime(),
        ]);

        $this->addCommentOnTable($this->tableName,'Вакансии');
        $this->addCommentOnColumn($this->tableName,'title','Название');
        $this->addCommentOnColumn($this->tableName,'description','Описание');
        $this->addCommentOnColumn($this->tableName,'wage','Заработная плата');
        $this->addCommentOnColumn($this->tableName,'status','Статус');
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
