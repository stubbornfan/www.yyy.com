<?php

namespace app\modules\web\controllers;

use app\modules\web\controllers\common\BaseController;
use yii\web\Controller;


class StatController extends BaseController
{
    
    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
        $this->layout = "main";
    }
    
    //财务统计
    public function actionIndex(){
       
        return $this->render("index");
    }
    
    
    //商品售卖统计
    public function actionProduct(){
        
        return $this->render("product");
    }
    
    //会员消费统计
    public function actionMember(){
        
        return $this->render("member");
    }
    //分享统计
    public function actionShare(){
       
        return $this->render("share");
    }
    
    
}
