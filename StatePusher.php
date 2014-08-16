<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 17.08.14
 * Time: 4:11
 */

namespace insolita\statepusher;
use insolita\statepusher\transport\FileTransport;

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
    /**
     * @var
     */
    public $transport;
    /**
     * @var
     */
    public $transportConfig;

    /**
     * @var
     */
    private $_pushid;
    /**
     * @var array
     */
    private $_transports=[self::PUSHER_TRANSPORT_FILE, self::PUSHER_TRANSPORT_CACHE, self::PUSHER_TRANSPORT_DB, self::PUSHER_TRANSPORT_REDIS, self::PUSHER_TRANSPORT_AMQP];
    /**
     * @var insolita\statepusher\transport\TransportInterface $_pusher
     */
    private $_pusher;

    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function init(){
        if(!in_array($this->transport, $this->_transports)){
            throw new InvalidConfigException('Транспорт должен быть задан одним из значений - '.implode(',',$this->_transports));
        }
        else{
            $class=ucfirst($this->transport).'Transport';
            $this->transportConfig['class']=__NAMESPACE__.'\transport\\'.$class;
        }
        $this->_pusher=\Yii::createObject($this->transportConfig);
    }

    /**
     * @return mixed
     */
    public function getPusher(){
        return $this->_pusher;
    }

    /**
     * @param $name
     */
    public function setPushid($name){
        $this->_pusher->setPushid($name);
    }

    /**
     * @return mixed
     */
    public function getSession(){
        return $this->_pusher->getPushid;
    }

    /**
     *
     */
    public function close(){

    }

    /**
     *
     */
    public function afterClose(){

    }

    /**
     *
     */
    public function afterSend(){

    }

} 