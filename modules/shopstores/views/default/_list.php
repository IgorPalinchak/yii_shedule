<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<?php// dd($model) ?>

<div class="news-item">

    <?= HtmlPurifier::process($model->name) ?>

    <?= HtmlPurifier::process($model->monday_open) ?>
</div>