<?php

namespace app\modules\web\controllers;

use app\modules\web\controllers\common\BaseController;
use yii\web\Controller;


class MemberController extends BaseController
{
    
    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
        $this->layout = "main";
    }
    //会员列表
    public function actionIndex(){
        
        return $this->render("index");
        
    }
    
    //添加或编辑会员
    public function actionSet(){
       
        return $this->render("set");
        
    }
    
    //会员详情
    public function actionInfo(){
        
        return $this->render("info");
        
    }
    
    //会员详情
    public function actionComment(){
      
        return $this->render("comment");
        
    }
    
}
