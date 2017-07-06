<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 04.07.17
     * Time: 21:20
     */
    namespace vendor\basili4\adminlte\widgets;
    
    use yii\base\Widget;
    
    class ChatWidget extends Widget
    {
        public $title;
        
        public $items=[];
        
        
        public function run()
        {
    
            if (is_null($this->title)) {
                $this->title = \Yii::t('adminlte','Chat');
            }
            
            
            return $this->render('chat',[
                'title' => $this->title,
                'items'  => $this->items,
            ]);
        }
    }
    