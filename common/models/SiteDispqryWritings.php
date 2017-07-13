<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170712
 * This is the SiteDispqryWritings model file of whole site.
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "site_dispqry_writings".
 *
 * @property int $wrtId
 * @property string $memId
 * @property int $wrtDate Unix时间戳
 * @property string $wrtTitle 标题
 * @property string $wrtContent 文本
 * @property int $wrtsStatusId
 *
 * @property SiteDispMembers $mem
 * @property SiteQryWritingstatus $wrtsStatus
 */
class SiteDispqryWritings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_dispqry_writings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['memId', 'wrtTitle', 'wrtContent', 'wrtsStatusId'], 'required'],
            [['wrtDate', 'wrtsStatusId'], 'integer'],
            [['wrtTitle', 'wrtContent'], 'string'],
            [['memId'], 'string', 'max' => 7],
            [['memId'], 'exist', 'skipOnError' => true, 'targetClass' => SiteDispMembers::className(), 'targetAttribute' => ['memId' => 'id']],
            [['wrtsStatusId'], 'exist', 'skipOnError' => true, 'targetClass' => SiteQryWritingstatus::className(), 'targetAttribute' => ['wrtsStatusId' => 'wrtStatusId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wrtId' => '文章编号',
            'memId' => '作者',
            'wrtDate' => '发表时间',
            'wrtTitle' => '文章标题',
            'wrtContent' => '文章内容',
            'wrtsStatusId' => '状态',
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
    public function getWrtsStatus()
    {
        return $this->hasOne(SiteQryWritingstatus::className(), ['wrtStatusId' => 'wrtsStatusId']);
    }
	public function beforeSave($insert)
    {
        if(parent::beforeSave($insert))
        {
            if($insert)
            {
                $this->wrtDate = time()+21600;                
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
                ['site-dispqry-writings/details','id'=>$this->wrtId,'title'=>$this->wrtTitle]);
    }
    

}
