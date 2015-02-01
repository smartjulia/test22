<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

$this->title = 'User account | Ebanq';
//$this->params['breadcrumbs'][] = $this->title;

?>
    <!--<h1><?= Html::encode($this->title) ?></h1>-->

<body class="html not-front not-logged-in no-sidebars page-user page-user-password section-user login-pages" >
<div class="ie-browser-header">You are using Internet Explorer 8. Some features might not work or display properly. It is highly recommended to update the browser or use a different one.        
		</div>
<p id="skip-link"><a href="#main-menu" class="element-invisible element-focusable">Jump to navigation</a></p>
<div class="password-recovery-form">
	<?php $form = ActiveForm::begin(['id' => 'user-pass']); ?>
<div class="content">        

<div><h1>Forgot your password?</h1><div class="subtitle-text">Enter your email address or username to reset your password. You may need to check your spam folder or unblock no-reply@ebanq.com.</div>
		<input type="hidden" name="form_build_id" value="form-Z0bJV5GlxxVETqxuvw7jZYAh93ZVhi-1CJnBDqakL1M" />
		<input type="hidden" name="form_id" value="user_pass" />
</div>
<div class="form-item form-type-textfield form-item-name">
        <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
        <?= $form->field($model, 'email') -> textInput(['placeholder'=>'E-mail or Username', 'class'=>'form-control form-text required', 'id'=>'request-password-reset-form', 'value'=>'', 'size'=>'60', 'maxlength'=>'254'])-> label('')?>
				
</div>
<div class="form-actions form-wrapper" id="edit-actions">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success form-submit', 'type'=>'submit', 'id'=>'edit-submit', 'name'=>'op', 'value'=>'Submit']) ?>
</div>
</div>

        <?php ActiveForm::end(); ?>
</div>
<!--<div class="registration-page-footer">
    <div class="copyrights pull-left">Copyright &copy; Ebanq 2014. All Rights reserved.</div>
    <div class="site-about pull-right">Ebanq.com - The Online Banking Software Solution.</div>
</div>-->
<script src="../sites/all/themes/ebanq/js/bootstrap.min.js" type="text/javascript"></script>            
</body>
