<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the SiteDispqryProjects model file of whole site.
 */
namespace common\models;
use yii\helpers\VarDumper;
use Yii;

/**
 * This is the model class for table "site_dispqry_projects".
 *
 * @property int $proId
 * @property string $proName 项目名
 * @property int $proDate 项目日期
 * @property string $proIntro 项目介绍
 * @property string $proPosUrl 项目图片的链接
 * @property int $proStatusId
 * @property string $memId
 *
 * @property SiteDispMembers $mem
 * @property SiteQryProstatus $proStatus
 */
class SiteDispqryProjects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_dispqry_projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proName', 'proIntro', 'proStatusId'], 'required'],
            [['proDate', 'proStatusId'], 'integer'],
            [['proIntro'], 'string'],
            [['proStatusId','proDate'], 'integer'],
            [['proName'], 'string', 'max' => 100],
            [['proPosUrl'], 'string', 'max' => 50],
            [['memId'], 'string', 'max' => 7],
            [['memId'], 'exist', 'skipOnError' => true, 'targetClass' => SiteDispMembers::className(), 'targetAttribute' => ['memId' => 'id']],
            [['proStatusId'], 'exist', 'skipOnError' => true, 'targetClass' => SiteQryProstatus::className(), 'targetAttribute' => ['proStatusId' => 'proStatusId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'proId' => '项目ID',
            'proName' => '项目名',
            'proDate' => '项目日期',
            'proIntro' => '项目介绍',
            'proPosUrl' => '项目图片的链接',
            'proStatusId' => '项目发布状态 ',
            'memId' => '完成者',
        ];
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
    public function getProStatus()
    {
        return $this->hasOne(SiteQryProstatus::className(), ['proStatusId' => 'proStatusId']);
    }

//自动生成时间
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert))
        {
            if($insert)
            {
                $this->proDate = time()+21600; 
                
            }
            
            
            return true;
                
        }
        else 
        {
            return false;
        }
    }
	 public function getUrl()
    {
        return Yii::$app->urlManager->createUrl(
                ['site-dispqry-projects/details','id'=>$this->proId,'title'=>$this->proName]);
    }
    
    public function getBeginning($length=288)
    {
        $tmpStr = strip_tags($this->proIntro);
        $tmpLen = mb_strlen($tmpStr);
         
        $tmpStr = mb_substr($tmpStr,0,$length,'utf-8');
        return $tmpStr.($tmpLen>$length?'...':'');
    }
    
}
