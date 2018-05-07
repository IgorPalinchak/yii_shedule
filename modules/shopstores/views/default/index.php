<?php


//use yii\widgets\ListView;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use app\modules\shopstores\controllers\DefaultController;
use kartik\datetime\DateTimePicker;

//dd($listDataProvider);

//echo '<label>Filter By Work Date/Time </label>';
//echo DateTimePicker::widget([
//    'name' => 'datetime_10',
//    'options' => ['placeholder' => 'Select operating time ...'],
//    'convertFormat' => true,
//    'pluginOptions' => [
//        'format' => 'd-M-Y g:i A',
//        'startDate' => '01-Mar-2014 12:00 AM',
//        'todayHighlight' => true
//    ]
//]);
$queryParams  =Yii::$app->request->queryParams;
//dd($queryParams);
 echo GridView::widget([
    'dataProvider' => $listDataProvider,
     'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'name:ntext',
       ['attribute' => 'График работы (Filter By Work Date/Time)',
            'format' => 'raw',
            'value' => function($model) {return DefaultController::get_shedule($model);},
           'filter' =>DateTimePicker::widget([
               'name' => 'datetime_10',
//               'options'=>['value'=>!empty($queryParams) && key_exists('datetime_10', $queryParams)
//                   ?$queryParams['datetime_10']:''],

//               'options' => ['placeholder' => 'Select operating time ...'],
               'convertFormat' => true,
               'pluginOptions' => [
                   'format' => 'dd-M-yyyy hh:i:s P',
//                   'startDate' => '',
                   'todayHighlight' => true
               ]
           ])
       ]

    ],
]);



//echo ListView::widget([
//    'dataProvider' => $listDataProvider,
//    'itemView' => '_list',
//
//    'options' => [
//        'tag' => 'div',
//        'class' => 'news-list',
//        'id' => 'news-list',
//    ],
//
//
//    'summary' => 'Показано {count} из {totalCount}',
//    'summaryOptions' => [
//        'tag' => 'span',
//        'class' => 'my-summary'
//    ],
//
//    'itemOptions' => [
//        'tag' => 'div',
//        'class' => 'news-item',
//    ],
//
//    'emptyText' => '<p>Список пуст</p>',
//    'emptyTextOptions' => [
//        'tag' => 'p'
//    ],
//
//
//]);

//?>
<?php //$form = ActiveForm::begin(); ?>
<!---->
<?php //$form->field($model, 'datetime_1')->widget(DateTimePicker::classname(), [
//    'options' => ['placeholder' => 'Enter event time ...'],
//    'pluginOptions' => [
//        'autoclose' => true
//    ]
//]); ?>
<!---->
<?php //ActiveForm::end(); ?>
