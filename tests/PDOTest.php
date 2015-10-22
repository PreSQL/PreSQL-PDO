<?php

use PreSQL\PDO;

class PDOTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers \PreSQL\PDO
     */
    public function testIsPreSQLPDOVersionReturnedCorrectly()
    {
        $this->assertEquals(PDO::getVersion(), PDO::$version);
    }
}
