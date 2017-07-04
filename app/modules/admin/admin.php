<?php

namespace vendor\basili4\adminlte;

/**
 * Admin module definition class
 */
class admin extends \yii\base\Module
{
    
    protected $paths=[];
    
    
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'vendor\basili4\adminlte\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    
        \Yii::setAlias('@adminlte', realpath(__DIR__));
        // custom initialization code goes here
        
        $this->paths['adminlte']='@adminlte/vendor/almasaeed2010/adminlte';
    }
    
    public function assetsPathByName($name)
    {
        $path = '';
        if (isset($this->paths[ $name ])) {
            $publishedPath = \Yii::$app->assetManager->publish($this->paths[ $name ]);
            $path = $publishedPath[1];
        }
    
        return $path;
    }
}
