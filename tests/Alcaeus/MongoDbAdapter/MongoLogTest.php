<?php

namespace Alcaeus\MongoDbAdapter\Tests;

class MongoLogTest extends \PHPUnit_Framework_Testcase
{
    public function testSetCallback()
    {
        $foo = function() {};
        $this->assertTrue(\MongoLog::setCallback($foo));
        $this->assertSame($foo, \MongoLog::getCallback());
    }

    public function testLevel()
    {
        \MongoLog::setLevel(2);
        $this->assertSame(2, \MongoLog::getLevel(2));
    }

    public function testModule()
    {
        \MongoLog::setModule(2);
        $this->assertSame(2, \MongoLog::getModule(2));
    }
}
