<?php

namespace app\modules\m\controllers;

use yii\web\Controller;


class DefaultController extends Controller
{
    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
        $this->layout = "main";
    }
   
    public function actionIndex()
    {
       
        return $this->render('index');
    }
}
