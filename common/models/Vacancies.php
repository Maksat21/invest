<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vacancies".
 *
 * @property int $id
 * @property string $title Название
 * @property string $description Описание
 * @property string $wage Заработная плата
 * @property int $status Статус
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 */
class Vacancies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vacancies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'description', 'wage'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('backend', 'ID'),
            'title'         => Yii::t('backend', 'Title'),
            'description'   => Yii::t('backend', 'Description'),
            'wage'          => Yii::t('backend', 'Wage'),
            'status'        => Yii::t('backend', 'Status'),
            'created_at'    => Yii::t('backend', 'Created At'),
            'updated_at'    => Yii::t('backend', 'Updated At'),
        ];
    }
}
