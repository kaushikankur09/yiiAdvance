<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Dashboard
 */
class DashboardForm extends Model
{
    public $name;
    public $password;
    public $qualification;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'password', 'qualification', 'body'], 'required'],
            // // email has to be a valid email address
            // ['email', 'email'],
            // // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }
}
?>