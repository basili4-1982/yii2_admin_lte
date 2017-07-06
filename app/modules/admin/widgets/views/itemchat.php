<!-- chat item -->
<?php
$marignLeft = (50 * ($level - 1));
?>
<div class="item" style="margin-left: <?= $marignLeft == 0 ? 10 : $marignLeft; ?>px">
    <img src="<?= $avatar ?>" alt="<?= $userName ?>" class="<?= $userStatus ?>">
    <p class="message">
        <a href="#" class="name">
            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?= date('H:i',$time) ?></small>
            <?= $userName ?>
        </a>
        <?= $text ?>
    </p>
    <?php if (!empty($attaches)): ?>
        <div class="attachment">
            <h4><?= Yii::t('adminlte','Attachments'); ?>:</h4>
            <?php foreach ($attaches as $attach): ?>
            <p class="filename">
                <?= $attach;  ?>
            </p>
            <?php endforeach; ?>
            <div class="pull-right">
                <button type="button" class="btn btn-primary btn-sm btn-flat"><?= Yii::t('adminlte','Open'); ?></button>
            </div>
        </div>
    <?php endif; ?>
    
    <!-- /.attachment -->
</div>
<!-- /.item -->