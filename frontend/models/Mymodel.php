<?php

namespace frontend\models;

use yii\base\Model;

class Mymodel extends Model
{
public $name;
public $email;
public $phone;
public function rules()
{
return[
    [['name','email','phone'],'required'],
    ['email','email'],
];
}
}