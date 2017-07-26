<?php

namespace app\modules\web\controllers;

use app\modules\web\controllers\common\BaseController;
use yii\web\Controller;

class DefaultController extends BaseController
{
    
    public function actionIndex()
    {
        return $this->render('index');
    }
}
