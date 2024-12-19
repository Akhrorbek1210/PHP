<?php

namespace frontend\models;

use common\models\User;
use yii\base\Model;

class LoginRegistrForm extends Model
{
    public $username;
    public $password;
    public $email;

    public function rules()
    {
return [
    ['username', 'trim'],
    ['username', 'required'],
    ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
    ['username', 'string', 'min' => 2, 'max' => 255],

    ['email', 'trim'],
    ['email', 'required'],
    ['email', 'email'],
    ['email', 'string', 'max' => 255],
    ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

    ['password', 'required'],
    ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
];
    }
}