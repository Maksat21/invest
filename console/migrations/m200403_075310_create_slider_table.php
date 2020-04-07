<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slider}}`.
 */
class m200403_075310_create_slider_table extends Migration
{
    public $tableName = '{{%slider}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'            => $this->primaryKey(),
            'name'          => $this->string(),
            'content'       => $this->string(),
            'image'         => $this->string()->notNull(),
            'status'        => $this->smallInteger()->defaultValue(1)->notNull(),
            'created_at'    => $this->dateTime(),
            'updated_at'    => $this->dateTime(),
        ]);

        $this->addCommentOnTable($this->tableName,'Слайдер');
        $this->addCommentOnColumn($this->tableName,'name','Наименование');
        $this->addCommentOnColumn($this->tableName,'content','Описание');
        $this->addCommentOnColumn($this->tableName,'image','Картинка');
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
