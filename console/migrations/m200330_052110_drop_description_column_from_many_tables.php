<?php

use yii\db\Migration;

/**
 * Class m200330_052110_drop_description_column_from_many_tables
 */
class m200330_052110_drop_description_column_from_many_tables extends Migration
{
    public $tableProduct = '{{%product}}';
    public $tablePurchase = '{{%purchase}}';
    public $tableVacancies = '{{%vacancies}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn($this->tableProduct,'content');
        $this->dropColumn($this->tablePurchase,'content');
        $this->dropColumn($this->tableVacancies,'description');
        $this->addColumn($this->tableProduct, 'content', $this->text());
        $this->addColumn($this->tablePurchase, 'content', $this->text());
        $this->addColumn($this->tableVacancies, 'description', $this->text());

        $this->addCommentOnColumn($this->tableProduct,'content','Описание');
        $this->addCommentOnColumn($this->tablePurchase,'content','Описание');
        $this->addCommentOnColumn($this->tableVacancies,'description','Описание');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableProduct,'content');
        $this->dropColumn($this->tablePurchase,'content');
        $this->dropColumn($this->tableVacancies,'description');
        $this->addColumn($this->tableProduct, 'content', $this->string());
        $this->addColumn($this->tablePurchase, 'content', $this->string());
        $this->addColumn($this->tableVacancies, 'description', $this->string());
    }

}
