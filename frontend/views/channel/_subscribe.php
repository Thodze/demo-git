<?php

use yii\helpers\Url;

?>
<a class="btn <?= $channel->isSubscriber(Yii::$app->user->id) ? 'btn-secondary' : 'btn-danger' ?> btn-lg"
   href="<?= Url::to(['channel/subscribe', 'username' => $channel->username]) ?>"
   data-method="post" data-pjax="1">
    Subscribe <i class="far fa-bell"></i>
</a> <?= $channel->getSubscribers()->count() ?>