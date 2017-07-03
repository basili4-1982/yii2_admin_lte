<?php
    
    namespace vendor\basili4\adminlte\assets;
    
    use yii\web\AssetBundle;
    
    class IonIconsAsset extends AssetBundle
    {
        public $sourcePath = '@adminlte/vendor/driftyco/ionicons';
        public $css=[
            'css/ionicons.css',
        ];
        public $depends = [];
    }