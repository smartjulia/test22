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
    public $phone;
    public $company;
    public $adress1;
    public $adress2;
    public $city;
    public $state;
    public $zipCode;
	public $emailConfirm;
    public $userPassportNumber;
    public $verifyCode;
    

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

           ['firstName','required'],
             // verifyCode needs to be entered correctly
           ['verifyCode', 'captcha'],
        ];
    }


     public function attributeLabels()
    {
        return [

            'username' => 'Username ',['class'=>'ffff'],
            'email' => 'E-mail address ',
            'firstName' => 'First Name',
            'lastName' => 'Last Name ',
            'dateB' => 'Date of Birth ',
            'countryResidence' => 'Country of Residence',
            'countryCitizenship' => 'Country of Citizenship ',
            'phone' => 'Phone Number ',
            'company' => 'Company name ',
            'adress1' => 'Address ',
            'adress2' => 'Address (2nd Line) ',
            'city' => 'City ',
            'state' => 'State/Province/Region ',
            'zipCode' => 'Zip/Postal Code ',
            'emailConfirm' => 'Confirm Email Address',
            'userPassportNumber' => 'Document number',
            'verifyCode' => 'Human or robot?',
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
