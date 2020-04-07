<?php

use yii\db\Migration;

/**
 * Class m200406_072639_add_email_and_fax_column_to_tables
 */
class m200406_072639_add_email_and_fax_column_to_tables extends Migration
{
    public $tableContacts = '{{%contacts}}';
    public $tableManagement = '{{%management}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableContacts, 'fax_number', $this->string());
        $this->addColumn($this->tableManagement, 'email', $this->string());

        $this->addCommentOnColumn($this->tableContacts,'fax_number','Номер факса');
        $this->addCommentOnColumn($this->tableManagement,'email','Email');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableContacts,'fax_number');
        $this->dropColumn($this->tableManagement,'email');
    }
}
