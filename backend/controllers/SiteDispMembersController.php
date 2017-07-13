<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170709
 * This is the SiteDispMembers controller file of backend site.
 */   

/*   
    最后修改于 20170710
    这是后台组内成员管理控制器，
    除了系统生成控制器的自带功能
    在7月10号增加了重置密码的控制函数

*/
namespace backend\controllers;

use Yii;
use common\models\SiteDispMembers;
use common\models\SiteDispMembersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\SignupForm;
use backend\models\ResetpwdForm;

/**
 * SiteDispMembersController implements the CRUD actions for SiteDispMembers model.
 */
class SiteDispMembersController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all SiteDispMembers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SiteDispMembersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SiteDispMembers model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SiteDispMembers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) ) {
            if($user = $model->signup())
           {
            return $this->redirect(['view', 'id' => $model->id]);
            }
        } 
            return $this->render('create', [
                'model' => $model,
            ]);
        
    }

    /**
     * Updates an existing SiteDispMembers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SiteDispMembers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SiteDispMembers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return SiteDispMembers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SiteDispMembers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionResetpwd($id)//重置密码函数
    {
        $model = new ResetpwdForm();//新建了一个重置密码Form模型，由后者将视图中AF获得的数据写入数据库，参考了前台的重置密码代码
    
        if ($model->load(Yii::$app->request->post())) {
            
            if($model->resetPassword($id))//没有出错则渲染首页
            {
                return $this->redirect(['index']);
            }
        }
         
        return $this->render('resetpwd', [//出错则根据model已有内容渲染重置密码界面，
                'model' => $model,
        ]);
    
    }
}
