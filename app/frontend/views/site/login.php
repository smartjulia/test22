<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<body class="html not-front not-logged-in no-sidebars page-user page-user-register section-user login-pages" >
    <div class="ie-browser-header">
    You are using Internet Explorer 8. Some features might not work or display properly. It is highly recommended to update the browser or use a different one.        </div>
    <p id="skip-link">
    <a href="#main-menu" class="element-invisible element-focusable">Jump to navigation</a>
    </p>
    <div class="header high-header">
        <a href="/" class="logo">
            <img src="../images/logo_0.png" alt="Ebanq"/>
        </a>    </div>
        <div class="content">
            <ul class="big-screen-tabs">
                <li><a href="login.htm">Log In</a></li>
                <li class="or">or</li>
                <li class="active"><a href="login-sign-up.htm" class="active">Sign Up</a></li>
            </ul>





<div class="login-form">


 <!--   <h1><?= Html::encode($this->title) ?></h1>-->

  <!-- <p>Please fill out the following fields to login:</p> -->

    <!--<div class="row">-->
       <!-- <div class="col-lg-5">-->
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
              
                <?= $form->field($model, 'username',['inputOptions' => ['id'=>"edit-name", 'placeholder'=>"Name"]])->label('') ?>
                
                
                <?= $form->field($model, 'password',['inputOptions' => ['id'=>"edit-pass", 'placeholder'=>"Password"]])->label('')->passwordInput() ?>
                
                <!--  <?= $form->field($model, 'rememberMe')->checkbox() ?> -->
               
               
                <div id="edit-actions" class="form-actions form-wrapper">
                    <?= Html::submitButton('SING IN', ['class' => 'btn btn-success form-submit', 'name' => 'op']) ?>
                </div>
                
                 <div>
                     <?= Html::a('Forgot your password?', ['site/request-password-reset']) ?>
                </div>
                
            <?php ActiveForm::end(); ?>
        <!--</div>-->
   <!-- </div>-->
</div>
