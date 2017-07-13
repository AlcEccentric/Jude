<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiteDispqryProjects;

/**
 * SiteDispqryProjectsSearch represents the model behind the search form of `common\models\SiteDispqryProjects`.
 */
class SiteDispqryProjectsSearch extends SiteDispqryProjects
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
            [['proId','proDate', 'proStatusId'], 'integer'],
            [['proName',  'proIntro', 'proPosUrl', 'memId','memName'], 'safe'],
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
        $query = SiteDispqryProjects::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize'=>5],
            'sort'=>[
                    'defaultOrder'=>[
                            'proId'=>SORT_DESC,                    
                    ],
                    //'attributes'=>['id','title'],
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
            'proId' => $this->proId,
            'proDate' => $this->proDate,
            'proStatusId' => $this->proStatusId,
        ]);

        $query->andFilterWhere(['like', 'proName', $this->proName])
            ->andFilterWhere(['like', 'proIntro', $this->proIntro])
            ->andFilterWhere(['like', 'proPosUrl', $this->proPosUrl])
            ->andFilterWhere(['like', 'memId', $this->memId]);

        $query->join('INNER JOIN','site_disp_members','site_dispqry_projects.memId = site_disp_members.id');
        $query->andFilterWhere(['like','site_disp_members.nickname',$this->memName]);
        
        $dataProvider->sort->attributes['nickname'] = 
        [
            'asc'=>['site_disp_members.nickname'=>SORT_ASC],
            'desc'=>['site_disp_members.nickname'=>SORT_DESC],
        ];


        return $dataProvider;
    }
}
