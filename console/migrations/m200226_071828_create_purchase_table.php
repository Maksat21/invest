<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%purchase}}`.
 */
class m200226_071828_create_purchase_table extends Migration
{
    public $tableName = '{{%purchase}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'                => $this->bigPrimaryKey(),
            'name'              => $this->string(),
            'content'           => $this->string(),
            'quantity'          => $this->string(),
            'delivery_time'     => $this->string(),
            'status'            => $this->smallInteger()->defaultValue(1)->notNull(),
            'meta_title'        => $this->string(),
            'meta_description'  => $this->string(),
            'meta_keywords'     => $this->string(),
            'created_at'        => $this->dateTime(),
            'updated_at'        => $this->dateTime(),
        ]);

        $this->addCommentOnTable($this->tableName,'Закупки');
        $this->addCommentOnColumn($this->tableName,'name','Наименование');
        $this->addCommentOnColumn($this->tableName,'content','Описание');
        $this->addCommentOnColumn($this->tableName,'quantity','Количество');
        $this->addCommentOnColumn($this->tableName,'delivery_time','Срок поставки');
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
