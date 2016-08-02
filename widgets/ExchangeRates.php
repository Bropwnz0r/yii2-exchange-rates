<?php

namespace yii2avs\exchangerates\widgets;

use yii\base\Widget;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;


/**
 * Created by PhpStorm.
 * User: eJay
 * Author: Andrey Avseenko
 * Date: 7/31/16
 * Time: 13:26
 */
class ExchangeRates extends Widget {

    public $saveMode;

    public $arrayExchange = array();

    //format USDUAH
    public $currency = array();

    public function init(){
        parent::init();

        if($this->saveMode){
            // goooo
        }else{

            $url = 'https://query.yahooapis.com/v1/public/yql?q=select+*+from+yahoo.finance.xchange+where+pair+=+%22USDUAH,EURUAH,RUBUAH%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys';

            $response = file_get_contents($url);

            $this->arrayExchange = new ArrayDataProvider([
                'allModels'=> (json_decode($response)->query->results->rate)
            ]);
        }
    }

    public function run(){
        return GridView::widget([
            'dataProvider'=>$this->arrayExchange,
            'columns'=> [
                'Name',
                'Date',
                'Ask',
                'Bid'
            ]
        ]);
    }
}