<?php
    
    namespace vendor\basili4\adminlte\assets;
    
    use yii\web\AssetBundle;
    
    class AdminLteAsset extends AssetBundle
    {
        public $sourcePath = '@adminlte/vendor/almasaeed2010/adminlte';
        public $css=[
            'dist/css/AdminLTE.css',
            'dist/css/skins/_all-skins.css',
            'plugins/iCheck/flat/blue.css',
            'plugins/morris/morris.css',
            'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
            'plugins/datepicker/datepicker3.css',
            'plugins/daterangepicker/daterangepicker.css',
            'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css',
        ];
    
        public $js = [
            "https://code.jquery.com/ui/1.11.4/jquery-ui.min.js",
            "https://code.jquery.com/ui/1.11.4/jquery-ui.min.js",
//            "plugins/morris/morris.js",
            "plugins/sparkline/jquery.sparkline.js",
            "plugins/jvectormap/jquery-jvectormap-1.2.2.min.js",
            "plugins/jvectormap/jquery-jvectormap-world-mill-en.js",
            "plugins/knob/jquery.knob.js",
            "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js",
            "plugins/daterangepicker/daterangepicker.js",
            "plugins/datepicker/bootstrap-datepicker.js",
            "plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js",
            "plugins/slimScroll/jquery.slimscroll.js",
            "plugins/fastclick/fastclick.js",
            "dist/js/app.js",
//            "dist/js/pages/dashboard.js",
            "dist/js/demo.js"
        ];
        public $depends = [];
    }