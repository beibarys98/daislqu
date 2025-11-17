<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $whatsapp;

    private $_user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['whatsapp'], 'required'],
            [['whatsapp'], 'string', 'max' => 12],
            [['whatsapp'], 'match', 'pattern' => '/^\+?\d+$/', 'message' => 'Only numbers and + sign are allowed.'],
        ];
    }

    public function login()
    {
        if ($this->validate()) {
            $user = $this->getUser();

            // auto-create user if not exist
            if (!$user) {
                $user = new User();
                $whatsapp = $this->whatsapp;
                $whatsapp = preg_replace('/\D/', '', $whatsapp);
                if (str_starts_with($whatsapp, '8') || str_starts_with($whatsapp, '7')) {
                    $whatsapp = '7' . substr($whatsapp, 1);
                }

                $user->whatsapp = $whatsapp;
                $user->save(false);
            }


            return Yii::$app->user->login($user, 3600 * 24 * 30);
        }

        return false;
    }

    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findOne(['whatsapp' => $this->whatsapp]);
        }
        return $this->_user;
    }
}
