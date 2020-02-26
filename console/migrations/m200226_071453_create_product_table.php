<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m200226_071453_create_product_table extends Migration
{
    public $tableName = '{{%product}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'                => $this->primaryKey(),
            'name'              => $this->string(),
            'content'           => $this->string(),
            'status'            => $this->smallInteger()->defaultValue(1)->notNull(),
            'slug'              => $this->string(),
            'meta_title'        => $this->string(),
            'meta_description'  => $this->string(),
            'meta_keywords'     => $this->string(),
            'created_at'        => $this->dateTime(),
            'updated_at'        => $this->dateTime(),
        ]);

        $this->addCommentOnTable($this->tableName,'Продукция');
        $this->addCommentOnColumn($this->tableName,'name','Наименование');
        $this->addCommentOnColumn($this->tableName,'content','Описание');
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
