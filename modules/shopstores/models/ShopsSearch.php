<?php

namespace app\modules\shopstores\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\shopstores\models\Shops;

/**
 * ShopsSearch represents the model behind the search form of `app\modules\shopstores\models\Shops`.
 */
class ShopsSearch extends Shops
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'monday_open', 'monday_close', 'tuesday_open', 'tuesday_close', 'wednesday_open', 'wednesday_close', 'thursday_open', 'thursday_close', 'friday_open', 'friday_close', 'saturday_open', 'saturday_close', 'sunday_open', 'sunday_close'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {

        $query = Shops::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 2,
            ],
        ]);


        $this->load($params);


        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'monday_open' => $this->monday_open,
            'monday_close' => $this->monday_close,
            'tuesday_open' => $this->tuesday_open,
            'tuesday_close' => $this->tuesday_close,
            'wednesday_open' => $this->wednesday_open,
            'wednesday_close' => $this->wednesday_close,
            'thursday_open' => $this->thursday_open,
            'thursday_close' => $this->thursday_close,
            'friday_open' => $this->friday_open,
            'friday_close' => $this->friday_close,
            'saturday_open' => $this->saturday_open,
            'saturday_close' => $this->saturday_close,
            'sunday_open' => $this->sunday_open,
            'sunday_close' => $this->sunday_close,
        ]);
//        $query->andFilterWhere(['<=', 'monday_open', $this->monday_open]);
        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
