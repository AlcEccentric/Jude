<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiteDispqryNews;

/**
 * SiteDispqryNewsSearch represents the model behind the search form of `common\models\SiteDispqryNews`.
 */
class SiteDispqryNewsSearch extends SiteDispqryNews
{
    public function attributes()
    {
        return array_merge(parent::attributes(),['memName']);
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['newsId','newsDate', 'newsStatusId'], 'integer'],
            [['newsTitle', 'newsContent', 'memId','memName'], 'safe'],
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
        $query = SiteDispqryNews::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize'=>5],
            'sort'=>[
                    'defaultOrder'=>[
                            'newsId'=>SORT_ASC,                    
                    ],
            'attributes'=>['newsId','newsDate','newsTitle'],
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
            'newsId' => $this->newsId,
            'newsStatusId' => $this->newsStatusId,
        ]);

        $query->andFilterWhere(['like', 'newsTitle', $this->newsTitle])
            ->andFilterWhere(['like', 'newsContent', $this->newsContent])
            ->andFilterWhere(['like', 'memId', $this->memId]);

        $query->join('INNER JOIN','site_disp_members','site_dispqry_news.memId = site_disp_members.id');
        $query->andFilterWhere(['like','site_disp_members.nickname',$this->memName]);
        
        $dataProvider->sort->attributes['nickname'] = 
        [
            'asc'=>['site_disp_members.nickname'=>SORT_ASC],
            'desc'=>['site_disp_members.nickname'=>SORT_DESC],
        ];

        return $dataProvider;
    }
    public function mysearch($params)
    {
        $query = SiteDispqryNews::find();

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
            'newsStatusId' => 2,
        ]);


        return $dataProvider;
    
    }


    
}
