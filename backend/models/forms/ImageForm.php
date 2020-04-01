<?php
namespace backend\models\forms;

use common\models\Attachments;
use yii\base\Model;

class ImageForm extends Model
{
    const SCENARIO_SET_MAIN_IMAGE = 'setMainImage';
    const SCENARIO_DELETE_IMAGE = 'deleteImage';

    public $image_id;
    public $main_image_id;
    public $model_id;
    public $model_type;

    public function scenarios()
    {
        return [
            self::SCENARIO_SET_MAIN_IMAGE => ['main_image_id', 'model_id', 'model_type'],
            self::SCENARIO_DELETE_IMAGE => ['image_id'],
        ];
    }

    public function rules()
    {
        return [
            [['image_id', 'main_image_id', 'model_id', 'model_type'], 'integer'],
            [['image_id', 'main_image_id', 'model_id', 'model_type'], 'required'],
        ];
    }

    public function setMainImage()
    {
        $attachment = Attachments::findOne(['id' => $this->main_image_id, 'model_id' => $this->model_id, 'type' => $this->model_type]);
        if ($attachment) {
            Attachments::updateAll(['is_main' => Attachments::NOT_MAIN], ['model_id' => $this->model_id]);
            $attachment->is_main = Attachments::MAIN;
            if ($attachment->save()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}