<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "images".
 *
 * @property int $id
 * @property string $name Название
 * @property int $model_type Тип модели
 * @property int $status Статус
 * @property  $imageFiles
 */
class Images extends \yii\db\ActiveRecord
{
    const STATUS_PUBLISHED     = 1;
    const STATUS_NOT_PUBLISHED = 2;

    const TYPE_GALLERY = 4;
    const TYPE_CERTIFICATE = 5;

    public $imageFiles;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model_type'], 'required'],
            [['model_type', 'status'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['imageFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'            =>  Yii::t('backend', 'ID'),
            'name'          =>  Yii::t('backend', 'Name'),
            'model_type'    =>  Yii::t('backend', 'Model Type'),
            'status'        =>  Yii::t('backend', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttachments()
    {
        return $this->hasMany(Attachments::className(), ['model_id' => 'id'])->where(['type' => $this->model_type]);
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

                $image = Attachments::find()->where(['model_id' => $this->id, 'path' => $path, 'type' => $this->model_type])->one();
                if (!$image) {
                    $attachment = new Attachments();
                    $attachment->model_id = $this->id;
                    $attachment->path = $path;
                    $attachment->type = $this->model_type;
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

    /**
     * @return mixed
     */
    public function getTypeLabel()
    {
        return ArrayHelper::getValue(static::getType(), $this->model_type);
    }

    /**
     * @return array
     */
    public static function getType()
    {
        return [
            self::TYPE_GALLERY     => Yii::t('backend', 'Gallery'),
            self::TYPE_CERTIFICATE => Yii::t('backend', 'Certificate'),
        ];
    }

}
