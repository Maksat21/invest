<?php

use yii\db\Migration;

/**
 * Class m200407_094507_edit_type_barrel_column_on_feedback_table
 */
class m200407_094507_edit_type_barrel_column_on_feedback_table extends Migration
{
    public $tableName = '{{%feedback}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn($this->tableName,'barrel');
        $this->addColumn($this->tableName, 'barrel', $this->integer()->notNull());
            $this->addCommentOnColumn($this->tableName,'barrel','Емкость');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableName,'barrel');
        $this->addColumn($this->tableName, 'barrel', $this->string());
    }

}
