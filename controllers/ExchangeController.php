<?php
namespace yii2avs\exchangerates\controllers;
/**
 * Created by PhpStorm.
 * User: eJay
 * Author: Andrey Avseenko
 * Date: 7/31/16
 * Time: 10:53
 */

class Exchange extends \yii\base\Controller {

    public function actionIndex(){
        $this->render('index');
    }

}