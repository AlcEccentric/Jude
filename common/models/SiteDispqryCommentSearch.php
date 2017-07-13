<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the SiteDispqryCommentSearch model file of whole site.
 */

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiteDispqryComment;
use common\models\SiteDispMembers;
/**
 * SiteDispqryCommentSearch represents the model behind the search form of `common\models\SiteDispqryComment`.
 */
class SiteDispqryCommentSearch extends SiteDispqryComment
{
	public function attributes()
	{
		return array_merge(parent::attributes(),['authorName','ttStatus']);
	}
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comId', 'userId', 'comStatusId','comTime'], 'integer'],
            [['comContent' ,'memId','authorName','ttStatus'], 'safe'],
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
        $query = SiteDispqryComment::find();

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
            'comId' => $this->comId,
            'comStatusId' => $this->comStatusId,
            'userId' => $this->userId,
            'comTime' => $this->comTime,
        ]);

        $query->andFilterWhere(['like', 'comContent', $this->comContent])
            ->andFilterWhere(['like', 'memId', $this->memId]);
		$query->join('INNER JOIN','Site_Disp_Members','site_dispqry_comment.memId = site_disp_members.id'); 
		$query->andFilterWhere(['like','site_disp_members.nickname',$this->authorName]);
		$dataProvider->sort->attributes['authorName']=[
		'asc'=>['site_disp_members.nickname'=>SORT_ASC],
		'desc'=>['site_disp_members.nickname'=>SORT_DESC],
		];
		$query->join('INNER JOIN','Site_qry_comstatus','site_dispqry_comment.comStatusId = site_qry_comstatus.comStatusId'); 
		$query->andFilterWhere(['like','site_qry_comstatus.comStatusName',$this->ttStatus]);
		$dataProvider->sort->attributes['ttStatus']=[
		'asc'=>['site_qry_comstatus.comStatusName'=>SORT_ASC],
		'desc'=>['site_qry_comstatus.comStatusName'=>SORT_DESC],
		];
        $dataProvider->sort->defaultOrder=
		[
		'comStatusId'=>SORT_ASC,
		'comId'=>SORT_ASC,
		];

        return $dataProvider;
    }
}
