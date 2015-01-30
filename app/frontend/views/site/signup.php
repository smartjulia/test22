<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registration-form">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>User Information</p>

            <?php $form = ActiveForm::begin(['id' => 'user-register-form' , 'options' => ['class' => 'user-info-from-cookie' , 'enctype' => 'multipart/form-data']]); ?>
				<div>
					<fieldset class="required-fields group-user-information field-group-fieldset form-wrapper">
						<legend><span class="fieldset-legend">User information</span></legend>
						<div class="fieldset-wrapper">
							<div class="field-type-list-text field-name-field-user-title field-widget-options-select form-wrapper" id="edit-field-user-title">
								<div class="form-item form-type-select form-item-field-user-title-und">
								
								<label for="edit-field-user-title-und">Title </label>
								<select id="edit-field-user-title-und" name="field_user_title[und]" class="form-select">
									<option value="_none">- None -</option>
									<option value="Mr." selected="selected">Mr.</option>
									<option value="Ms.">Ms.</option>
									<option value="Mrs.">Mrs.</option></select>
								</div>
							</div>
                
								<div class="field-type-text field-name-field-user-first-name field-widget-text-textfield form-wrapper" id="edit-field-user-first-name">
									<div id="field-user-first-name-add-more-wrapper">
										<div class="form-item form-type-textfield form-item-field-user-first-name-und-0-value">
											<?= $form->field($model, 'firstName') -> textInput(['maxlength' => '500','class' => 'text-full form-control form-text required','id' => 'edit-field-user-first-name-und-0-value', 'name' => 'field_user_first_name[und][0][value]', 'size' => '60']) -> label('First Name') ?>
										</div>
									</div>
								</div>
								
								<div class="field-type-text field-name-field-user-last-name field-widget-text-textfield form-wrapper" id="edit-field-user-last-name">
									<div id="field-user-last-name-add-more-wrapper">
										<div class="form-item form-type-textfield form-item-field-user-last-name-und-0-value">
											<?= $form->field($model, 'lastName') -> textInput(['maxlength' => '500','class' => 'text-full form-control form-text required','id' => 'edit-field-user-last-name-und-0-value', 'name' => 'field_user_last_name[und][0][value]', 'size' => '60']) -> label('Last Name') ?>
										</div>
									</div>
								</div>
								
								<div id="edit-account" class="form-wrapper">
									<div class="form-item form-type-textfield form-item-name">
										<?= $form->field($model, 'username') -> textInput(['maxlength' => '60','class' => 'username form-control form-text required','id' => 'edit-name', 'name' => 'name', 'size' => '60']) -> label('Username') ?>
									</div>
									
									<div class="form-item form-type-textfield form-item-mail">
										<?= $form->field($model, 'email') -> textInput(['maxlength' => '254','class' => 'form-control form-text required','id' => 'edit-mail', 'name' => 'mail', 'size' => '60']) -> label('E-mail address') ?>
									</div>
									
									<div class="field-type-text field-name-field-user-confirm-email-address field-widget-text-textfield form-wrapper" id="edit-field-user-confirm-email-address">
										<div id="field-user-confirm-email-address-add-more-wrapper">
											<div class="form-item form-type-textfield form-item-field-user-confirm-email-address-und-0-value">
												<?= $form->field($model, 'email') -> textInput(['maxlength' => '254','class' => 'form-control form-text required','id' => 'edit-mail', 'name' => 'mail', 'size' => '60']) -> label('Confirm E-mail Address') ?>
											</div>
										</div>
									</div>
								</div>
								<div class="field-type-datetime field-name-field-user-date-of-birth field-widget-date-select form-wrapper" id="edit-field-user-date-of-birth">
									<?= $form->field($model, 'dateB') -> dropDownList(['1'=>'1','2'=>'2'])-> label('Date of birth will be here') ?>
								
									<?= $form->field($model, 'countryResidence') -> dropDownList(['1'=>'1','2'=>'2'])-> label('Country of Residence will be here') ?>
								
									<?= $form->field($model, 'countryCitizenship') -> dropDownList(['1'=>'1','2'=>'2'])-> label('Country of Citizenship will be here') ?>
								</div>
                
				<div class="form-group">	
				<?= Html::submitButton('Signup', ['class' => 'btn btn-success form-submit', 'name' => 'op', 'value' => 'Sign Up', 'id' => 'edit-submit']) ?>
     </div>
     <?php ActiveForm::end(); ?>

</div>
