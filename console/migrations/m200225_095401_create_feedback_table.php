<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%feedback}}`.
 */
class m200225_095401_create_feedback_table extends Migration
{
    public $tableName = '{{%feedback}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'            => $this->bigPrimaryKey(),
            'company_name'  => $this->string(),
            'product_id'    => $this->integer(),
            'quantity'      => $this->integer(),
            'barrel'        => $this->string(),
            'delivery'      => $this->string(),
            'full_name'     => $this->string(),
            'email'         => $this->string(),
            'phone_number'  => $this->string(),
            'created_at'    => $this->dateTime(),
            'updated_at'    => $this->dateTime(),
        ]);

        $this->addCommentOnTable($this->tableName,'Заявка');
        $this->addCommentOnColumn($this->tableName,'company_name','Наименование компании');
        $this->addCommentOnColumn($this->tableName,'product_id','Описание');
        $this->addCommentOnColumn($this->tableName,'quantity','Количество');
        $this->addCommentOnColumn($this->tableName,'barrel','Емкость');
        $this->addCommentOnColumn($this->tableName,'delivery','Доставка');
        $this->addCommentOnColumn($this->tableName,'full_name','ФИО');
        $this->addCommentOnColumn($this->tableName,'email','Email');
        $this->addCommentOnColumn($this->tableName,'phone_number','Номер телефона');
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
