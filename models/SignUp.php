<?php
namespace app\models;

use yii\base\Model;
use app\models\User;

class SignUp extends Model{

    public $login;
    public $password;

    public function rules() {
        return [
            [['login', 'password'], 'required', 'message' => 'Заполните поле'],
        ];
    }

    public function attributeLabels() {
        return [
            'login' => 'Логин',
            'password' => 'Пароль',
        ];
    }

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();

        $user->login = $this->login;
        $user->password = \Yii::$app->security->generatePasswordHash($this->password);

        return $user->save() ? $user : null;
    }

}