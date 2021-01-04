<?php
    use yii\helpers\StringHelper;
    use yii\helpers\Url;
?>
<div class="media">
    <a href="<?= Url::to(['/video/update', 'id' => $model->video_id]) ?>">
        <div class="embed-responsive embed-responsive-16by9 mb-3" style="width: 120px">
            <video class="embed-responsive-item" poster="<?= $model->getThumbnailLink() ?>"
                   src="<?= $model->getVideoLink() ?>"></video>
        </div>
    </a>
    <div class="media-body">
        <a href="<?= Url::to(['/video/update', 'id' => $model->video_id]) ?>">
            <h6 class="mt-0"><?= $model->title ?>></h6>
        </a>
        <?= StringHelper::truncateWords($model->description, 10) ?>
    </div>
</div>