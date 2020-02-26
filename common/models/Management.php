<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "management".
 *
 * @property int $id
 * @property string $full_name ФИО
 * @property string $content Описание
 * @property string $post Должность
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 */
class Management extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'management';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['full_name', 'content', 'post'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'content' => 'Content',
            'post' => 'Post',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
