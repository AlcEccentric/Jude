<?php
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 10 July 2017
    This is a php document to deploy the environment of the backend site.

*/
namespace common\models;
use yii\web\IdentityInterface;
use Yii;

/**
 * This is the model class for table "site_disp_members".
 *
 * @property string $id 学号
 * @property string $nickname
 * @property int $memAge 年龄
 * @property string $memCol 学院
 * @property string $memDept 系
 * @property string $password
 * @property string $email 成员邮箱
 * @property string $auth_key 
 * @property string $password_hash 
 * @property string $password_reset_token 
 * @property string $username
 * @property SiteDispqryComment[] $siteDispqryComments
 * @property SiteDispqryNews[] $siteDispqryNews
 * @property SiteDispqryProjects[] $siteDispqryProjects
 * @property SiteDispqryWritings[] $siteDispqryWritings
 */
class SiteDispMembers extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_disp_members';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['id', 'nickname', 'auth_key','username','password', 'password_hash'], 'required'],
            [['memAge'], 'integer'],
             [['id'], 'string', 'max' => 7],
           [['nickname', 'password', 'username'], 'string', 'max' => 128],
            [['memCol', 'memDept'], 'string', 'max' => 50],
            
             [['email'], 'string', 'max' => 35],
           [['auth_key'], 'string', 'max' => 32],
           [['password_hash', 'password_reset_token'], 'string', 'max' => 255],
           [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           
          'id' => 'ID',
          'nickname' => '真名',
          'memAge' => '年龄',
          'memCol' => '学院',
          'memDept' => '系',
          'email' => 'Email',
          'auth_key' => 'Auth Key',
          'password_hash' => 'Password Hash',
          'password_reset_token' => 'Password Reset Token',
          'password' => '密码',
          'username' => '用户名',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteDispqryComments()
    {
        return $this->hasMany(SiteDispqryComment::className(), ['memId' => 'id']);
    }
	 public function getActiveComments()
    {
    	return $this->hasMany(SiteDispqryComment::className(), ['memId' => 'id'])
    	->where('comStatusId=:comStatusId',[':comStatusId'=>2]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteDispqryNews()
    {
        return $this->hasMany(SiteDispqryNews::className(), ['memId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteDispqryProjects()
    {
        return $this->hasMany(SiteDispqryProjects::className(), ['memId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteDispqryWritings()
    {
        return $this->hasMany(SiteDispqryWritings::className(), ['memId' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
	 public function getUrl()
    {
        return Yii::$app->urlManager->createUrl(
                ['site-disp-members/detail','id'=>$this->id,'title'=>$this->nickname]);
    }
	public function getCommentCount()
    {
    	return SiteDispqryComment::find()->where(['memId'=>$this->id,'comStatusId'=>2])->count();
    }
}
