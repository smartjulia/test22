<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

$this->title = 'Request password reset';
?>
<div class="site-request-password-reset">
    <!--<h1><?= Html::encode($this->title) ?></h1>

     <p>Please fill out your email. A link to reset password will be sent there.</p>

   <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
                <?= $form->field($model, 'email') ?>
                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>-->
	    <body class="html not-front not-logged-in no-sidebars page-user page-user-password section-user login-pages" >
        <div class="ie-browser-header">
            You are using Internet Explorer 8. Some features might not work or display properly. It is highly recommended to update the browser or use a different one.        </div>
                <p id="skip-link">
          <a href="#main-menu" class="element-invisible element-focusable">Jump to navigation</a>
        </p>
         <!--<div class="header high-header">
            <a href="/" class="logo">
    <img src="../images/logo_0.png" alt="Ebanq"/>
</a>    </div>-->
<div class="content">
<?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>            
<div class="password-recovery-form">

<form action="/user/password?destination=user" method="post" id="user-pass" accept-charset="UTF-8"><div><h1>Forgot your password?</h1><div class="subtitle-text">Enter your email address or username to reset your password. You may need to check your spam folder or unblock no-reply@ebanq.com.</div>
<div class="form-item form-type-textfield form-item-name">
	<?= $form->field($model, 'email') -> textInput(['placeholder'=>'E-mail or Username',  'class'=>'form-control form-text required', 'type'=>'text', 'id'=>'request-password-reset-form', 'name'=>'name', 'value'=>'', 'size'=>'60', 'maxlength'=>'254'])->label('') ?>

</div>
<input type="hidden" name="form_build_id" value="form-Z0bJV5GlxxVETqxuvw7jZYAh93ZVhi-1CJnBDqakL1M" />
<input type="hidden" name="form_id" value="user_pass" />


<div class="form-actions form-wrapper" id="edit-actions"><div class="form-actions form-wrapper">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-success form-submit']) ?>
<?php ActiveForm::end(); ?>
</div><!--<input class="btn btn-success form-submit" type="submit" id="edit-submit" name="op" value="Submit" />-->
</div></div></form></div>    </div>


<!--<div class="registration-page-footer">
    <div class="copyrights pull-left">Copyright &copy; Ebanq 2014. All Rights reserved.</div>
    <div class="site-about pull-right">Ebanq.com - The Online Banking Software Solution.</div>
</div>-->
<script src="../sites/all/themes/ebanq/js/bootstrap.min.js" type="text/javascript"></script>            </body>
</div>
