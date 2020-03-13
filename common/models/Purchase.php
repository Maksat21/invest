<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "purchase".
 *
 * @property int $id
 * @property string $name Наименование
 * @property string $content Описание
 * @property string $quantity Количество
 * @property string $delivery_time Срок поставки
 * @property int $status Статус
 * @property string $meta_title Мета заголовок
 * @property string $meta_description Мета описание
 * @property string $meta_keywords Мета слова
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 */
class Purchase extends \yii\db\ActiveRecord
{
    const STATUS_PUBLISHED     = 1;
    const STATUS_NOT_PUBLISHED = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'purchase';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'content', 'quantity', 'delivery_time', 'meta_title', 'meta_description', 'meta_keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'                => Yii::t('backend', 'ID'),
            'name'              => Yii::t('backend', 'Name'),
            'content'           => Yii::t('backend', 'Content'),
            'quantity'          => Yii::t('backend', 'Quantity'),
            'delivery_time'     => Yii::t('backend', 'Delivery Time'),
            'status'            => Yii::t('backend', 'Status'),
            'meta_title'        => Yii::t('backend', 'Meta Title'),
            'meta_description'  => Yii::t('backend', 'Meta Description'),
            'meta_keywords'     => Yii::t('backend', 'Meta Keywords'),
            'created_at'        => Yii::t('backend', 'Created At'),
            'updated_at'        => Yii::t('backend', 'Updated At'),
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
