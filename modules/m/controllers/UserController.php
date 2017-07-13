<?php

namespace app\modules\m\controllers;

use yii\web\Controller;

class UserController extends Controller
{
    
    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
        $this->layout = "main";
    }
    
    public function actionBind()
    {
        
        return $this->render('bind');
    }
    
    
    //购物车
    public function actionCart()
    {
        
        return $this->render('cart');
    }
    
    //我的订单列表
    public function actionOrder(){
        
        
        return $this->render('order');
        
    }
    
    
    //会员中心
    public function actionIndex(){
        
        
        return $this->render('index');
        
    }
    
    //地址列表
    public function actionAddress(){
        
       
        return $this->render('address');
        
    }
    
    
    //地址修改或者添加
    public function actionAddress_set(){
        
        
        return $this->render('address_set');
       
    }
    
    //会员中心
    public function actionFav(){
        
       
        return $this->render('fav');
        
    }
    
    //评论列表
    public function actionComment(){
        
        
        return $this->render('comment');
        
    }
    
    //评论添加
    public function actionComment_set(){
        
       
        return $this->render('comment_set');
        
    }
    
    
}
