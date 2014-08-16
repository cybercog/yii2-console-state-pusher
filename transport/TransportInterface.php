<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 17.08.14
 * Time: 4:16
 */

namespace insolita\statepusher\transport;


interface TransportInterface {
    public function push($key,$data);
    public function count($key,$data);
} 