<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 17.08.14
 * Time: 5:40
 */

namespace insolita\statepusher\tests\unit;


use Codeception\TestCase\Test;
use Codeception\Util\Debug;

class StatePusherTest extends Test{
    /**
     * @var \CodeGuy
     */
    protected $guy;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
         Debug::debug('OK!');
    }
} 