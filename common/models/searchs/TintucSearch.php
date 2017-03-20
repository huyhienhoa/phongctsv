<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tintuc;

/**
 * TintucSearch represents the model behind the search form about `common\models\Tintuc`.
 */
class TintucSearch extends Tintuc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'noibat', 'luotxem', 'loaitin_id'], 'integer'],
            [['tieude', 'code', 'motangangon', 'motachitiet', 'anhminhhoa', 'ngaytao', 'ngaysua'], 'safe'],
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
        $query = Tintuc::find();

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
            'ngaytao' => $this->ngaytao,
            'ngaysua' => $this->ngaysua,
            'noibat' => $this->noibat,
            'luotxem' => $this->luotxem,
            'loaitin_id' => $this->loaitin_id,
        ]);

        $query->andFilterWhere(['like', 'tieude', $this->tieude])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'motangangon', $this->motangangon])
            ->andFilterWhere(['like', 'motachitiet', $this->motachitiet])
            ->andFilterWhere(['like', 'anhminhhoa', $this->anhminhhoa]);

        return $dataProvider;
    }
}
