<?php

namespace app\controllers;

class CustomController extends \yii\web\Controller
{
	public $layout = false;
	//添加自定义菜单页面显示
    public function actionAddshow()
    {
        return $this->render('custom_add');
    }
    //自定义菜单列表页面显示
    public function actionShow()
    {
        return $this->render('custom_list');
    }

}
