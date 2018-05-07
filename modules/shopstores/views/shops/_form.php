<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\datetime\DateTimePicker;
use kartik\time\TimePicker;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\modules\shopstores\models\Shops */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shops-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'monday_open')
        ->widget(TimePicker::className(), ['name' => 'monday_open',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['monday_open']:''],
            'size'=>'md',
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>


    <?= $form->field($model, 'monday_close')
        ->widget(TimePicker::className(), ['name' => 'monday_close',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['monday_close']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false

        ]])?>

    <?= $form->field($model, 'tuesday_open')
        ->widget(TimePicker::className(), ['name' => 'tuesday_open',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['tuesday_open']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>

    <?= $form->field($model, 'tuesday_close')
        ->widget(TimePicker::className(), ['name' => 'tuesday_close',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['tuesday_close']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>

    <?= $form->field($model, 'wednesday_open')
        ->widget(TimePicker::className(), ['name' => 'wednesday_open',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['wednesday_open']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>

    <?= $form->field($model, 'wednesday_close')
        ->widget(TimePicker::className(), ['name' => 'wednesday_close',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['wednesday_close']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>
    <?= $form->field($model, 'thursday_open')
        ->widget(TimePicker::className(), ['name' => 'thursday_open',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['thursday_open']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>

    <?= $form->field($model, 'thursday_close')
        ->widget(TimePicker::className(), ['name' => 'thursday_close',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['thursday_close']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>
    <?= $form->field($model, 'friday_open')
        ->widget(TimePicker::className(), ['name' => 'friday_open',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['friday_open']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>

    <?= $form->field($model, 'friday_close')
        ->widget(TimePicker::className(), ['name' => 'friday_close',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['friday_close']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>

    <?= $form->field($model, 'saturday_open')
        ->widget(TimePicker::className(), ['name' => 'saturday_open',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['saturday_open']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>

    <?= $form->field($model, 'saturday_close')
        ->widget(TimePicker::className(), ['name' => 'saturday_close',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['saturday_close']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>
    <?= $form->field($model, 'sunday_open')
        ->widget(TimePicker::className(), ['name' => 'sunday_open',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['sunday_open']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>

    <?= $form->field($model, 'sunday_close')
        ->widget(TimePicker::className(), ['name' => 'sunday_close',
            'options'=>['value'=>!empty($model->oldAttributes)?$model->oldAttributes['sunday_close']:''],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian' => false,
                'minuteStep' => 1,
                'defaultTime'=>false
            ]])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
