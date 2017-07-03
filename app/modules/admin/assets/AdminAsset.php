<?php
    
    namespace vendor\basili4\adminlte\assets;
    
    use yii\web\AssetBundle;
    
    class AdminAsset extends AssetBundle
    {
        public $basePath = '@webroot';
        public $baseUrl = '@web';
        public $css = [
        ];
        public $js = [
        ];
        public $depends = [
            'yii\bootstrap\BootstrapAsset',
        ];
    }