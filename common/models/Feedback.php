<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $company_name Наименование компании
 * @property int $product_id Описание
 * @property int $quantity Количество
 * @property string $barrel Емкость
 * @property string $delivery Доставка
 * @property string $full_name ФИО
 * @property string $email Email
 * @property string $phone_number Номер телефона
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'quantity'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['company_name', 'barrel', 'delivery', 'full_name', 'email', 'phone_number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'company_name' => Yii::t('backend', 'Company Name'),
            'product_id' => Yii::t('backend', 'Product ID'),
            'quantity' => Yii::t('backend', 'Quantity'),
            'barrel' => Yii::t('backend', 'Barrel'),
            'delivery' => Yii::t('backend', 'Delivery'),
            'full_name' => Yii::t('backend', 'Full Name'),
            'email' => Yii::t('backend', 'Email'),
            'phone_number' => Yii::t('backend', 'Phone Number'),
            'created_at' => Yii::t('backend', 'Created At'),
            'updated_at' => Yii::t('backend', 'Updated At'),
        ];
    }
}
