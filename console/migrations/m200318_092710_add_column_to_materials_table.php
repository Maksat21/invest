<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%materials}}`.
 */
class m200318_092710_add_column_to_materials_table extends Migration
{
    public $tableName = '{{%materials}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'meta_title', $this->string());
        $this->addColumn($this->tableName, 'meta_description', $this->string());
        $this->addColumn($this->tableName, 'meta_keywords', $this->string());



        $this->addCommentOnColumn($this->tableName,'meta_title','Мета заголовок');
        $this->addCommentOnColumn($this->tableName,'meta_description','Мета описание');
        $this->addCommentOnColumn($this->tableName,'meta_keywords','Мета слова');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableName,'meta_title');
        $this->dropColumn($this->tableName,'meta_description');
        $this->dropColumn($this->tableName,'meta_keywords');
    }
}
