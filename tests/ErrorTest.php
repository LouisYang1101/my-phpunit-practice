<?php
class ErrorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException PHPUnit_Framework_Error
     * @group exception
     */
    public function testFileWriting()
    {
        mkdir("/zzz/zzz",0777);
    }

}
