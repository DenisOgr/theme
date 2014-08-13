<?php
namespace denisogr\theme;

use yii\web\AssetBundle;


class AppAssets extends AssetBundle
{
    public $sourcePath = '@vendors/denisogr/theme/assets';
    public $css = [
        'css/main.css'
    ];
    public $js = [
        'js/main.js'
    ];
    /*
    public $depends = [
        'yii\bootstrap\BootstrapAsset'
    ];*/
}