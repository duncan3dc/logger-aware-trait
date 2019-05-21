<?php

namespace duncan3dc\LogTests;

use duncan3dc\Log\LoggerAwareTrait;
use PHPUnit\Framework\TestCase;
use Psr\Log\AbstractLogger;
use Psr\Log\NullLogger;

class LoggerAwareTraitTest extends TestCase
{
    private $class;

    public function setUp()
    {
        $this->class = new Class {
            use LoggerAwareTrait;
        };
    }


    public function testGetNullLogger()
    {
        $logger = $this->class->getLogger();
        $this->assertInstanceOf(NullLogger::class, $logger);
    }


    public function testSetLogger()
    {
        $logger = new Class extends AbstractLogger {
            use LoggerAwareTrait;
            public function log($level, $message, array $context = [])
            {
            }
        };

        $this->class->setLogger($logger);

        $this->assertSame($logger, $this->class->getLogger());
    }


    public function testChaining()
    {
        $result = $this->class->setLogger(new NullLogger());
        $this->assertSame($this->class, $result);
    }
}
