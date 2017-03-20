<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Loaitin;


/**
 * LoaitinSearch represents the model behind the search form about `common\models\Loaitin`.
 */
class LoaitinSearch extends Loaitin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tieude', 'code', 'motangangon', 'anhminhhoa'], 'safe'],
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
        $query = Loaitin::find();

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
        ]);

        $query->andFilterWhere(['like', 'tieude', $this->tieude])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'motangangon', $this->motangangon])
            ->andFilterWhere(['like', 'anhminhhoa', $this->anhminhhoa]);

        return $dataProvider;
    }
}
