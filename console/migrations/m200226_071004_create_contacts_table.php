<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contacts}}`.
 */
class m200226_071004_create_contacts_table extends Migration
{
    public $tableName = '{{%contacts}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contacts}}', [
            'id'            => $this->primaryKey(),
            'address'       => $this->string(),
            'email'         => $this->string(),
            'phone'         => $this->string(),
            'link'          => $this->string(),
            'work_day'      => $this->string(),
            'latitude'      => $this->decimal('9','6')->defaultValue(0.00)->notNull(),
            'longitude'     => $this->decimal('9','6')->defaultValue(0.00)->notNull(),
            'created_at'    => $this->dateTime(),
            'updated_at'    => $this->dateTime(),
        ]);

        $this->addCommentOnTable($this->tableName,'Контакты');
        $this->addCommentOnColumn($this->tableName,'address','Адрес');
        $this->addCommentOnColumn($this->tableName,'email','Email');
        $this->addCommentOnColumn($this->tableName,'phone','Телефон');
        $this->addCommentOnColumn($this->tableName,'link','Ссылка');
        $this->addCommentOnColumn($this->tableName,'work_day','График работы');
        $this->addCommentOnColumn($this->tableName,'latitude','Широта');
        $this->addCommentOnColumn($this->tableName,'longitude','Долгота');
        $this->addCommentOnColumn($this->tableName,'created_at','Дата создания');
        $this->addCommentOnColumn($this->tableName,'updated_at','Дата обновления');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contacts}}');
    }
}
