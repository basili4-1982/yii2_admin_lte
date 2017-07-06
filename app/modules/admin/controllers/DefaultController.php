<?php

namespace vendor\basili4\adminlte\controllers;

use vendor\basili4\adminlte\models\Chat;
use vendor\basili4\adminlte\models\User;
use vendor\basili4\adminlte\widgets\ItemChatWidget;
use yii\web\Controller;

/**
 * Default controller for the `Admin` module
 */
class DefaultController extends Controller
{
    public $layout='main';
    
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionPage()
    {
        $chat = new Chat();
        $items = $chat->load(10);
        
        return $this->render('page',['items'=>$items]);
    }
    
    public function actionTest()
    {
        return $this->render('test');
    }
    
    public function actionAdd()
    {
        for ($i = 0; $i < rand(1, 10); $i++) {
            $user = new User();
            $user->username = 'Mike Doe';
            $user->avatar = '/assets/c6a10c07/dist/img/user4-128x128.jpg';
            $user->status = rand(1, 3) == 1 ? User::ST_ONLINE : User::ST_OFFLINE;
            $text = 'I would like to meet you to discuss the latest news about the arrival of the new theme. They say it is going to be one the best themes on the market';
            $itemChatWidget = new ItemChatWidget($user, $text, []);
            $chat = new Chat();
            $chat->add($itemChatWidget);
        }
    }
}
