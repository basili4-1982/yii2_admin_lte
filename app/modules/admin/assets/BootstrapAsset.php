<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 04.07.17
     * Time: 0:11
     */
    
    namespace vendor\basili4\adminlte\assets;
    
    namespace vendor\basili4\adminlte\assets;
    
    use yii\web\AssetBundle;
    
    class BootstrapAsset extends AssetBundle
    {
        public $sourcePath = '@adminlte/vendor/twbs/bootstrap';
    
        public $css = [
            'dist/css/bootstrap.css'
        ];
    
        public $js = [
            'dist/js/bootstrap.js',
        ];
    }