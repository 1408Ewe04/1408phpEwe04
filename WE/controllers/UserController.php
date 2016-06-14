<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/6/11
 * Time: 18:46
 */

namespace app\controllers;

use Yii;
use yii\base\Model;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class UserController extends Controller{
    public $enableCsrfValidation = false;
    //主登陆页面
    public function actionIndex(){
        return  $this->renderPartial('login');
    }
    public $layouts = "menu.php";
    /*
     * 判断账号是否正确
     * @user,password
    */
    public function actionSel(){
        $request=  Yii::$app->request;
        $user=$request->post('user');
        $password=$request->post('password');
        $model = new \app\models\UserForm;
        //获得登陆账号的ID
        $u_id=$model->sel($user,$password);
        //获得返回值是否正确
        if($u_id){
            $session = Yii::$app->session;
            $session->open();
            $session->set('user_id',$u_id['user_id']);
            /**
             * Yii::app()->session['var']='value';
             * 使用 echo Yii::app()->session['var'];
             * 移除 unset(Yii::app()->session['var']);
             */
            return true;
        }else{
            return false;
        }
    }
    /*加载模板开始*/
    /*引入页面所有页面在这个文件中被引入显示*/
    public function actionLogin(){
        return  $this->renderPartial('index');
    }
    //添加公众号页面
    public function actionAdd(){
        return  $this->renderPartial('form-elements');
    }
    //公众号列表页面
    public function actionShow(){
        return  $this->renderPartial('tables');
    }
    //添加自定义回复页面
    public function actionAddfu(){
        return  $this->renderPartial('form-elements1');
    }
    //自定义回复列表页面
    public function actionFushow(){
        return  $this->renderPartial('table');
    }
}