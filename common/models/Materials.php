<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\FileHelper;
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
 */
class Materials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materials';
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
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('backend', 'ID'),
            'title'         => Yii::t('backend', 'Title'),
            'description'   => Yii::t('backend', 'Description'),
            'type'          => Yii::t('backend', 'Type'),
            'status'        => Yii::t('backend', 'Status'),
            'created_at'    => Yii::t('backend', 'Created At'),
            'updated_at'    => Yii::t('backend', 'Updated At'),
        ];
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

                $image = Attachments::find()->where(['model_id' => $this->id, 'path' => $path, 'model_type' => $this->type])->one();
                if (!$image) {
                    $attachment = new Attachments();
                    $attachment->model_id = $this->id;
                    $attachment->user_id = Yii::$app->user->id;
                    $attachment->path = $path;
                    $attachment->model_type = $this->type;
                    $attachment->save();
                    $file->saveAs($dir . '/'. $path);
                }
            }
            return true;
        }
        return false;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return ArrayHelper::getValue(self::getTypes(), $this->type);
    }

    public function getPath()
    {
        return Yii::$app->params['staticDomain'] .'/';
    }
}
