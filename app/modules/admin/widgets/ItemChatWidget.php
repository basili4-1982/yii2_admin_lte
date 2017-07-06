<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 05.07.17
     * Time: 22:52
     */
    
    namespace vendor\basili4\adminlte\widgets;
    
    use vendor\basili4\adminlte\models\User;
    use yii\base\Widget;
    

    class ItemChatWidget extends Widget
    {
        protected $attr=[];
        
        public function __construct( User $user, $text, $attaches=[])
        {
            $this->attr['userName'] = $user->username;
            $this->attr['avatar'] = $user->avatar;
            $this->attr['text'] = $text;
            $this->attr['attaches'] = $attaches;
            $this->attr['time'] = time();
            $this->attr['level'] = 1;
            $this->attr['userStatus'] = $user->status;
        }
        
        public function setLevel($level)
        {
            $this->attr['level'] = $level;
        }
        
        public function run()
        {
            return $this->render('itemchat', $this->attr);
        }
    }