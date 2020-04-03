<?php

namespace common\models;

use Yii;
use vova07\fileapi\behaviors\UploadBehavior;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $name Наименование
 * @property string $content Описание
 * @property string $image Картинка
 * @property int $status Статус
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 */
class Slider extends \yii\db\ActiveRecord
{
    const STATUS_PUBLISHED     = 1;
    const STATUS_NOT_PUBLISHED = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    public function behaviors()
    {
        return [
            'uploadBehavior' => [
                'class' => UploadBehavior::className(),
                'attributes' => [
                    'image' => [
                        'path' => '@static/web/slider/',
                        'tempPath' => '@static/temp/',
                        'url' => $this->getPath()
                    ]
                ]
            ],
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
            [['image'], 'required'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'content', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('backend', 'ID'),
            'name'          => Yii::t('backend', 'Name'),
            'content'       => Yii::t('backend', 'Content'),
            'image'         => Yii::t('backend', 'Image'),
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

    /**
     * @return string
     */
    public function getPath()
    {
        return Yii::$app->params['staticDomain'] . '/slider/';
    }

    /**
     * @return string
     */
    public function getImgUrl()
    {
        return $this->image ? $this->getPath() . $this->image : $this->getPath() . 'default.png';
    }
}
