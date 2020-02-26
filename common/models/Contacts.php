<?php

namespace common\models;

use Yii;

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
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['latitude', 'longitude'], 'number'],
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
            'id' => 'ID',
            'address' => 'Address',
            'email' => 'Email',
            'phone' => 'Phone',
            'link' => 'Link',
            'work_day' => 'Work Day',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
