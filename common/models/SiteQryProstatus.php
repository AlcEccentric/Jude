<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site_qry_prostatus".
 *
 * @property int $proStatusId
 * @property string $proStatusName
 * @property int $proStatusPos 项目状态
 *
 * @property SiteDispqryProjects[] $siteDispqryProjects
 */
class SiteQryProstatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_qry_prostatus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proStatusName', 'proStatusPos'], 'required'],
            [['proStatusPos'], 'integer'],
            [['proStatusName'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'proStatusId' => 'Pro Status ID',
            'proStatusName' => 'Pro Status Name',
            'proStatusPos' => '项目状态',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteDispqryProjects()
    {
        return $this->hasMany(SiteDispqryProjects::className(), ['proStatusId' => 'proStatusId']);
    }
}
