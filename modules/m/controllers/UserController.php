<?php

namespace app\modules\m\controllers;

use yii\web\Controller;

class UserController extends Controller
{
    
    public function actionBind()
    {
        $this->layout = false;
        return $this->render('bind');
    }
    
    
    //购物车
    public function actionCart()
    {
        $this->layout = false;
        return $this->render('cart');
    }
    
    //我的订单列表
    public function actionOrder(){
        
        $this->layout = false;
        return $this->render('order');
        
    }
    
    
    //会员中心
    public function actionIndex(){
        
        $this->layout = false;
        return $this->render('index');
        
    }
    
    //地址列表
    public function actionAddress(){
        
        $this->layout = false;
        return $this->render('address');
        
    }
    
    
    //地址修改或者添加
    public function actionAddress_set(){
        
        $this->layout = false;
        return $this->render('address_set');
       
    }
    
    //会员中心
    public function actionFav(){
        
        $this->layout = false;
        return $this->render('fav');
        
    }
    
    //评论列表
    public function actionComment(){
        
        $this->layout = false;
        return $this->render('comment');
        
    }
    
    //评论添加
    public function actionComment_set(){
        
        $this->layout = false;
        return $this->render('comment_set');
        
    }
    
    
}
