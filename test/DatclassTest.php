<?php

require_once 'PHPUnit/Autoload.php';
require_once '../datclass.php';

class DatclassTest extends PHPUnit_Framework_TestCase
{

    protected static $time;
    protected static $urlhash;
    protected static $dirhash;
    protected static $pass;
    protected static $fname;
    protected static $comment;
    protected static $mailaddr;
    protected static $datarray;

    public function setUp()
    {
        $this->datclass = new DatFile;

        self::$time = time();        
        self::$urlhash = hash('md5', 'url');
        self::$dirhash = hash('md5', 'dir');
        self::$pass = 'password';
        self::$fname = 'filename';
        self::$comment = 'comment comment';
        self::$mailaddr = 'mail@adderss';
        self::$datarray = array('time' => self::$time, 'urlhash' => self::$urlhash, 'dirhash' => self::$dirhash,
                          'pass' => self::$pass, 'fname' => self::$fname, 'comment' => self::$comment, 'mailaddr' => self::$mailaddr );
    }

    public function test_setArray()
    {
        $this->assertTrue( $this->datclass->SetdatArray( self::$datarray ));
    }

    public function test_getArray()
    {
        $this->assertEquals( self::$datarray, $this->datclass->GetdatArray( self::$urlhash ));
    }

    public function test_chkArray()
    {
        $this->assertTrue( $this->datclass->ChkdatArray( self::$urlhash ));
    }

    public function test_delArray()
    {
        $this->assertTrue( $this->datclass->DeldatArray( self::$urlhash ));
    }
}

?>
