<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 17.08.14
 * Time: 4:11
 */

namespace insolita\statepusher;


use yii\base\Component;

class StatePusher extends Component{
    const PUSHER_TRANSPORT_REDIS='redis';
    const PUSHER_TRANSPORT_FILE='file';
    const PUSHER_TRANSPORT_AMQP='amqp';
    const PUSHER_TRANSPORT_DB='db';
    public $transport;
    public $redis_config;
    public $file_config;
    public $db_config;
    public $amqp_config;


} 