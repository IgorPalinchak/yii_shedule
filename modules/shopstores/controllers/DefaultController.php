<?php

namespace app\modules\shopstores\controllers;

use Yii;
use yii\web\Controller;
use app\modules\shopstores\models\ShopsSearchFront;
use yii\data\ActiveDataProvider;
use app\modules\shopstores\models\Shops;

/**
 * Default controller for the `shopstores` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
//        $dataProvider = new ActiveDataProvider([
//            'query' => Shops::find(),
//            'pagination' => [
//                'pageSize' => 2,
//            ],
//        ]);
        $filtered = Yii::$app->request->queryParams;

        if (key_exists('datetime_10', $filtered) && !empty($filtered['datetime_10'])) {
            $param_day = strtolower(date("l", strtotime($filtered['datetime_10'])));
//            var_dump(11, date("H:i:s ", strtotime($filtered['datetime_10'])));
            $filtered['ShopsSearchFront'][$param_day . '_open'] = date("H:i:s ", strtotime($filtered['datetime_10']));
        } else {
            $filtered = Yii::$app->request->queryParams;
        }

        $searchModel = new ShopsSearchFront();
        $dataProvider = $searchModel->search($filtered/*Yii::$app->request->queryParams*/);

        return $this->render('index'
            ,
            [
                'searchModel' => $searchModel,
                'listDataProvider' => $dataProvider,
            ]
        );
    }

    /*
     * @param $model
     * @return string the rendering result of the widget.
     */

    public static function get_shedule($model)
    {
        $attr = $model->attributes;
        $days = [
            '1' => 'monday',
            '2' => 'tuesday',
            '3' => 'wednesday',
            '4' => 'thursday',
            '5' => 'friday',
            '6' => 'saturday',
            '7' => 'sunday',
        ];

        $work_shedule = array_splice($attr, 2);
        $days_i18 = array(1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');

        $shedule = [];
        foreach ($days as $k => $week_day) {

            if ($work_shedule[$week_day . '_open'] != null && $work_shedule[$week_day . '_close'] != null) {
                $shedule[$k] = date($days_i18[date($k)]) . ' - ' . date_format(date_create($work_shedule[$week_day . '_open']), 'H:i') .
                    ' - ' . date_format(date_create($work_shedule[$week_day . '_close']), 'H:i');
            }
        }


        return implode(', <br>', $shedule);
    }
}
