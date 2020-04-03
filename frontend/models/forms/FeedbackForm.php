<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 02.04.20
 * Time: 10:47
 */

namespace frontend\models\forms;

use Yii;
use yii\base\Model;
use common\models\Feedback;
use yii\web\ConflictHttpException;

class FeedbackForm extends Model
{
    public $company_name;
    public $product_id;
    public $quantity;
    public $barrel;
    public $delivery;
    public $full_name;
    public $email;
    public $phone_number;
    public $status;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_name', 'barrel', 'delivery', 'full_name', 'email', 'phone_number'], 'string'],
            [['full_name', 'email', 'phone_number'], 'required', 'message' => 'Введите "{attribute}".' ],
            [['product_id', 'quantity', 'status'], 'integer'],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('backend', 'ID'),
            'company_name'  => Yii::t('backend', 'Company Name'),
            'product_id'    => Yii::t('backend', 'Product ID'),
            'quantity'      => Yii::t('backend', 'Quantity'),
            'barrel'        => Yii::t('backend', 'Barrel'),
            'delivery'      => Yii::t('backend', 'Delivery'),
            'full_name'     => Yii::t('backend', 'Full Name'),
            'email'         => Yii::t('backend', 'Email'),
            'phone_number'  => Yii::t('backend', 'Phone Number'),
            'status'        => Yii::t('backend', 'Status'),
            'created_at'    => Yii::t('backend', 'Created At'),
            'updated_at'    => Yii::t('backend', 'Updated At'),
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function save()
    {
        $request = new Feedback();
        $request->company_name = $this->company_name;
        $request->product_id = $this->product_id;
        $request->quantity = $this->quantity;
        $request->barrel = $this->barrel;
        $request->delivery = $this->delivery;
        $request->full_name = $this->full_name;
        $request->email = $this->email;
        $request->phone_number = $this->phone_number;
        $request->status = Feedback::STATUS_PUBLISHED;

        if($request->validate() && $request->save()){
            $this->sendMail($request);
            return true;
        }else{
            throw new ConflictHttpException('error');
        }
    }

    public function sendMail($request)
    {
        return Yii::$app->mailer->compose(['html' => 'RequisitionTheme-html'], ['model' => $request])
            ->setFrom([Yii::$app->params['robotEmail'] => Yii::$app->params['robotName']])
            ->setTo(['xmax_gar@mail.ru'])
            ->setSubject(Yii::t('common', 'Форма заявки #{id}', ['id' => $request->id]))
            ->send();
    }


}
