<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170710
 * This is the ResetpwdForm model file of backend site.
 */  

/*
    Team: JUDE
    generated and coded by 李弘毅1511373 at 2017-07-10
    last coded at 2017-07-10
    这是组内成员重置密码表单模块类，
    仅带有系统生成控制器的自带功能
    事务规则有：密码不少于6位，两次输入密码一致

*/
namespace backend\models;

use yii\base\Model;
use common\models\SiteDispMembers;
use yii\helpers\VarDumper;

/**
 * Signup form
 */
class ResetpwdForm extends Model
{
    public $password;
    public $password_repeat;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        		
        	['password_repeat','compare','compareAttribute'=>'password','message'=>'两次输入的密码不一致！'],//事务规则
        ];
    }

    public function attributeLabels()
    {
    	return [
    			'password' => '密码',
    			'password_repeat'=>'再次输入密码',
    	];
    }
    
    
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function resetPassword($id)
    {
        if (!$this->validate()) {//如果不符合事务要求返回
            return null;
        }
        
        $admuser = SiteDispMembers::findOne($id);//找到成员所在元组
        $admuser->setPassword($this->password);//修改数据库的password列
        $admuser->removePasswordResetToken();//设置重设密码的token值
        
        return $admuser->save() ? true : false;//修改数据库成功返回TRUE
    }
}
