<?php
namespace frontend\models;

use common\models\User;
use app\models\UserProfile;
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
	public $dateDay;
	public $dateMonth;
	public $dateYear;
	public $country;
    

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

           [['firstName','lastName','username','email','emailConfirm','verifyCode',],'required'],
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

    public function userInsert()
    {
        $user = new User;
		$form = Yii::$app->request->post()['SignupForm'];
		
		$user -> username = $form['username'];
		$user -> email = $form['email'];
		//$user ->username = $form['username'];
		//$user ->username = $form['username'];
		$user -> insert();
		
		$userProfile = new UserProfile;
		
		$userProfile -> id = $user->find()->max('id');
		$userProfile -> firstname = $form['firstName'];
		$userProfile -> lastname = $form['lastName'];
		
		$dateDay = $form['dateDay'];
		$dateMonth = $form['dateMonth'];
		$dateYear = $form['dateYear'];
		$date = date("d-m-Y",strtotime("$dateDay-$dateMonth-$dateYear"));
		$userProfile -> birthday = $date;
		
		//$userProfile -> country_residence = $form['countryResidence'];
		//$userProfile -> country_citizenship = $form['countryCitizenship'];
		$userProfile -> phone = $form['phone'];
		$userProfile -> company = $form['company'];
		$userProfile -> insert();
		//$form = Yii::$app->request->post()['SignupForm'];
		//var_dump($form['countryResidence']);
    }
	public function dateDay() {
	return $this -> dateDay = ['',1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
	}
	public function dateMonth() {
	return $this -> dateDay = [''=>'','Jan'=>'Jan','Feb'=>'Feb','Mar'=>'Mar','Apr'=>'Apr','May'=>'May','Jun'=>'Jun','Jul'=>'Jul','Aug'=>'Aug','Sep'=>'Sep','Oct'=>'Oct','Nov'=>'Nov','Dec'=>'Dec'];
	}
}
