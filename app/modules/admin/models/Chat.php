<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 06.07.17
 * Time: 23:26
 */

namespace vendor\basili4\adminlte\models;


use vendor\basili4\adminlte\widgets\ItemChatWidget;
use yii\helpers\Json;
use yii\web\Session;

class Chat
{
    
    protected $chatDataFile='chat.txt';
    
    public function add(ItemChatWidget $item)
    {
        $pathRuntime=\Yii::getAlias('@runtime').DIRECTORY_SEPARATOR.$this->chatDataFile;
        if (file_exists($pathRuntime)) {
            $data = unserialize(file_get_contents($pathRuntime));
        }else{
            $data=[];
        }
        
        $data[]= $item;
        file_put_contents($pathRuntime,serialize($data));
    }
    
    public function load($offset = 0)
    {
        $pathRuntime = \Yii::getAlias('@runtime') . DIRECTORY_SEPARATOR . $this->chatDataFile;
        if (file_exists($pathRuntime)) {
    
            $dataRow = file_get_contents($pathRuntime);
            $data = unserialize($dataRow);
        } else {
            $data = [];
        }
    
        $lastIndex = (count($data));
    
        $data = array_slice($data, $offset);
    
        
        $data = array_slice($data, \Yii::$app->getModule('admin')->limit * -1);
        
        $responseData=[];
        
        foreach ($data as $index => $it) {
            $responseData[] = $it->run();
        }
        
        return [
            'data'  => $responseData,
            'countMessage' => $lastIndex,
            'offset'=>$offset,
        
            'all'=>count($data)
        ];
        
    }
}