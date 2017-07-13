<?php

namespace app\modules\m\controllers;

use yii\web\Controller;


class ProductController extends Controller
{
    
    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
        $this->layout = "main";
    }
   
    //商品列表
    public function actionIndex()
    {
       
        return $this->render('index');
    }
    
    //商品详情
    public function actionInfo(){
         
        return $this->render('info');
        
    }
    
    //订单页面
    //商品详情
    public function actionOrder(){
         
        return $this->render('order');
        
    }
}
