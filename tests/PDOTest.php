<?php

use PreSQL\PDO;

class PDOTest extends PHPUnit_Framework_TestCase
{
    public function testIsPreSQLPDOVersionReturnedCorrectly()
    {
        $this->assertEquals(PDO::getVersion(), PDO::$version);
    }
}
