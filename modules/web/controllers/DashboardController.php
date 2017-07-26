<?php

namespace app\modules\web\controllers;
use app\common\components\BaseWebController;
use app\modules\web\controllers\common\BaseController;


class DashboardController extends BaseWebController
{

    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
        $this->layout = "main";
    }
    
    public function actionIndex(){

        return $this->render("index");
        
    }
   
    
}
