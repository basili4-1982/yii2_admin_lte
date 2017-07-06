<?php
use \vendor\basili4\adminlte\widgets;
$adminlteAssetsPath = \Yii::$app->getModule('admin')->assetsPathByName('adminlte');
/**
 * @var $this \yii\web\View
 */


function printItem(array $items, $level = 1)
{
    foreach ($items as $item) {
        if ($item instanceof widgets\ItemChatWidget) {
            $item->setLevel($level);
            echo $item->run();
        } elseif (is_array($item)) {
            printItem($item, $level + 1);
        }
    }
}
?>
<!-- Chat box -->
<div class="box box-success">
    <div class="box-header">
        <i class="fa fa-comments-o"></i>
        
        <h3 class="box-title"><?= $title ?></h3>
    </div>
    <div class="box-body chat" id="chat-box">
        <?php
            printItem($items);
        ?>
    </div>
    <!-- /.chat -->
    <div class="box-footer">
        <div class="input-group">
            <input class="form-control" id="message" placeholder=" <?= Yii::t('adminlte','Type message') ?>...">
            
            <div class="input-group-btn">
                <button type="button" id="addMessage" class="btn btn-success"><i class="fa fa-plus"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- /.box (chat box) -->