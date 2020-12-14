<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `common\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'company_id', 'status'], 'integer'],
            [['title_ru', 'title_uz', 'title_en', 'photo', 'phone', 'price', 'rangi', 'view', 'boshqaruv_turi', 'hajmi', 'address', 'country_id', 'person', 'description_ru', 'description_uz', 'description_en', 'dostavka_ru', 'dostavka_uz', 'dostavka_en', 'payme_ru', 'payme_uz', 'payme_en', 'telegram', 'instagram', 'facebook'], 'safe'],
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
        $query = Products::find();

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
            'id' => $this->id,
            'company_id' => $this->company_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'rangi', $this->rangi])
            ->andFilterWhere(['like', 'view', $this->view])
            ->andFilterWhere(['like', 'boshqaruv_turi', $this->boshqaruv_turi])
            ->andFilterWhere(['like', 'hajmi', $this->hajmi])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'country_id', $this->country_id])
            ->andFilterWhere(['like', 'person', $this->person])
            ->andFilterWhere(['like', 'description_ru', $this->description_ru])
            ->andFilterWhere(['like', 'description_uz', $this->description_uz])
            ->andFilterWhere(['like', 'description_en', $this->description_en])
            ->andFilterWhere(['like', 'dostavka_ru', $this->dostavka_ru])
            ->andFilterWhere(['like', 'dostavka_uz', $this->dostavka_uz])
            ->andFilterWhere(['like', 'dostavka_en', $this->dostavka_en])
            ->andFilterWhere(['like', 'payme_ru', $this->payme_ru])
            ->andFilterWhere(['like', 'payme_uz', $this->payme_uz])
            ->andFilterWhere(['like', 'payme_en', $this->payme_en])
            ->andFilterWhere(['like', 'telegram', $this->telegram])
            ->andFilterWhere(['like', 'instagram', $this->instagram])
            ->andFilterWhere(['like', 'facebook', $this->facebook]);

        return $dataProvider;
    }
}
