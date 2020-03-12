<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Billing;

/**
 * BillingSearch represents the model behind the search form of `app\models\Billing`.
 */
class BillingSearch extends Billing
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOP', 'TAHUN', 'VA','STATUS'], 'integer'],
            [['NOMINAL', 'EXPIRED_DATE', 'CREATED_DATE'], 'safe'],
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
        $query = Billing::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'NOP' => $this->NOP,
            'TAHUN' => $this->TAHUN,
            'VA' => $this->VA,
            'STATUS' => $this->STATUS,
            'EXPIRED_DATE' => $this->EXPIRED_DATE,
            'CREATED_DATE' => $this->CREATED_DATE,
        ]);

        $query->andFilterWhere(['like', 'NOMINAL', $this->NOMINAL]);

        return $dataProvider;
    }
}
