<?php

namespace app\modules\web\controllers;

use app\models\User;
use app\common\services\UrlService;
use app\modules\web\controllers\common\BaseController;


class UserController extends BaseController
{
    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
        $this->layout = "user";
    }


    //登陆页面
    public function actionLogin(){
        //如果是get请求，直接展示登陆页面
        if(\yii::$app->request->isGet){
            $this->layout = false;       
            return $this->render("login");
        }
        //登录逻辑处理
        $login_name = trim( $this->post("login_name","") );
        $login_pwd = trim( $this->post("login_pwd","") );
        if( !$login_name || !$login_pwd){
            return $this->renderJs( '请输入正确的用户名和密码-1~~', UrlService::buildWebUrl("/user/login") );
            
        }
        
        //从 用户表 获取 login_name $login_name 信息是否存在
        $user_info = User::find()->where( ['login_name'=>$login_name] )->one();
        if( !$user_info ){
            return $this->renderJs( '请输入正确的用户名和密码-2~~', UrlService::buildWebUrl("/user/login") );
        }        
    
        //验证密码
        //密码加密算法 = md5( login_pwd + md5( login_salt ) );
        $auth_pwd = md5( $login_pwd.md5( $user_info['login_salt']) );
        if($auth_pwd != $user_info['login_pwd']){
            return $this->renderJs( '请输入正确的用户名和密码-3~~', UrlService::buildWebUrl("/user/login") );
        }        
        
        //保存用户的登录状态
        //cookie进行保存的用户登录状态， session 和 cookie 之间有什么区别!!
        //加密字符串+ "#"+uid，加密字符串 = md5( login_name + login_pwd +login_salt )

        $this->setLoginStatus($user_info);
        $this->redirect( UrlService::buildWebUrl("/dashboard/index") );  
        
       

    }
    
    //编辑当前登录人信息
    public function actionEdit(){

        if( \Yii::$app->request->isGet){
            //获取当前登录人的信息

            return $this->render("edit",['user_info'=>$this->current_user ]);

        }
        $nicname = $this->post("nicname","");
        $email = $this->post("email","");
        if( mb_strlen( $nicname,"utf-8") <1){
            return $this->renderJson([],"请输入合法的姓名~~",-1);
        }

        if( mb_strlen( $email,"utf-8") <1 ){
            return $this->renderJson([],"请输入合法的邮箱~~",-1);
        }

        $user_info = $this->current_user;
        $user_info->nicname = $nicname;
        $user_info->email = $email;
        $user_info->created_time = date("Y-m-d H:i:s");
        $user_info->update( 0 );

        return $this->renderJson([],"编辑成功~~");

        


    }

    //重置当前登陆的密码
    public function actionResetPwd(){
        if( \Yii::$app->request->isGet){
            return $this->render("reset_pwd",['user_info' =>$this->current_user ]);
        }
        


    }
    
    //退出登录
    public function actionLogout(){
        $this->removeLoginStatus();
         return $this->redirect( UrlService::buildWebUrl("/user/login"));
        
    }
   
}
