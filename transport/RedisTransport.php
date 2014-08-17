<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 17.08.14
 * Time: 8:06
 */

namespace insolita\statepusher\transport;


use yii\base\InvalidCallException;

class RedisTransport implements TransportInterface {
    private $_pushid;
    /**@var yii\redis\Connection $_redis*/
    private $_connection;
    /**
     * Устанавливает идентификатор операции
     *
     * @return void
     */
    public function setPushid($id)
    {
        $this->_pushid=$id;
    }

    /**
     * Возвращает идентификатор операции
     *
     * @return string
     */
    public function getPushid()
    {
        return $this->_pushid;
    }

    /**
     * Инициализация
     *
     * @return void
     */
    public function init()
    {
        try{
            $this->_connection=\Yii::$app->redis->open();
        }catch (\Exception $e){
            throw new InvalidCallException('Компонент Redis в системе не заегистрирован!');
        }
    }

    /**
     * Возвращает соединение с протоколом
     *
     * @return mixed
     */
    public function getConnection()
    {
        return $this->_connection;
    }

    /**
     * Отправить сообщение состояния операции
     *
     * @param $data
     * @return void
     */
    public function state($data)
    {
        // TODO: Implement state() method.
    }

    /**
     * Отправить процент выполнения
     *
     * @param (int|string)$data
     * @return void
     */
    public function percent($data)
    {
        // TODO: Implement percent() method.
    }

    /**
     * Возвращает сообщение о состоянии операции
     *
     * @return string
     */
    public function getState()
    {
        // TODO: Implement getState() method.
    }

    /**
     * Возвращает процент выполнения операции
     *
     * @return string
     */
    public function getPercent()
    {
        // TODO: Implement getPercent() method.
    }

} 