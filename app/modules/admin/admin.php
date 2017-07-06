<?php

namespace vendor\basili4\adminlte;

/**
 * Admin module definition class
 */
class admin extends \yii\base\Module
{
    
    protected $paths = [];
    
    public $limit = 100;
    
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
    
        /**
         * @var yii\i18n\I18N
         */
        $i18n = \Yii::$app->i18n;
        if (!is_null($i18n) && !isset($i18n->translations['adminlte'])) {
            $i18n->translations['adminlte'] = [
                'class'          => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => \Yii::$app->sourceLanguage,
                'basePath'       => '@adminlte/messages',
        
            ];
        }
        
        
//        $rules=\Yii::$app->urlManager->rules;
//
//        $rules['admin/chat/<action>'] = 'admin/chat/<action>';
        
        
        
        $this->setAliases([
            '@adminlte' => realpath(__DIR__),
            '@widgets'  => realpath(__DIR__ . "/widgets"),
        ]);
        
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
