<?php

namespace common\models;

use Yii;
use yii\helpers\FileHelper;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title Наименование
 * @property string $description Описание
 * @property int $status Статус
 * @property string $slug Алиас
 * @property string $meta_title Мета заголовок
 * @property string $meta_description Мета описание
 * @property string $meta_keywords Мета слова
 * @property string $created_at Дата создания
 * @property  $imageFiles
 * @property string $updated_at Дата обновления
 */
class News extends \yii\db\ActiveRecord
{
    const STATUS_PUBLISHED     = 1;
    const STATUS_NOT_PUBLISHED = 2;

    public $imageFiles;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
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
                'attribute' => ['title'],
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
            [['description'], 'string'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'slug', 'meta_title', 'meta_description', 'meta_keywords'], 'string', 'max' => 255],
            [['imageFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'title' => Yii::t('backend', 'Title'),
            'description' => Yii::t('backend', 'Description'),
            'status' => Yii::t('backend', 'Status'),
            'slug' => Yii::t('backend', 'Slug'),
            'meta_title' => Yii::t('backend', 'Meta Title'),
            'meta_description' => Yii::t('backend', 'Meta Description'),
            'meta_keywords' => Yii::t('backend', 'Meta Keywords'),
            'created_at' => Yii::t('backend', 'Created At'),
            'updated_at' => Yii::t('backend', 'Updated At'),
            'imageFiles' => Yii::t('backend', 'Images'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttachments()
    {
        return $this->hasMany(Attachments::className(), ['model_id' => 'id']);
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

                $image = Attachments::find()->where(['model_id' => $this->id, 'path' => $path, 'type' => Attachments::TYPE_NEWS])->one();
                if (!$image) {
                    $attachment = new Attachments();
                    $attachment->model_id = $this->id;
                    $attachment->path = $path;
                    $attachment->type = Attachments::TYPE_NEWS;
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
