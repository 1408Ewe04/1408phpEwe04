<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/6/12
 * Time: 9:17
 */

namespace app\models;

use Yii;
use yii\base\Model;


class UserForm extends Model{
    //账号密码验证是否正确
    public function sel($user,$password){
        //$db= \Yii::$app->db;
        $arr= (new \yii\db\Query())
            ->select("user_id")
            ->from("user")
            ->where(['user_name'=>$user,'user_pwd'=>md5($password)])
            ->One();
        return $arr;
    }
}