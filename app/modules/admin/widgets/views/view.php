<div class="<?= $container ?>">
    <!-- small box -->
    <div class="small-box bg-<?= $background ?>">
        <div class="inner">
            <h3 <?= empty($title) ? 'style="min-height: 41px"' : null; ?>><?= $title ?></h3>
            <p <?= empty($text) ? 'style="min-height: 21px"' : null; ?> ><?= $text ?></p>
        </div>
        <div class="icon">
            <i class="ion <?= $icon ?>"></i>
        </div>
        <a href="<?= $moreLink ?>" class="small-box-footer"><?= $moreText ?><i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->