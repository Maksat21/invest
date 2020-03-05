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
            'id' => Yii::t('backend', 'ID'),
            'full_name' => Yii::t('backend', 'Full Name'),
            'content' => Yii::t('backend', 'Content'),
            'post' => Yii::t('backend', 'Post'),
            'created_at' => Yii::t('backend', 'Created At'),
            'updated_at' => Yii::t('backend', 'Updated At'),
        ];
    }


}
