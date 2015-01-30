<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $firstName;
	public $lastName;
	public $dateB;
	public $countryResidence;
	public $countryCitizenship;
	public $password;
	//public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'required']
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    /*public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }*/
}
