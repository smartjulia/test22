<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
		
		
		   'css/bank/sites/all/themes/ebanq/css/bootstrap.min.css',
        'css/bank/modules/system/system.base.css',
        'css/bank/sites/all/modules/contributed/jquery_update/replace/ui/themes/base/minified/jquery.ui.core.min.css',
        'css/bank/sites/all/modules/contributed/jquery_update/replace/ui/themes/base/minified/jquery.ui.theme.min.css',
        'css/bank/sites/all/modules/contributed/date/date_api/date.css',
        'css/bank/sites/all/modules/contributed/date/date_popup/themes/datepicker.1.7.css',
        'css/bank/modules/field/theme/field.css',
        'css/bank/modules/node/node.css',
        'css/bank/modules/search/search.css',
        'css/bank/modules/user/user.css',
        'css/bank/sites/all/modules/contributed/views/css/views.css',
        'css/bank/sites/all/modules/ckeditor/css/ckeditor.css',
        'css/bank/sites/all/modules/contributed/ctools/css/ctools.css',
        'css/bank/sites/all/modules/custom/ebanq_custom/css/ebanq_custom_select.css',
        'css/bank/sites/all/libraries/jquery.ui.selectmenu/jquery.ui.selectmenu.css',
        'css/bank/sites/all/modules/contributed/field_group/field_group.field_ui.css',
        'css/bank/sites/all/modules/contributed/field_group/field_group.css',
        'css/bank/sites/all/themes/ebanq/css/fonts.css',
        'css/bank/sites/all/themes/ebanq/css/styles.css',
        'css/bank/sites/all/themes/ebanq/css/bootstrap.min.css',
        'css/bank/sites/all/themes/ebanq/css/normalize.css',
        'css/bank/custom.css'
     
		
		
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
