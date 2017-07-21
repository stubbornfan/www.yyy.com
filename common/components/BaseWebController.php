<?php
namespace app\common\components;
use yii\web\Controller;
/**
 * 集成常用的公用的方法  提供给所有的 Controller 使用
 *  get ,post, setCookie getCookie,removeCookie,renderJson 
 */

class BaseWebController extends Controller{
    
    public $enableCsrfValidation = false; //关闭csrf
    
    //获取HTTP的get 参数
    public function get($key,$default_val = ""){
        return \yii::$app->request->get($key,$default_val);
        
    }
    
    //获取HTTP的post 参数
    public function post($key,$default_val = ""){
        return \yii::$app->request->post($key,$default_val);
        
    }
    
    //设置cookie值
    public function setCookie($name,$value,$expire = 0){
        $cookie = \yii::$app->response->cookies;
        $cookie->add( new \yii\web\Cookie([
            'name' =>$name,
            'value'=>$value,
            'expire'=>$expire
        ]));        
    }    
    
    /**
     * 获取cookie
     * @param type $name
     * @param type $default_val
     * @return type
     */
    public function  getCookie($name,$default_val = ''){
        $cookie = \yii::$app->request->cookies;
        return $cookie->getValue($name,$default_val);
        
    }
    
    //删除cookie
    public function removeCookie($name){
        $cookie = \yii::$app->response->cookies;
        $cookie->remove($name);
    }
    
    //api统一返回json格式方法
    public function renderJson($data = array(),$msg = "ok",$code=200){
        header("Content-type:application/json");
        echo json_encode([
            "code"=>$code,
            "msg" =>$msg,
            "data" =>$data,
            "req_id" => uniqid()
        ]);
        
    } 
    
    
}

