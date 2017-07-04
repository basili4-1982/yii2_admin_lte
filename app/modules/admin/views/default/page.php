<?php
    /**
     * Created by PhpStorm.
     * User: basili4
     * Date: 03.07.17
     * Time: 21:20
     */
    
    use \vendor\basili4\adminlte\widgets;
    
    /**
     * @var $this \yii\web\View
     */
?>
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <?= widgets\InfoWidget::widget([
            'background'=>'green',
            'title' => '150',
            'text' => 'New Orders',
            'moreText' => 'На фыавфыва',
            'moreLink' => '/sadas',
            'container'=>'col-lg-2 col-xs-4'
        ]) ?>
        
        <?= widgets\InfoWidget::widget([
            'background'=>'yellow',
            'title' => '150',
            'text' => 'New Orders',
            'ionIcon'=>'ion-android-folder-open'
        ]) ?>
        <?= widgets\InfoWidget::widget([
            'background'=>'red',
            'title' => '1802',
            'text' => 'New Orders',
        ]) ?>
        <?= widgets\InfoWidget::widget([
            'background'=>'black',
            'title' => '1823',
            'text' => 'New Orders',
        ]) ?>
        <?= widgets\InfoWidget::widget([
            'background'=>'purple',
            'title' => '44444',
            'text' => 'New Orders',
        ]) ?>
    </div>
    <!-- /.row -->
    <!-- Main row -->
</section>
