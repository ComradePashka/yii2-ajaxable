<?php
namespace comradepashka\ajaxable;

use yii\web\AssetBundle;

class ToolsAsset extends AssetBundle
{
    public $sourcePath = '@comradepashka/ajaxable/assets';
    public $css = [
        'main.css'
    ];
    public $js = [
        'ajax-modal-popup.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\bootstrap\BootstrapThemeAsset',
    ];
}
