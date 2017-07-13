<?php
namespace backend\models;

use yii\base\Model;
use common\models\SiteDispMembers;
use yii\helpers\VarDumper;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $nickname;
    public $email;
    public $id;
    public $password;
    public $password_repeat;
    public $memAge;
    public $memCol;
    public $memDept;


   


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\SiteDispMembers', 'message' => '组员用户名已存在'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\SiteDispMembers', 'message' => '该邮箱已存在'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['password_repeat','compare','compareAttribute'=>'password','message'=>'两次输入的密码不一致！'],
                
            ['nickname','required'],
            ['nickname','string','max'=>128],
            ['id','required'],
            ['id','string','max'=>7],
                
            [['memCol', 'memDept'], 'string', 'max' => 50],
            [['memAge'], 'integer'],
            
        ];
    }
     /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           
          'id' => '学号',
          'nickname' => '真名',
          'memAge' => '年龄',
          'memCol' => '学院',
          'memDept' => '系',
          'email' => 'Email',
          'password' => '密码',
          'password_repeat' => '再次输入密码',
          'username' => '用户名',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new SiteDispMembers();
        $user->username = $this->username;
        $user->id = $this->id;
        $user->email = $this->email;
        $user->nickname = $this->nickname;
        $user->memAge = $this->memAge; 
        $user->memCol = $this->memCol; 
        $user->memDept = $this->memDept; 
        $user->password = '*'; 

        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
