<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\RecruitmentForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $slides = [
            ['url' => '../web/images/home-slide/slide1.jpg',
             'src' => '../web/images/home-slide/slide1.jpg'],
            ['url' => '../web/images/home-slide/slide2.jpg',
             'src' => '../web/images/home-slide/slide2.jpg'],
            ['url' => '../web/images/home-slide/slide18.jpg',
             'src' => '../web/images/home-slide/slide18.jpg'],
            ['url' => '../web/images/home-slide/slide23.jpg',
             'src' => '../web/images/home-slide/slide23.jpg'],
            ['url' => '../web/images/home-slide/slide19.jpg',
             'src' => '../web/images/home-slide/slide19.jpg'],
            ['url' => '../web/images/home-slide/slide20.jpg',
             'src' => '../web/images/home-slide/slide20.jpg'],
            ['url' => '../web/images/home-slide/slide21.jpg',
             'src' => '../web/images/home-slide/slide21.jpg'],
            ['url' => '../web/images/home-slide/slide4.jpg',
             'src' => '../web/images/home-slide/slide4.jpg'],
            ['url' => '../web/images/home-slide/slide5.jpg',
             'src' => '../web/images/home-slide/slide5.jpg'],
            ['url' => '../web/images/home-slide/slide7.jpg',
             'src' => '../web/images/home-slide/slide7.jpg'],
            ['url' => '../web/images/home-slide/slide15.jpg',
             'src' => '../web/images/home-slide/slide15.jpg'],
            ['url' => '../web/images/home-slide/slide6.jpg',
             'src' => '../web/images/home-slide/slide6.jpg'],
            ['url' => '../web/images/home-slide/slide16.jpg',
             'src' => '../web/images/home-slide/slide16.jpg'],
            ['url' => '../web/images/home-slide/slide17.jpg',
             'src' => '../web/images/home-slide/slide17.jpg'],
            ['url' => '../web/images/home-slide/slide24.jpg',
             'src' => '../web/images/home-slide/slide24.jpg'],
            ['url' => '../web/images/home-slide/slide25.jpg',
             'src' => '../web/images/home-slide/slide25.jpg'],
            ['url' => '../web/images/home-slide/slide26.jpg',
             'src' => '../web/images/home-slide/slide26.jpg'],
            ['url' => '../web/images/home-slide/slide22.jpg',
             'src' => '../web/images/home-slide/slide22.jpg'],
            ['url' => '../web/images/home-slide/slide8.jpg',
             'src' => '../web/images/home-slide/slide8.jpg'],
            ['url' => '../web/images/home-slide/slide9.jpg',
             'src' => '../web/images/home-slide/slide9.jpg'],
            ['url' => '../web/images/home-slide/slide10.jpg',
             'src' => '../web/images/home-slide/slide10.jpg'],
            ['url' => '../web/images/home-slide/slide11.jpg',
             'src' => '../web/images/home-slide/slide11.jpg'],
            ['url' => '../web/images/home-slide/slide12.jpg',
             'src' => '../web/images/home-slide/slide12.jpg'],
            ['url' => '../web/images/home-slide/slide14.jpg',
             'src' => '../web/images/home-slide/slide14.jpg'],
        ];

        return $this->render('index', [
            'slides' => $slides,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionInvolvement()
    {
        return $this->render('involvement');
    }

    public function actionEvents(){
        return $this->render('events');
    }

    public function actionPhilanthropy()
    {
        return $this->render('philanthropy');
    }

    public function actionExec()
    {
        return $this->render('exec');
    }

    public function actionChapterHistory(){
        return $this->render('chapter-history');
    }

    public function actionNationalHistory(){
        return $this->render('national-history');
    }

    public function actionRecruitment(){
        /*$model = new RecruitmentForm();

        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $first_name = $model->first_name;
            $last_name = $model->last_name;
            $class = $model->class;
            $major = $model->major;
            $email = $model->email;
            $phone = $model->phone;
            $town = $model->town;
            $state = $model->state;
            $dorm = $model->dorm;
            $legacy = $model->legacy;
            /* form request was successful, go to recruitment-confirm view */
            /*return $this->render('recruitment-confirm', [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'class' => $class,
                'major' => $major,
                'email' => $email,
                'phone' => $phone,
                'town' => $town,
                'state' => $state,
                'dorm' => $dorm,
                'legacy' => $legacy,
            ]);
        } else
        {*/
            return $this->render('recruitment');
        //}
    }

    public function actionBalancedMan(){
        return $this->render('balanced-man');
    }

    public function actionAlumni(){
        return $this->render('alumni');
    }

    public function actionSweetheart(){
        $slides = [
            ['url' => '../web/images/sweetheart/christina1.jpg',
             'src' => '../web/images/sweetheart/christina1.jpg',
             'options' => ['title' => 'Christina with all members who attended the 
                                       Fall 2015 Rush Dinner in the McLane Stadium 
                                       President\'s Suite']],
            ['url' => '../web/images/sweetheart/christina3.png',
             'src' => '../web/images/sweetheart/christina3.png',
             'options' => ['title' => 'Christina and Rand Barnes, Senior SigEp
                                and Christina\'s boyfriend of 5 years.']],
            ['url' => '../web/images/sweetheart/christina2.jpg',
             'src' => '../web/images/sweetheart/christina2.jpg',
             'options' => ['title' => 'Christina with a few SigEps at the 
                                       Fall 2015 Rush Dinner in the McLane Stadium 
                                       President\'s Suite']],
            ['url' => '../web/images/sweetheart/christina4.png',
             'src' => '../web/images/sweetheart/christina4.png',
             'options' => ['title' => 'Christina and Rand Barnes, Senior SigEp
                                and Christina\'s boyfriend of 5 years.']],
            ['url' => '../web/images/sweetheart/christina5.png',
             'src' => '../web/images/sweetheart/christina5.png',
             'options' => ['title' => 'Spring 2015 SigEp Awards night, where we announced
                            that Christina had been chosen as our new Sweetheart!']],
            ['url' => '../web/images/sweetheart/christina6.png',
             'src' => '../web/images/sweetheart/christina6.png',
             'options' => ['title' => 'Christina and some of her SigEps at the 
                            Fall 2015 Kappa Krush event.']],
        ];

        return $this->render('sweetheart', [
            'slides' => $slides,
        ]);
    }
}
