<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MAsset extends AssetBundle
{
//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
//    public $css = [
//        'css/web/bootstrap.min.css',
//        'font-awesome/css/font-awesome.css',
//        'css/web/style.css?ver=20170401',
//    ];
//    public $js = [
//        "/plugins/jquery-2.1.1.js",
//        "js/web/bootstrap.min.js",
//        "js/web/common.js?ver=20170401",
//    ];
    
    
    
    public function registerAssetFiles($view) {
        
        $release_version = defined("RELEASE_VERSION")?RELEASE_VERSION:time();
        $this->css = [
            'font-awesome/css/font-awesome.css',
            'css/m/css_style.css',
            'css/m/app.css?ver='.$release_version,
            
        ];
        
        $this->js =[
            "/plugins/jquery-2.1.1.js",
            "js/m/TouchSlide.1.1.js",
            "js/web/common.js?ver=".$release_version,
            
        ];
        
        
        parent::registerAssetFiles($view);
    }
    
}
