<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 17.08.14
 * Time: 8:07
 */

namespace insolita\statepusher\transport;


class AmqpTransport implements TransportInterface{
    private $_pushid;
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

} 