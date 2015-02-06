<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use yii;
//use common\models\SignupForm;
//use yii\validators\EmailValidator;
//use frontend\models\Username;

/**
 * Password reset request form
 */
class PasswordResetRequestForm extends Model
{
    public $email;
	public $username;
	

	
	public function rules()
    {
			return [
			['username', 'filter', 'filter' => 'trim'],
            ['username', 'required', 'message' => 'There is no user with such username or email.']
			/*['username', 'exist'
                'targetClass' => '\common\models\User',
                'filter' => ['status' => User::STATUS_ACTIVE],
                'message' => 'There is no user with such username.'
            ],*/
			];
			
	}
    /**
     * @inheritdoc
     */
    

    /**
     * Sends an email with a link, for resetting the password.
     *
     * @return boolean whether the email was send
     */
    public function sendEmail()
    {
        /* @var $user User */
		$pos=strpos('username', '@');
		if($pos===false){ 
            $user = User::find()
			
			->where(['status' => User::STATUS_ACTIVE])
			->where(['username'=>$this->username])
			->orwhere(['email' => $this->username])
			->one(); 
			} else {
			
			$user = User::find()
			->where(['status' => User::STATUS_ACTIVE])
			->where(['username'=>$this->username])
			->orwhere(['email' => $this->username])
			->one(); 
		}
	

        if ($user) {
            if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
                $user->generatePasswordResetToken();
            }

            if ($user->save()) {
                return \Yii::$app->mailer->compose(['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'], ['user' => $user])
                    ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' robot'])
                    ->setTo($this->email)
                    ->setSubject('Password reset for ' . \Yii::$app->name)
                    ->send();
            }
        }

        return false;
    }
}
