<?php

namespace yii2avs\exchangerates\widgets;
use yii\base\Widget;
use yii\helpers\Html;


/**
 * Created by PhpStorm.
 * User: eJay
 * Author: Andrey Avseenko
 * Date: 7/31/16
 * Time: 13:26
 * url https://privat24.privatbank.ua/p24/accountorder?oper=prp&PUREXML&apicour&country=ua&full
 */
class ExchangeRates extends Widget {

    public $saveMode;

    public $message;

    public function init(){
        parent::init();
        if($this->saveMode){
            // goooo
        }else{
            
        }
        if($this->message === null){
            $this->message = 'Hello world';
        }
    }

    public function run(){
        return Html::encode($this->message);
    }
}