<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the SiteQryNewstatus model file of whole site.
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "site_qry_newsstatus".
 *
 * @property int $newsStatusId
 * @property string $newsStatusName
 * @property int $newsStatusPos 新闻状态
 *
 * @property SiteDispqryNews[] $siteDispqryNews
 */
class SiteQryNewsstatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_qry_newsstatus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['newsStatusName', 'newsStatusPos'], 'required'],
            [['newsStatusPos'], 'integer'],
            [['newsStatusName'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'newsStatusId' => 'News Status ID',
            'newsStatusName' => 'News Status Name',
            'newsStatusPos' => '新闻状态',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteDispqryNews()
    {
        return $this->hasMany(SiteDispqryNews::className(), ['newsStatusId' => 'newsStatusId']);
    }
}
