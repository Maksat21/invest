<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "attachments".
 *
 * @property int $id
 * @property int $model_id Модель ID
 * @property int $type Тип
 * @property string $path Путь
 * @property int $is_main Главная картинка
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 */
class Attachments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attachments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model_id', 'type', 'path'], 'required'],
            [['model_id', 'type', 'is_main'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['path'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model_id' => 'Model ID',
            'type' => 'Type',
            'path' => 'Path',
            'is_main' => 'Is Main',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
