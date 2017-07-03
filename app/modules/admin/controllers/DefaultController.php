<?php

namespace vendor\basili4\adminlte\controllers;

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
        return $this->render('page');
    }
    
    public function actionTest()
    {
        return $this->render('test');
    }
    
}
