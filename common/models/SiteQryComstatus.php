<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the SiteQryComstatus model file of whole site.
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "site_qry_comstatus".
 *
 * @property int $comStatusId 评论状态id
 * @property string $comStatusName
 * @property int $comStatusPos 评论状态
 *
 * @property SiteDispqryComment[] $siteDispqryComments
 */
class SiteQryComstatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_qry_comstatus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comStatusName', 'comStatusPos'], 'required'],
            [['comStatusPos'], 'integer'],
            [['comStatusName'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comStatusId' => '评论状态id',
            'comStatusName' => 'Com Status Name',
            'comStatusPos' => '评论状态',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteDispqryComments()
    {
        return $this->hasMany(SiteDispqryComment::className(), ['comStatusId' => 'comStatusId']);
    }
}
