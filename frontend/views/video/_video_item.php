<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
?>
<div class="card m-3" style="width: 18rem;">
    <a href="<?= Url::to(['/video/view', 'id' => $model->video_id]) ?>">
    <div class="embed-responsive embed-responsive-16by9">
        <video class="embed-responsive-item" poster="<?= $model->getThumbnailLink() ?>"
               src="<?= $model->getVideoLink() ?>"></video>
    </div>
    </a>
    <div class="card-body p-2">
        <h6 class="card-title m-0"><?= $model->title ?></h6>
        <p class="text-muted card-text m-0">
            <?= Html::a($model->createdBy->username, [
                'channel/view', 'username' => $model->createdBy->username
            ], ['class' => 'text-dark']) ?>
        </p>
        <p class="text-muted card-text m-0">
            <?= $model->getViews()->count() ?> views . <?= Yii::$app->formatter->asRelativeTime($model->created_at) ?>
        </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>