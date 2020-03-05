<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "attachments".
 *
 * @property int $id
 * @property int $model_id Модель ID
 * @property int $type Тип
 * @property string $path Путь
 * @property int $is_main Главная картинка
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 */
class Attachments extends \yii\db\ActiveRecord
{
    const MAIN = 1;
    const NOT_MAIN = 0;

    const TYPE_NEWS = 1;
    const TYPE_PRODUCT = 2;
    const TYPE_MANAGEMENT = 3;
    const TYPE_GALLERY = 4;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attachments';
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
            [['model_id', 'type', 'path'], 'required'],
            [['model_id', 'type', 'is_main'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['path'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'model_id' => Yii::t('backend', 'Model ID'),
            'type' => Yii::t('backend', 'Type'),
            'path' => Yii::t('backend', 'Path'),
            'is_main' => Yii::t('backend', 'Is Main'),
            'created_at' => Yii::t('backend', 'Created At'),
            'updated_at' => Yii::t('backend', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::className(), ['id' => 'model_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'model_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManagement()
    {
        return $this->hasOne(Management::className(), ['id' => 'model_id']);
    }
}
