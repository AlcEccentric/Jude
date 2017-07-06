<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%writing}}".
 *
 * @property int $wid 自增ID
 * @property string $title
 * @property string $content
 * @property int $status
 */
class Writing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%writing}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['title', 'content'], 'string'],
            [['status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wid' => '自增ID',
            'title' => 'Title',
            'content' => 'Content',
            'status' => 'Status',
        ];
    }
}
