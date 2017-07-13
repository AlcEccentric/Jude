<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170712
 * This is the SiteDispqryWritingsSearch model file of whole site.
 */
namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiteDispqryWritings;
use common\models\SiteDispMembers;
/**
 * SiteDispqryWritingsSearch represents the model behind the search form of `common\models\SiteDispqryWritings`.
 */
class SiteDispqryWritingsSearch extends SiteDispqryWritings
{
	public function attributes()
	{
		return array_merge(parent::attributes(),['authorName']);
	}
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wrtId', 'wrtDate', 'wrtsStatusId'], 'integer'],
            [['memId', 'wrtTitle', 'wrtContent'], 'safe'],
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
        $query = SiteDispqryWritings::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'pagination'=>['pageSize'=>6],//一页放6条数据
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'wrtId' => $this->wrtId,
            'wrtDate' => $this->wrtDate,
            'wrtsStatusId' => $this->wrtsStatusId,
        ]);

        $query->andFilterWhere(['like', 'memId', $this->memId])
            ->andFilterWhere(['like', 'wrtTitle', $this->wrtTitle])
            ->andFilterWhere(['like', 'wrtContent', $this->wrtContent]);
        
		$query->join('INNER JOIN','Site_Disp_Members','site_dispqry_writings.memId = site_disp_members.id'); 
		$query->andFilterWhere(['like','site_disp_members.nickname',$this->authorName]);
		$dataProvider->sort->attributes['authorName']=[
		'asc'=>['site_disp_members.nickname'=>SORT_ASC],
		'desc'=>['site_disp_members.nickname'=>SORT_DESC],
		];
        return $dataProvider;
    }
}
