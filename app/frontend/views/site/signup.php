<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

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

<div class="registration-form">
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
                <div class="field-type-text field-name-field-user-mobile-phone field-widget-text-textfield form-wrapper" id="edit-field-user-mobile-phone">
                    <div id="field-user-mobile-phone-add-more-wrapper">
                        <div class="form-item form-type-textfield form-item-field-user-mobile-phone-und-0-value">
                            <?= $form->field($model, 'phone') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-mobile-phone-und-0-value')) ->label('Phone Number') ?>
                        </div>
                    </div>
                </div>
                <div class="field-type-text field-name-field-user-company-name field-widget-text-textfield form-wrapper" id="edit-field-user-company-name">
                    <div id="field-user-company-name-add-more-wrapper">
                        <div class="form-item form-type-textfield form-item-field-user-company-name-und-0-value">
                            <?= $form->field($model, 'company') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-company-name-und-0-value')) ->label('Company name ') ?>
                        </div>
                    </div>
                </div>
            </div></div></fieldset>
            <fieldset class="required-fields group-user-physical-address field-group-fieldset form-wrapper"><legend><span class="fieldset-legend">Physical address</span></legend><div class="fieldset-wrapper">
            <div class="field-type-text field-name-field-user-pa-address field-widget-text-textfield form-wrapper" id="edit-field-user-pa-address">
                <div id="field-user-pa-address-add-more-wrapper">
                    <div class="form-item form-type-textfield form-item-field-user-pa-address-und-0-value">
                        <?= $form->field($model, 'adress1') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-pa-address-und-0-value')) ->label('Address ') ?>
                    </div>
                </div>
            </div>
            <div class="field-type-text field-name-field-user-pa-address-2nd-line field-widget-text-textfield form-wrapper" id="edit-field-user-pa-address-2nd-line">
                <div id="field-user-pa-address-2nd-line-add-more-wrapper">
                    <div class="form-item form-type-textfield form-item-field-user-pa-address-2nd-line-und-0-value">
                        <?= $form->field($model, 'adress2') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-pa-address-2nd-line-und-0-value')) ->label('Address (2nd Line) ') ?>
                    </div>
                </div>
            </div>
            <div class="field-type-text field-name-field-user-pa-city field-widget-text-textfield form-wrapper" id="edit-field-user-pa-city">
                <div id="field-user-pa-city-add-more-wrapper">
                    <div class="form-item form-type-textfield form-item-field-user-pa-city-und-0-value">
                        <?= $form->field($model, 'city') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-pa-city-und-0-value')) ->label('City ') ?>
                    </div>
                </div>
            </div>
            <div class="field-type-text field-name-field-user-pa-state-prov-region field-widget-text-textfield form-wrapper" id="edit-field-user-pa-state-prov-region">
                <div id="field-user-pa-state-prov-region-add-more-wrapper">
                    <div class="form-item form-type-textfield form-item-field-user-pa-state-prov-region-und-0-value">
                        <?= $form->field($model, 'state') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-pa-state-prov-region-und-0-value')) ->label('State/Province/Region') ?>
                    </div>
                </div>
            </div>
            <div class="field-type-text field-name-field-user-pa-zip-postal-code field-widget-text-textfield form-wrapper" id="edit-field-user-pa-zip-postal-code">
                <div id="field-user-pa-zip-postal-code-add-more-wrapper">
                    <div class="form-item form-type-textfield form-item-field-user-pa-zip-postal-code-und-0-value">
                        <?= $form->field($model, 'zip_code') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-pa-zip-postal-code-und-0-value')) ->label('Zip/Postal Code ') ?>
                    </div>
                </div>
            </div>
            <div class="final-description">We will contact you prior to full account activation to request any additional information that might be required.</div><div class="form-actions form-wrapper" id="edit-actions">     <?= Html::submitButton('Sign up', ['class' => 'btn btn-success form-submit', 'name' => 'op']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
</div>