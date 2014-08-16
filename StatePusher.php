<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 17.08.14
 * Time: 4:11
 */

namespace insolita\statepusher;


use yii\base\Component;
use yii\base\InvalidConfigException;

class StatePusher extends Component{
    const PUSHER_TRANSPORT_REDIS='redis';
    const PUSHER_TRANSPORT_FILE='file';
    const PUSHER_TRANSPORT_CACHE='cache';
    const PUSHER_TRANSPORT_AMQP='amqp';
    const PUSHER_TRANSPORT_DB='db';

    const EVENT_AFTER_CLOSE='afterClose';
    const EVENT_AFTER_SEND='afterSend';
    public $transport;
    public $transport_config;

    private $_pushid;
    private $_transports=[self::PUSHER_TRANSPORT_FILE, self::PUSHER_TRANSPORT_DB, self::PUSHER_TRANSPORT_REDIS, self::PUSHER_TRANSPORT_AMQP];
    private $_config;

    public function init($transport, $transportConfig=[]){
        if(!in_array($transport, $this->_transports)){
            throw new InvalidConfigException('Транспорт должен быть задан одним из значений - '.implode(',',$this->_transports));
        }
        else{
            $class=ucfirst($transport).'Transport';
            $transportConfig['class']=$class::className();
        }
        $this->_config=\Yii::createObject($transportConfig);
    }

    public function setPushid($name){
        $this->_pushid=$name;
    }

    public function getSession(){
        return $this->_pushid;
    }

    public function close(){

    }

    public function afterClose(){

    }
    public function afterSend(){

    }

} 