<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [

                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['admin'],

                    ],
                    // [
                    //     'class' => AccessControl::class,
                    //     'denyCallback' => function ($rule, $action) {
                    //         throw new \Exception('You are not allowed to access this page');
                    //     },
                    // ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect('/overzicht');
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user = $model->getUser();

            if (!$user->hasTwoFaEnabled()) {
                $model->login();
                return $this->goBack();
            }
            Yii::$app->user->createLoginVerificationSession($user); //Allow the user to verify the login
            return $this->redirect(['login-verification']);
        }
        // if ($model->load(Yii::$app->request->post()) && $model->login()) {
        //     return $this->goBack();
        // }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }
    public function actionLoginVerification() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $user = Yii::$app->user->getIdentityFromLoginVerificationSession();
        if ($user === null) {
            Yii::$app->session->destroy();
            return $this->goHome();
        }

        $model = new TwoFaForm();
        $model->setScenario(TwoFaForm::SCENARIO_LOGIN);
        $model->setUser($user);

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login-verification', [
            'model' => $model,
        ]);
    }



    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
