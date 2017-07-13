<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the SiteDispMembers controller file of frontend site.
 */ 
namespace frontend\controllers;

use Yii;
use common\models\SiteDispMembers;
use common\models\SiteDispMembersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use common\models\SiteDispqryComment;
use yii\helpers\VarDumper;
/**
 * SiteDispMembersController implements the CRUD actions for SiteDispMembers model.
 */
class SiteDispMembersController extends Controller
{
	public $added=0; //0代表还没有新回复
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
        $model = new SiteDispMembers();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
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
	public function actionDetail($id)
	{

        $model=$this->findModel($id);
        $userMe = User::findOne(Yii::$app->user->id);
        $commentModel= new SiteDispqryComment();
        $commentModel->userId=$userMe->id;
        //step2. 当评论提交时，处理评论
        if($commentModel->load(Yii::$app->request->post()))
        {
            $commentModel->comStatusId = 1; //新评论默认状态为 pending
            $commentModel->memId = $id;
            if($commentModel->save())
            {
                $this->added=1;
            }
        }
    	//step3.传数据给视图渲染
    	
    	return $this->render('detail',[
    			'model'=>$model,
    			'commentModel'=>$commentModel, 
    			'added'=>$this->added, 			
    	]);
		
	}
}
