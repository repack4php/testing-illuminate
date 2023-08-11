<?php

namespace Repack4php\Testing\Illuminate;

class ContainerUnitTest extends \PHPUnit\Framework\TestCase
{
    public function testGetenv()
    {
        $this->assertEquals('testing', getenv('APP_ENV'));
    }
}