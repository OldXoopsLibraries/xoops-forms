<?php
require_once(dirname(__FILE__).'/../../init_new.php');

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class XoopsFormTextDateSelectTest extends \PHPUnit\Framework\TestCase
{
    protected $myClass = 'XoopsFormTextDateSelect';

    public function test___construct()
    {
        $instance = new $this->myClass('', '');
        $this->assertInstanceOf('Xoops\\Form\\DateSelect', $instance);
    }

}
