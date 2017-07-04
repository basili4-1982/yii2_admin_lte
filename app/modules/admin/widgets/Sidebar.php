<?php
namespace admin\widgets\Sidebar;
use yii\jui\InputWidget;

class Sidebar extends InputWidget
{
    public function run()
    {
        return $this->render('nav');
    }
}