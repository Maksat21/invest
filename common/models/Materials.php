<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "materials".
 *
 * @property int $id
 * @property string $title Наименование
 * @property string $description Описание
 * @property int $type Тип
 * @property int $status Статус
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 * @property string $meta_title Мета заголовок
 * @property string $meta_description Мета описание
 * @property string $meta_keywords Мета слова
 */
class Materials extends \yii\db\ActiveRecord
{
    const STATUS_PUBLISHED     = 1;
    const STATUS_NOT_PUBLISHED = 2;

    const TYPE_ABOUT = 1;
    const TYPE_ECOLOGY = 2;
    const TYPE_CAREER = 3;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materials';
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
            [['description'], 'string'],
            [['type', 'status'], 'required'],
            [['type', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'meta_title', 'meta_description', 'meta_keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'                => Yii::t('backend', 'ID'),
            'title'             => Yii::t('backend', 'Title'),
            'description'       => Yii::t('backend', 'Description'),
            'type'              => Yii::t('backend', 'Type'),
            'status'            => Yii::t('backend', 'Status'),
            'created_at'        => Yii::t('backend', 'Created At'),
            'updated_at'        => Yii::t('backend', 'Updated At'),
            'meta_title'        => Yii::t('backend', 'Meta Title'),
            'meta_description'  => Yii::t('backend', 'Meta Description'),
            'meta_keywords'     => Yii::t('backend', 'Meta Keywords'),
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

    /**
     * @return mixed
     */
    public function getTypeLabel()
    {
        return ArrayHelper::getValue(static::getStatuses(), $this->type);
    }

    /**
     * @return array
     */
    public static function getType()
    {
        return [
            self::TYPE_ABOUT    => Yii::t('backend', 'About'),
            self::TYPE_ECOLOGY  => Yii::t('backend', 'Ecology'),
            self::TYPE_CAREER   => Yii::t('backend', 'Career'),
        ];
    }
}
