<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 17.08.14
 * Time: 5:23
 */

namespace insolita\statepusher\transport;


use insolita\helpers\Helper;
use yii\base\Object;
/**
 * @implements TransportInterface
 */

class FileTransport extends Object implements TransportInterface
{
    public $dirpath;

    private $_pushid;

    public function init(){
        Helper::logs('FileTransport init');
    }

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
     * Возвращает соединение с протоколом
     *
     * @return mixed
     */
    public function getConnection()
    {
        return null;
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