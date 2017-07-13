<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the SiteQryWritingstatus model file of whole site.
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "site_qry_writingstatus".
 *
 * @property int $wrtStatusId
 * @property string $wrtStatusName
 * @property int $wrtStatusPos
 *
 * @property SiteDispqryWritings[] $siteDispqryWritings
 */
class SiteQryWritingstatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_qry_writingstatus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wrtStatusName', 'wrtStatusPos'], 'required'],
            [['wrtStatusPos'], 'integer'],
            [['wrtStatusName'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wrtStatusId' => 'Wrt Status ID',
            'wrtStatusName' => 'Wrt Status Name',
            'wrtStatusPos' => 'Wrt Status Pos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteDispqryWritings()
    {
        return $this->hasMany(SiteDispqryWritings::className(), ['wrtsStatusId' => 'wrtStatusId']);
    }
}
