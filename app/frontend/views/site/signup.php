<script>jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"ebanq","theme_token":"sG3dOB8VDrkqAhn1WqhaWHENLpBMH02bfPOP008ItgI","js":{"sites\/all\/modules\/contributed\/jquery_update\/replace\/jquery\/1.10\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/contributed\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.core.min.js":1,"sites\/all\/modules\/contributed\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.widget.min.js":1,"sites\/all\/modules\/contributed\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.position.min.js":1,"sites\/all\/modules\/contributed\/jquery_update\/replace\/ui\/external\/jquery.cookie.js":1,"\/sites\/all\/libraries\/jquery.maskedinput\/src\/jquery.maskedinput.js":1,"misc\/form.js":1,"sites\/all\/modules\/custom\/ebanq_custom\/js\/ebanq_custom.js":1,"sites\/all\/modules\/contributed\/captcha\/captcha.js":1,"sites\/all\/libraries\/jquery.ui.selectmenu\/jquery.ui.selectmenu.js":1,"sites\/all\/modules\/contributed\/date\/date.js":1,"sites\/all\/modules\/contributed\/field_group\/field_group.js":1,"sites\/all\/themes\/ebanq\/js\/script.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"misc\/ui\/jquery.ui.core.css":1,"misc\/ui\/jquery.ui.theme.css":1,"sites\/all\/modules\/contributed\/date\/date_api\/date.css":1,"sites\/all\/modules\/contributed\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/contributed\/views\/css\/views.css":1,"sites\/all\/modules\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/contributed\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/custom\/ebanq_custom\/css\/ebanq_custom_select.css":1,"sites\/all\/libraries\/jquery.ui.selectmenu\/jquery.ui.selectmenu.css":1,"sites\/all\/modules\/contributed\/field_group\/field_group.field_ui.css":1,"sites\/all\/modules\/contributed\/field_group\/field_group.css":1,"sites\/all\/themes\/ebanq\/css\/fonts.css":1,"sites\/all\/themes\/ebanq\/system.menus.css":1,"sites\/all\/themes\/ebanq\/system.messages.css":1,"sites\/all\/themes\/ebanq\/system.theme.css":1,"sites\/all\/themes\/ebanq\/css\/styles.css":1,"sites\/all\/themes\/ebanq\/css\/bootstrap.min.css":1,"http:\/\/demo.ebanq.com\/custom.css":1}},"scheme_color":{"header_back":"ffffff","header_elements":"5f5f5f","header_bottom_line":"e6e6e6","non_active_menu_icons":"7a7a7a","menu_elements":"a9a9a9","menu_back":"3b3e42","main":"94c817"},"field_group":{"fieldset":"form"}});</script>
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\captcha\Captcha;
use frontend\models\Country;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
?>
<? $this->title = 'User account | Ebanq';?>
<body class="html not-front not-logged-in no-sidebars page-user page-user-register section-user login-pages" >
    <div class="ie-browser-header">
    You are using Internet Explorer 8. Some features might not work or display properly. It is highly recommended to update the browser or use a different one.        </div>
    <p id="skip-link">
    <a href="#main-menu" class="element-invisible element-focusable">Jump to navigation</a>
    </p>
    <div class="content">
        <ul class="big-screen-tabs">
            <li><a href="?r=site/login">Log In</a></li>
            <li class="or">or</li>
            <li class="active"><a href="?r=site/signup" class="active">Sign Up</a></li>
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
                                        <?= $form->field($model, 'firstName') -> textInput(['maxlength' => '500','class' => 'text-full form-control form-text required','id' => 'edit-field-user-first-name-und-0-value', 'size' => '60'])-> label('First Name', ['class' => ''])?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="field-type-text field-name-field-user-last-name field-widget-text-textfield form-wrapper" id="edit-field-user-last-name">
                                <div id="field-user-last-name-add-more-wrapper">
                                    <div class="form-item form-type-textfield form-item-field-user-last-name-und-0-value">
                                        <?= $form->field($model, 'lastName') -> textInput(['maxlength' => '500','class' => 'text-full form-control form-text required','id' => 'edit-field-user-last-name-und-0-value',  'size' => '60'])?>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="edit-account" class="form-wrapper">
                                <div class="form-item form-type-textfield form-item-name">
                                    <?= $form->field($model, 'username') -> textInput(['maxlength' => '60','class' => 'username form-control form-text required','id' => 'edit-name',  'size' => '60'])?>
                                </div>
                                
                                <div class="form-item form-type-textfield form-item-mail">
                                    <?= $form->field($model, 'email') -> textInput(['maxlength' => '254','class' => 'form-control form-text required','id' => 'edit-mail',  'size' => '60'])?>
                                </div>
                                
                                <div class="field-type-text field-name-field-user-confirm-email-address field-widget-text-textfield form-wrapper" id="edit-field-user-confirm-email-address">
                                    <div id="field-user-confirm-email-address-add-more-wrapper">
                                        <div class="form-item form-type-textfield form-item-field-user-confirm-email-address-und-0-value">
                                            <?= $form->field($model, 'emailConfirm') -> textInput(['maxlength' => '254','class' => 'form-control form-text required','id' => 'edit-mail',  'size' => '60'])?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field-type-datetime field-name-field-user-date-of-birth field-widget-date-select form-wrapper" id="edit-field-user-date-of-birth">
								<div id="field-user-date-of-birth-add-more-wrapper">
									<fieldset class="form-wrapper">
									<legend><span class="fieldset-legend">Date of Birth </span></legend>
									<div class="fieldset-wrapper">
										<div  class="date-no-float container-inline-date">
											<div class="form-item form-type-date-select form-item-field-user-date-of-birth-und-0-value">
												<div id="edit-field-user-date-of-birth-und-0-value"  class="date-padding clearfix">
													<div class="form-item form-type-select form-item-field-user-date-of-birth-und-0-value-month">
														<div class="date-month">
															<?= $form->field($model, 'dateMonth') -> dropDownList($dateMonth,['class'=>'date-clear form-select','id'=>'edit-field-user-date-of-birth-und-0-value-month'])?>
														</div>
													</div>
													<div class="form-item form-type-select form-item-field-user-date-of-birth-und-0-value-day">
														<div class="date-day">
															<?= $form->field($model,'dateDay') -> dropDownList($dateDay,['class'=>'date-clear form-select','id'=>'edit-field-user-date-of-birth-und-0-value-day'])?>
														</div>
													</div>
													<div class="form-item form-type-textfield form-item-field-user-date-of-birth-und-0-value-year">
														<div class="date-year">
															<?= $form->field($model, 'dateYear') -> textInput(['maxlength' => '128','class' => 'date-clear form-control form-text','id' => 'edit-field-user-date-of-birth-und-0-value-year',  'size' => '7'])?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									</div>
								</div>
							</div>
                            <div class="field-type-list-text field-name-field-user-document-type field-widget-options-select form-wrapper" id="edit-field-user-document-type"><div class="form-item form-type-select form-item-field-user-document-type-und">
                                <label for="edit-field-user-document-type-und">Document type </label>
                                <select id="edit-field-user-document-type-und" name="field_user_document_type[und]" class="form-select"><option value="_none">- None -</option><option value="0">Passport number</option><option value="1">Driver&#039;s license</option><option value="2">Gov issued photo ID</option></select>
                            </div>
                        </div><div class="field-type-text field-name-field-user-passport-number field-widget-text-textfield form-wrapper" id="edit-field-user-passport-number"><div id="field-user-passport-number-add-more-wrapper"><div class="form-item form-type-textfield form-item-field-user-passport-number-und-0-value">
                        
                        <?= $form->field($model, 'userPassportNumber') -> textInput(['maxlength' => '500','class' => 'text-full form-control form-text required','id' => 'edit-field-user-passport-number-und-0-value',  'size' => '60'])?>
                    </div>
                </div></div>
            <div class="field-type-country field-name-field-user-country-of-residence field-widget-options-select form-wrapper" id="edit-field-user-country-of-residence"><div class="form-item form-type-select form-item-field-user-country-of-residence-und">
                    <label for="edit-field-user-country-of-residence-und">Country of Residence </label>
					<?= Html::activeDropDownList($model, 'countryResidence',ArrayHelper::map(Country::find()->all(), 'code'/*'id'*/, 'name')) ?>
					</div>
            </div><div class="field-type-country field-name-field-user-country-of-citizenshi field-widget-options-select form-wrapper" id="edit-field-user-country-of-citizenshi"><div class="form-item form-type-select form-item-field-user-country-of-citizenshi-und">
            <label for="edit-field-user-country-of-citizenshi-und">Country of Citizenship </label>
				<?= Html::activeDropDownList($model, 'countryCitizenship',ArrayHelper::map(Country::find()->all(), 'code'/*'id'*/, 'name')) ?>
			</div>
        </div>
        <div class="field-type-text field-name-field-user-mobile-phone field-widget-text-textfield form-wrapper" id="edit-field-user-mobile-phone">
            <div id="field-user-mobile-phone-add-more-wrapper">
                <div class="form-item form-type-textfield form-item-field-user-mobile-phone-und-0-value">
                    <?= $form->field($model, 'phone') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-mobile-phone-und-0-value'))?>
                </div>
            </div>
        </div>
        <div class="field-type-text field-name-field-user-company-name field-widget-text-textfield form-wrapper" id="edit-field-user-company-name">
            <div id="field-user-company-name-add-more-wrapper">
                <div class="form-item form-type-textfield form-item-field-user-company-name-und-0-value">
                    <?= $form->field($model, 'company') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-company-name-und-0-value'))?>
                </div>
            </div></div></div></fieldset>
            
            <fieldset class="required-fields group-user-physical-address field-group-fieldset form-wrapper"><legend><span class="fieldset-legend">Physical address</span></legend><div class="fieldset-wrapper">
            <div class="field-type-text field-name-field-user-pa-address field-widget-text-textfield form-wrapper" id="edit-field-user-pa-address">
                <div id="field-user-pa-address-add-more-wrapper">
                    <div class="form-item form-type-textfield form-item-field-user-pa-address-und-0-value">
                        <?= $form->field($model, 'adress1') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-pa-address-und-0-value'))?>
                    </div>
                </div>
            </div>
            <div class="field-type-text field-name-field-user-pa-address-2nd-line field-widget-text-textfield form-wrapper" id="edit-field-user-pa-address-2nd-line">
                <div id="field-user-pa-address-2nd-line-add-more-wrapper">
                    <div class="form-item form-type-textfield form-item-field-user-pa-address-2nd-line-und-0-value">
                        <?= $form->field($model, 'adress2') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-pa-address-2nd-line-und-0-value')) ?>
                    </div>
                </div>
            </div>
            <div class="field-type-text field-name-field-user-pa-city field-widget-text-textfield form-wrapper" id="edit-field-user-pa-city">
                <div id="field-user-pa-city-add-more-wrapper">
                    <div class="form-item form-type-textfield form-item-field-user-pa-city-und-0-value">
                        <?= $form->field($model, 'city') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-pa-city-und-0-value'))?>
                    </div>
                </div>
            </div>
            <div class="field-type-text field-name-field-user-pa-state-prov-region field-widget-text-textfield form-wrapper" id="edit-field-user-pa-state-prov-region">
                <div id="field-user-pa-state-prov-region-add-more-wrapper">
                    <div class="form-item form-type-textfield form-item-field-user-pa-state-prov-region-und-0-value">
                        <?= $form->field($model, 'state') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-pa-state-prov-region-und-0-value'))?>
                    </div>
                </div>
            </div>
            <div class="field-type-text field-name-field-user-pa-zip-postal-code field-widget-text-textfield form-wrapper" id="edit-field-user-pa-zip-postal-code">
                <div id="field-user-pa-zip-postal-code-add-more-wrapper">
                    <div class="form-item form-type-textfield form-item-field-user-pa-zip-postal-code-und-0-value">
                        <?= $form->field($model, 'zipCode') ->textInput(array('size' => '60','maxlength' => '255', 'class' => 'text-full form-control form-text', 'id' => 'edit-field-user-pa-zip-postal-code-und-0-value'))?>
                    </div>
                </div>
            </div>
            <!-- add country-->
       <div class="field-type-country field-name-field-user-pa-country field-widget-options-select form-wrapper" id="edit-field-user-pa-country">
                <div class="form-item form-type-select form-item-field-user-pa-country-und">
                    <label for="edit-field-user-pa-country-und">Country </label>
					<?= Html::activeDropDownList($model, 'country',ArrayHelper::map(Country::find()->all(), 'code'/*'id'*/, 'name')) ?>
                </div>
                </div></div></fieldset>
                <fieldset class="form-wrapper" id="edit-security-fieldset"><legend><span class="fieldset-legend">Security section</span></legend><div class="fieldset-wrapper"><div class="form-item form-type-select form-item-questions-0-question">
                <label for="edit-questions-0-question">Question <span class="form-required" title="This field is required.">*</span></label>
                <select id="edit-questions-0-question" name="questions[0][question]" class="form-select required"><option value="" selected="selected">- Select -</option><option value="2">Question #1</option><option value="3">Question #2</option><option value="4">Question #3</option></select>
            </div>
            <div class="form-item form-type-textfield form-item-questions-0-answer">
                <label for="edit-questions-0-answer">Answer <span class="form-required" title="This field is required.">*</span></label>
                <input class="form-control form-text required" type="text" id="edit-questions-0-answer" name="questions[0][answer]" value="" size="60" maxlength="128" />
            </div>
			<div class="captcha">
                <div class="form-item form-type-textfield form-item-captcha-response">
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' =>"{input}</div>{image}",
                ]) ?>
			</div>
        </div></fieldset>
        <div class="form-wrapper form-wrapper" id="edit-legal"><div class="form-item form-type-checkbox form-item-legal-accept">
            <input type="checkbox" id="edit-legal-accept" name="legal_accept" value="1" class="form-checkbox required" />  <label class="option" for="edit-legal-accept">I Agree to these <a href="?r=site/legal" target="_blank">Terms &amp; Conditions</a> <span class="form-required" title="This field is required.">*</span></label>
        </div>
    </div>
    <div class="final-description">We will contact you prior to full account activation to request any additional information that might be required.</div><div class="form-actions form-wrapper" id="edit-actions">     <?= Html:: submitInput('Sign up', ['class' => 'btn btn-success form-submit', 'name' => 'op']) ?>
</div>
</div>
<?php ActiveForm::end(); ?>
</div>
</div>