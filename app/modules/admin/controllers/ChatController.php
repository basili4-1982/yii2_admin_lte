<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 06.07.17
 * Time: 23:16
 */

namespace vendor\basili4\adminlte\controllers;


use vendor\basili4\adminlte\models\Chat;
use vendor\basili4\adminlte\models\User;
use vendor\basili4\adminlte\widgets\ItemChatWidget;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Request;

class ChatController extends Controller
{
    public function actionAdd()
    {
        if (\Yii::$app->request->isAjax) {
            $itemChat = \Yii::$app->request->post('itemChat');
            $userId = !empty($itemChat['userId']) ? $itemChat['userId'] : null;
            $text = !empty($itemChat['text']) ? $itemChat['text'] : null;
            $attaches = !empty($itemChat['attaches']) ? $itemChat['attaches'] : [];
            
            $user = new User();
            $user->username = "user" . rand(10, 20);
            $user->avatar = '/assets/c6a10c07/dist/img/user4-128x128.jpg';
            
            if (!empty($text) && !empty($user)) {
                $itemChatWidget = new ItemChatWidget($user, $text, $attaches);
                $chat = new Chat();
                $chat->add($itemChatWidget);
            }
        }
    }
    
    public function actionLoad()
    {
        
        $countMessage = \Yii::$app->request->post('countMessage');
        
        $chat = new Chat();

        return Json::encode($chat->load($countMessage));
    }
    
    public function actionTemplate($nameTemplate)
    {
    
    }
}