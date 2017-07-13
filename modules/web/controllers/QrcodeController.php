<?php

namespace app\modules\web\controllers;

use yii\web\Controller;


class QrcodeController extends Controller
{
    //渠道二维码列表
    public function actionIndex(){
        $this->layout = false;
        return $this->render("index");
        
    }
    
    //渠道二维码的编辑或者添加
    public function actionSet(){
        $this->layout = false;
        return $this->render("set");
        
    }
    

        
    
    
}
