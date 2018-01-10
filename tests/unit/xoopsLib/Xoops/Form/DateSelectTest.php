<?php
namespace Xoops\Form;

require_once(dirname(__FILE__).'/../../../init_new.php');

/**
 * Generated by PHPUnit_SkeletonGenerator on 2014-08-18 at 21:59:24.
 */

/**
 * PHPUnit special settings :
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */

class DateSelectTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var DateSelect
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new DateSelect('Caption', 'name');
        \Xoops::getInstance()->setTheme(new \Xoops\Core\Theme\NullTheme);
        //$this->markTestSkipped('side effects');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Xoops\Form\DateSelect::render
     */
    public function testRender()
    {
        $value = $this->object->render();
        $this->assertTrue(is_string($value));
    }

    /**
     * @covers Xoops\Form\DateSelect::__construct
     * @covers Xoops\Form\DateSelect::render
     */
    public function test__construct()
    {
        $oldWay = new DateSelect('mycaption', 'myname');
        $newWay = new DateSelect(['caption' => 'mycaption', 'type' => 'text', 'name' => 'myname',]);
        $this->assertEquals($oldWay->render(), $newWay->render());
    }
}
