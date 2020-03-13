<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name Наименование
 * @property string $content Описание
 * @property int $status Статус
 * @property string $slug Алиас
 * @property string $meta_title Мета заголовок
 * @property string $meta_description Мета описание
 * @property string $meta_keywords Мета слова
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 * @property  $imageFiles
 */
class Product extends \yii\db\ActiveRecord
{
    const STATUS_PUBLISHED     = 1;
    const STATUS_NOT_PUBLISHED = 2;

    public $imageFiles;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
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
            'slug' => [
                'class' => 'Zelenin\yii\behaviors\Slug',
                'slugAttribute' => 'slug',
                'attribute' => ['name'],
                // optional params
                'ensureUnique' => true,
                'replacement' => '-',
                'lowercase' => true,
                'immutable' => false,
                'transliterateOptions' => 'Russian-Latin/BGN; Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC;'
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'content', 'slug', 'meta_title', 'meta_description', 'meta_keywords'], 'string', 'max' => 255],
            [['imageFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 4],
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
            'status'            => Yii::t('backend', 'Status'),
            'slug'              => Yii::t('backend', 'Slug'),
            'meta_title'        => Yii::t('backend', 'Meta Title'),
            'meta_description'  => Yii::t('backend', 'Meta Description'),
            'meta_keywords'     => Yii::t('backend', 'Meta Keywords'),
            'created_at'        => Yii::t('backend', 'Created At'),
            'updated_at'        => Yii::t('backend', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttachments()
    {
        return $this->hasMany(Attachments::className(), ['model_id' => 'id'])->where(['type' => Attachments::TYPE_PRODUCT]);
    }

    /**
     * @return boolean
     */
    public function upload()
    {
        if ($this->validate()) {
            $dir = Yii::getAlias('@static').'/web';
            FileHelper::createDirectory($dir, '0775', true);
            foreach ($this->imageFiles as $file) {
                $path = $file->baseName . '.' . $file->extension;

                $image = Attachments::find()->where(['model_id' => $this->id, 'path' => $path, 'type' => Attachments::TYPE_PRODUCT])->one();
                if (!$image) {
                    $attachment = new Attachments();
                    $attachment->model_id = $this->id;
                    $attachment->path = $path;
                    $attachment->type = Attachments::TYPE_PRODUCT;
                    $attachment->save();
                    $file->saveAs($dir . '/'. $path);
                }
            }
            return true;
        }
        return false;
    }

    public function getPath()
    {
        return Yii::$app->params['staticDomain'] .'/';
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
