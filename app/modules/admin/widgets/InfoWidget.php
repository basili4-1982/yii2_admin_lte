<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 04.07.17
     * Time: 21:20
     */
    namespace vendor\basili4\adminlte\widgets;
    
    use yii\base\Widget;
    
    class InfoWidget extends Widget
    {
    
        const GRAY = 'gray';
        const GRAY_LIGHT = 'gray-light';
        const BLACK = 'black';
        const RED = 'red';
        const YELLOW = 'yellow';
        const AQUA = 'aqua';
        const BLUE = 'blue';
        const LIGHT_BLUE = 'light-blue';
        const GREEN = 'green';
        const NAVY = 'navy';
        const TEAL = 'teal';
        const OLIVE = 'olive';
        const LIME = 'lime';
        const ORANGE = 'orange';
        const FUCHSIA = 'fuchsia';
        const PURPLE = 'purple';
        const MAROON = 'maroon';
        const GRAY_ACTIVE = 'gray-active';
        const BLACK_ACTIVE = 'black-active';
        const RED_ACTIVE = 'red-active';
        const YELLOW_ACTIVE = 'yellow-active';
        const AQUA_ACTIVE = 'aqua-active';
        const BLUE_ACTIVE = 'blue-active';
        const LIGHT_BLUE_ACTIVE = 'light-blue-active';
        const GREEN_ACTIVE = 'green-active';
        const NAVY_ACTIVE = 'navy-active';
        const TEAL_ACTIVE = 'teal-active';
        const OLIVE_ACTIVE = 'olive-active';
        const LIME_ACTIVE = 'lime-active';
        const ORANGE_ACTIVE = 'orange-active';
        const FUCHSIA_ACTIVE = 'fuchsia-active';
        const PURPLE_ACTIVE = 'purple-active';
        const MAROON_ACTIVE = 'maroon-active';
        
        public $background=self::AQUA;
        public $title=null;
        public $text=null;
        public $ionIcon='ion-bag';
        public $moreLink='#';
        public $moreText='More info';
        public $container = 'col-lg-3 col-xs-6';
        
        public function run()
        {
            $reflect = new \ReflectionClass(self::class);
            $constants = $reflect->getConstants();
    
            if (!in_array($this->background, $constants)) {
                $this->background = self::AQUA;
            }
            
            return $this->render('info',
                [
                    'background' => $this->background,
                    'title'      => $this->title,
                    'text'      => $this->text,
                    'icon'       => $this->ionIcon,
                    'moreLink'       => $this->moreLink,
                    'moreText'       => $this->moreText,
                    'container'       => $this->container,
                ]
            );
        }
        
    }