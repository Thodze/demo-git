<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
?>
<div class="row">
    <div class="col-sm-8">
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" poster="<?= $model->getThumbnailLink() ?>"
                   src="<?= $model->getVideoLink() ?>" controls></video>
        </div>
        <h6 class="card-title m-2"><?= $model->title ?></h6>
        <div class="d-flex justify-content-between align-items-center">
            <div><?= $model->getViews()->count() ?> views
                . <?= Yii::$app->formatter->asDate($model->created_at) ?></div>
            <div>
                <?php Pjax::begin() ?>
                <?= $this->render('_button', [
                    'model' => $model
                ]) ?>
                <?php Pjax::end() ?>
            </div>
        </div>
        <div>
            <p>
                <?= Html::a($model->createdBy->username, [
                    'channel/view', 'username' => $model->createdBy->username
                ]) ?>
            </p>
            <p><?= Html::encode($model->description) ?></p>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>