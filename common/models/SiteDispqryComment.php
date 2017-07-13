<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site_dispqry_comment".
 *
 * @property int $comId 评论编号
 * @property string $comContent 评论文本
 * @property int $comStatusId
 * @property string $memId
 * @property int $userId
 * @property int $comTime
 *
 * @property SiteQryComstatus $comStatus
 * @property SiteDispMembers $mem
 * @property User $user
 */
class SiteDispqryComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_dispqry_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comContent', 'comStatusId', 'memId', 'userId', 'comTime'], 'required'],
            [['comContent'], 'string'],
            [['comStatusId', 'userId', 'comTime'], 'integer'],
            [['memId'], 'string', 'max' => 7],
            [['comStatusId'], 'exist', 'skipOnError' => true, 'targetClass' => SiteQryComstatus::className(), 'targetAttribute' => ['comStatusId' => 'comStatusId']],
            [['memId'], 'exist', 'skipOnError' => true, 'targetClass' => SiteDispMembers::className(), 'targetAttribute' => ['memId' => 'id']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comId' => '编号',
            'comContent' => '内容',
            'comStatusId' => '状态',
            'memId' => '评论对象',
            'userId' => '评论者',
            'comTime' => '评论时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComStatus()
    {
        return $this->hasOne(SiteQryComstatus::className(), ['comStatusId' => 'comStatusId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMem()
    {
        return $this->hasOne(SiteDispMembers::className(), ['id' => 'memId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
	public function getBeginning()
	{
		$tmpStr=strip_tags($this->comContent);
		$tmpLen=mb_strlen($tmpStr);
		return mb_substr($tmpStr,0,20,'utf-8').(($tmpLen>20)?'...':'');
    }
    public function approve()
	{
		$this->comStatusId=2;//设置评论为已审核
		return ($this->save()?true:false); 
	}
}
