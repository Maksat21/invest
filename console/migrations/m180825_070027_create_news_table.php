<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m180825_070027_create_news_table extends Migration
{
    public $tableName = '{{%news}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'                => $this->primaryKey(),
            'title'             => $this->string(),
            'description'       => $this->text(),
            'status'            => $this->smallInteger()->notNull()->defaultValue(1),
            'slug'              => $this->string(),
            'meta_title'        => $this->string(),
            'meta_description'  => $this->string(),
            'meta_keywords'     => $this->string(),
            'created_at'        => $this->dateTime(),
            'updated_at'        => $this->dateTime(),
        ]);

        $this->addCommentOnTable($this->tableName,'Новости');
        $this->addCommentOnColumn($this->tableName,'title','Наименование');
        $this->addCommentOnColumn($this->tableName,'description','Описание');
        $this->addCommentOnColumn($this->tableName,'slug','Алиас');
        $this->addCommentOnColumn($this->tableName,'status','Статус');
        $this->addCommentOnColumn($this->tableName,'meta_title','Мета заголовок');
        $this->addCommentOnColumn($this->tableName,'meta_description','Мета описание');
        $this->addCommentOnColumn($this->tableName,'meta_keywords','Мета слова');
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
