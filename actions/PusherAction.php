<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 17.08.14
 * Time: 5:06
 */

namespace insolita\statepusher\actions;


use yii\base\Action;
use yii\base\InvalidCallException;

class PusherAction extends Action {
      public $pusher_id;

      public function run($pusher_id=''){
          if(!$this->pusher_session && !$pusher_id){
              throw new InvalidCallException();
          }

      }
} 