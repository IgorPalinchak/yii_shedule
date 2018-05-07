<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\shopstores\models\ShopsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shops-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'monday_open') ?>

    <?= $form->field($model, 'monday_close') ?>

    <?= $form->field($model, 'tuesday_open') ?>

    <?php // echo $form->field($model, 'tuesday_close') ?>

    <?php // echo $form->field($model, 'wednesday_open') ?>

    <?php // echo $form->field($model, 'wednesday_close') ?>

    <?php // echo $form->field($model, 'thursday_open') ?>

    <?php // echo $form->field($model, 'thursday_close') ?>

    <?php // echo $form->field($model, 'friday_open') ?>

    <?php // echo $form->field($model, 'friday_close') ?>

    <?php // echo $form->field($model, 'saturday_open') ?>

    <?php // echo $form->field($model, 'saturday_close') ?>

    <?php // echo $form->field($model, 'sunday_open') ?>

    <?php // echo $form->field($model, 'sunday_close') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
