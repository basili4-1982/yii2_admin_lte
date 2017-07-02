<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;

/**
 *
 * Команда публикации приложения на github.com
 *
 */
class DeployController extends Controller
{
    public function actionIndex()
    {
        exec('git checkout master');
        exec('git merge develop');
        exec('git merge push');
        exec('git merge push');
    }
}
