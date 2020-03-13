<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "management".
 *
 * @property int $id
 * @property string $full_name ФИО
 * @property string $content Описание
 * @property string $post Должность
 * @property string $created_at Дата создания
 * @property string $updated_at Дата обновления
 * @property  $imageFiles
 */
class Management extends \yii\db\ActiveRecord
{
    public $imageFiles;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'management';
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
            [['created_at', 'updated_at'], 'safe'],
            [['full_name', 'content', 'post'], 'string', 'max' => 255],
            [['imageFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('backend', 'ID'),
            'full_name'     => Yii::t('backend', 'Full Name'),
            'content'       => Yii::t('backend', 'Content'),
            'post'          => Yii::t('backend', 'Post'),
            'created_at'    => Yii::t('backend', 'Created At'),
            'updated_at'    => Yii::t('backend', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttachments()
    {
        return $this->hasMany(Attachments::className(), ['model_id' => 'id'])->where(['type' => Attachments::TYPE_MANAGEMENT]);
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

                $image = Attachments::find()->where(['model_id' => $this->id, 'path' => $path, 'type' => Attachments::TYPE_MANAGEMENT])->one();
                if (!$image) {
                    $attachment = new Attachments();
                    $attachment->model_id = $this->id;
                    $attachment->path = $path;
                    $attachment->type = Attachments::TYPE_MANAGEMENT;
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


}
