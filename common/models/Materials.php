<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "materials".
 *
 * @property int $id
 * @property string $title Наименование
 * @property string $description Описание
 * @property int $type Тип
 * @property int $status Статус
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 */
class Materials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['type', 'status'], 'required'],
            [['type', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'type' => 'Type',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
