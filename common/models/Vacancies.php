<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

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
    const STATUS_PUBLISHED     = 1;
    const STATUS_NOT_PUBLISHED = 2;

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

    /**
     * @return mixed
     */
    public function getStatusLabel()
    {
        return ArrayHelper::getValue(static::getStatuses(), $this->status);
    }

    /**
     * @return array
     */
    public static function getStatuses()
    {
        return [
            self::STATUS_PUBLISHED     => Yii::t('backend', 'Published'),
            self::STATUS_NOT_PUBLISHED => Yii::t('backend', 'Not Published'),
        ];
    }
}
