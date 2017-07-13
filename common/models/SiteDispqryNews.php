<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the SiteDispqryNews model file of whole site.
 */
namespace common\models;
use yii\helpers\VarDumper;

use Yii;

/**
 * This is the model class for table "site_dispqry_news".
 *
 * @property int $newsId
 * @property string $newsTitle
 * @property string $newsContent
 * @property int $newsStatusId
 * @property string $memId
 *
 * @property SiteDispMembers $mem
 * @property SiteQryNewsstatus $newsStatus
 */
class SiteDispqryNews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_dispqry_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['newsTitle', 'newsContent', 'newsStatusId', 'memId'], 'required'],
            [['newsTitle', 'newsContent'], 'string'],
            [['newsStatusId','newsDate'], 'integer'],
            [['memId'], 'string', 'max' => 7],
             [['memId'], 'exist', 'skipOnError' => true, 'targetClass' => SiteDispMembers::className(), 'targetAttribute' => ['memId' => 'id']],
            [['newsStatusId'], 'exist', 'skipOnError' => true, 'targetClass' => SiteQryNewsstatus::className(), 'targetAttribute' => ['newsStatusId' => 'newsStatusId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'newsId' => '新闻编号',
            'newsTitle' => '新闻标题',
            'newsContent' => '新闻内容',
            'newsStatusId' => '新闻发布状态',
            'memId' => '发布人',
            'newsDate' => '发布时间',
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
    public function getNewsStatus()
    {
        return $this->hasOne(SiteQryNewsstatus::className(), ['newsStatusId' => 'newsStatusId']);
    }


    //自动生成时间
    public function beforeSave($insert)
    {
        
        if(parent::beforeSave($insert))
        {
            if($insert)
            {
                

                $this->newsDate = time()+21600;                
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
                ['site-dispqry-news/details','id'=>$this->newsId,'title'=>$this->newsTitle]);
    }

    public function getBeginning($length=288)
    {
        $tmpStr = strip_tags($this->newsContent);
        $tmpLen = mb_strlen($tmpStr);
         
        $tmpStr = mb_substr($tmpStr,0,$length,'utf-8');
        return $tmpStr.($tmpLen>$length?'...':'');
    }
}


