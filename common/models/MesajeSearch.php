<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mesaje;

/**
 * MesajeSearch represents the model behind the search form about `common\models\Mesaje`.
 */
class MesajeSearch extends Mesaje
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nume', 'email', 'mesaj', 'data', 'Validat'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Mesaje::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => array('pageSize' => 10),
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        if (Yii::$app->user->isGuest) {
            $query->andFilterWhere([
            'id' => $this->id,
            'data' => $this->data,
            'Validat'=> 'Da',
        ]);
            } else {
            $query->andFilterWhere([
            'id' => $this->id,
            'data' => $this->data, ]);
            }

        $query->andFilterWhere(['like', 'nume', $this->nume])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'mesaj', $this->mesaj])
            ->andFilterWhere(['like', 'Validat', $this->Validat]);

        return $dataProvider;
    }
}
