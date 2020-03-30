<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%images}}`.
 */
class m200318_095752_create_images_table extends Migration
{
    public $tableName = '{{%images}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'            => $this->primaryKey(),
            'name'          => $this->string(),
            'model_type'    => $this->smallInteger()->notNull(),
            'status'        => $this->smallInteger()->defaultValue(1)->notNull(),
        ]);

        $this->addCommentOnTable($this->tableName,'Галерея');
        $this->addCommentOnColumn($this->tableName,'name','Название');
        $this->addCommentOnColumn($this->tableName,'model_type','Тип модели');
        $this->addCommentOnColumn($this->tableName,'status','Статус');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
