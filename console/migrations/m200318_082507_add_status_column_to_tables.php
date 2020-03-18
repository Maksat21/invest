<?php

use yii\db\Migration;

/**
 * Class m200318_082507_add_status_column_to_tables
 */
class m200318_082507_add_status_column_to_tables extends Migration
{
    public $tableContacts = '{{%contacts}}';
    public $tableFeedback = '{{%feedback}}';
    public $tableManagement = '{{%management}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableContacts, 'status', $this->smallInteger()->defaultValue(1)->notNull());
        $this->addColumn($this->tableFeedback, 'status', $this->smallInteger()->defaultValue(1)->notNull());
        $this->addColumn($this->tableManagement, 'status', $this->smallInteger()->defaultValue(1)->notNull());


        $this->addCommentOnColumn($this->tableContacts,'status','Статус');
        $this->addCommentOnColumn($this->tableFeedback,'status','Статус');
        $this->addCommentOnColumn($this->tableManagement,'status','Статус');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableContacts,'status');
        $this->dropColumn($this->tableFeedback,'status');
        $this->dropColumn($this->tableManagement,'status');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200318_082507_add_status_column_to_tables cannot be reverted.\n";

        return false;
    }
    */
}
