<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 17.08.14
 * Time: 4:16
 */

namespace insolita\statepusher\transport;


/**
 * Interface TransportInterface
 *
 * @package insolita\statepusher\transport
 */
interface TransportInterface {
    /**
     * Инициализация
     * @return void
     */
    public function init();
    /**
     * Устанавливает идентификатор операции
     * @return void
     */
    public function setPushid($id);
    /**
     * Возвращает идентификатор операции
     * @return string
     */
    public function getPushid();

    /**
     * Возвращает соединение с протоколом
     * @return mixed
     */
    public function getConnection();

    /**
     * Отправить сообщение состояния операции
     * @param $data
     * @return void
     */
    public function state($data);

    /**
     * Отправить процент выполнения
     * @param (int|string)$data
     * @return void
     */
    public function percent($data);

    /**
     * Возвращает сообщение о состоянии операции
     * @return string
     */
    public function getState();

    /**
     * Возвращает процент выполнения операции
     * @return string
     */
    public function getPercent();
} 