<?php

namespace vendor\basili4\adminlte;

/**
 * Admin module definition class
 */
class admin extends \yii\base\Module
{
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
    }
}
