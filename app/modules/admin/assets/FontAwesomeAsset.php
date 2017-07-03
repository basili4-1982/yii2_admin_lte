<?php
    
    namespace vendor\basili4\adminlte\assets;
    
    use yii\web\AssetBundle;
    
    class FontAwesomeAsset extends AssetBundle
    {
        public $sourcePath = '@adminlte/vendor/components/font-awesome';
        public $css=[
            'css/font-awesome.css',
        ];
        public $depends = [];
    }