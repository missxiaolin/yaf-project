<?php

namespace Tests\Str;
// +----------------------------------------------------------------------
// | BaseTest.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 xiaolin All rights reserved.
// +----------------------------------------------------------------------
// | Author: xiaolin <462441355@qq.com> <https://github.com/missxiaolin>
// +----------------------------------------------------------------------


use PHPUnit\Framework\TestCase;
use Tests\App\ErrorCode;
use Tests\App\ErrorCode2;
use Tests\App\ErrorCodeNoPhalcon;

class BaseTest extends TestCase
{
    public function testTrue()
    {
        $this->assertTrue(true);
    }
}