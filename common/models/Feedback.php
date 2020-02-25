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
            'id' => 'ID',
            'company_name' => 'Company Name',
            'product_id' => 'Product ID',
            'quantity' => 'Quantity',
            'barrel' => 'Barrel',
            'delivery' => 'Delivery',
            'full_name' => 'Full Name',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
