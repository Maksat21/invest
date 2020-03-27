<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%materials}}`.
 */
class m200225_094918_create_materials_table extends Migration
{
    public $tableName = '{{%materials}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'            => $this->bigPrimaryKey(),
            'title'         => $this->string(),
            'description'   => $this->text(),
            'type'          => $this->smallInteger()->notNull(),
            'status'        => $this->smallInteger()->notNull(),
            'created_at'    => $this->dateTime(),
            'updated_at'    => $this->dateTime(),
        ]);

        $this->addCommentOnTable($this->tableName,'Статьи');
        $this->addCommentOnColumn($this->tableName,'title','Наименование');
        $this->addCommentOnColumn($this->tableName,'description','Описание');
        $this->addCommentOnColumn($this->tableName,'type','Тип');
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
