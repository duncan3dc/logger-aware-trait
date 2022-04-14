<?php

namespace duncan3dc\LogTests;

use duncan3dc\Log\LoggerAwareTrait;
use PHPUnit\Framework\TestCase;
use Psr\Log\AbstractLogger;
use Psr\Log\NullLogger;

final class LoggerAwareTraitTest extends TestCase
{
    /** @var Logger */
    private $class;


    public function setUp(): void
    {
        $this->class = new Logger();
    }


    public function testGetNullLogger(): void
    {
        $logger = $this->class->getLogger();
        $this->assertInstanceOf(NullLogger::class, $logger);
    }


    public function testSetLogger(): void
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


    public function testChaining(): void
    {
        $result = $this->class->setLogger(new NullLogger());
        $this->assertSame($this->class, $result);
    }
}
