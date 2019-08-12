<?php
    namespace frontend\controllers;

    use yii\base\InvalidArgumentException;
    use yii\web\BadRequestHttpException;
    use yii\web\Controller;
    use yii\filters\VerbFilter;
    use yii\filters\AccessControl;

    use frontend\models\Dashboard1;

    class DashController extends Controller
    {
        public function behaviors()
        {
            return [
                'access' => [
                    'class' => AccessControl::className(),
                    'only' => ['signup'],
                    'rules' => [
                        [
                            'actions' => ['signup'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'logout' => ['post'],
                    ],
                ],
            ];
        }

        public function actionDashboard1(){
            $model = new Dashboard1();
            return $this->render('dashboard1', [
                'model' => $model,
            ]);
        }
    }
?>