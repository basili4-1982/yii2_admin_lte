<?php
    
    namespace vendor\basili4\adminlte\assets;
    
    use yii\web\AssetBundle;
    
    class AdminAsset extends AssetBundle
    {
        public $basePath = '@webroot';
        public $baseUrl = '@web';
        public $css = [];
        public $js = [];
        public $depends = [
            'yii\web\JqueryAsset',
            'vendor\basili4\adminlte\assets\BootstrapAsset',
            'vendor\basili4\adminlte\assets\AdminLteAsset',
            'vendor\basili4\adminlte\assets\FontAwesomeAsset',
            'vendor\basili4\adminlte\assets\IonIconsAsset',
        ];
    }