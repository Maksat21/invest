<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;


/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $address Адрес
 * @property string $email Email
 * @property string $phone Телефон
 * @property string $link Ссылка
 * @property string $work_day График работы
 * @property string $latitude Широта
 * @property string $longitude Долгота
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 * @property int $status Статус
 */
class Contacts extends \yii\db\ActiveRecord
{
    const STATUS_PUBLISHED     = 1;
    const STATUS_NOT_PUBLISHED = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'value' => function(){
                    return date('Y-m-d H:i:s');
                }
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['latitude', 'longitude'], 'number'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['address', 'email', 'phone', 'link', 'work_day'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('backend', 'ID'),
            'address'       => Yii::t('backend', 'Address'),
            'email'         => Yii::t('backend', 'Email'),
            'phone'         => Yii::t('backend', 'Phone'),
            'link'          => Yii::t('backend', 'Link'),
            'work_day'      => Yii::t('backend', 'Work Day'),
            'latitude'      => Yii::t('backend', 'Latitude'),
            'longitude'     => Yii::t('backend', 'Longitude'),
            'created_at'    => Yii::t('backend', 'Created At'),
            'updated_at'    => Yii::t('backend', 'Updated At'),
            'status'        => Yii::t('backend', 'Status'),
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
