<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $company_name Наименование компании
 * @property int $product_id Описание
 * @property int $quantity Количество
 * @property int $barrel Емкость
 * @property string $delivery Доставка
 * @property string $full_name ФИО
 * @property string $email Email
 * @property string $phone_number Номер телефона
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 * @property int $status Статус
 */
class Feedback extends \yii\db\ActiveRecord
{
    const STATUS_NOT_REVIEWED   = 1;
    const STATUS_REVIEWED       = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
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
            [['product_id', 'quantity', 'barrel'], 'integer'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['company_name', 'delivery', 'full_name', 'email', 'phone_number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('backend', 'ID'),
            'company_name'  => Yii::t('backend', 'Company Name'),
            'product_id'    => Yii::t('backend', 'Product ID'),
            'quantity'      => Yii::t('backend', 'Quantity'),
            'barrel'        => Yii::t('backend', 'Barrel'),
            'delivery'      => Yii::t('backend', 'Delivery'),
            'full_name'     => Yii::t('backend', 'Full Name'),
            'email'         => Yii::t('backend', 'Email'),
            'phone_number'  => Yii::t('backend', 'Phone Number'),
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
            self::STATUS_NOT_REVIEWED     => Yii::t('backend', 'Not Reviewed'),
            self::STATUS_REVIEWED => Yii::t('backend', 'Reviewed'),
        ];
    }
}
