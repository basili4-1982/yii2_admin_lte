<?php
    
    namespace vendor\basili4\adminlte\assets;
    
    use yii\web\AssetBundle;
    
    class ChatAsset extends AssetBundle
    {
        public $sourcePath = '@adminlte/assets/chat/';
        public $css = [
            'css/chat.css'
        ];
        public $js = [
            'js/chat.js'
        ];
        public $depends = [];
    }