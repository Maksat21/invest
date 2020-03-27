<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%attachments}}`.
 */
class m200225_095844_create_attachments_table extends Migration
{
    public $tableName = '{{%attachments}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'            => $this->bigPrimaryKey(),
            'model_id'      => $this->bigInteger()->notNull(),
            'type'          => $this->smallInteger()->notNull(),
            'path'          => $this->string()->notNull(),
            'is_main'       => $this->smallInteger()->defaultValue(0),
            'created_at'    => $this->dateTime(),
            'updated_at'    => $this->dateTime()
        ]);

        $this->addCommentOnTable($this->tableName,'Вложения');
        $this->addCommentOnColumn($this->tableName,'model_id','Модель ID');
        $this->addCommentOnColumn($this->tableName,'type','Тип');
        $this->addCommentOnColumn($this->tableName,'path','Путь');
        $this->addCommentOnColumn($this->tableName,'is_main','Главная картинка');
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
