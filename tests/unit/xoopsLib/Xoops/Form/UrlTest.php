<?php
namespace Xoops\Form;

require_once(dirname(__FILE__).'/../../../init_new.php');

/**
 * Generated by PHPUnit_SkeletonGenerator on 2014-08-18 at 21:59:26.
 */
 
/**
 * PHPUnit special settings :
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */

class UrlTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Url
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Url('Caption', 'name', 80, 200);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Xoops\Form\Url::render
     */
    public function testRender()
    {
        $value = $this->object->render();
        $this->assertTrue(is_string($value));
        $this->assertTrue(false !== strpos($value, '<input'));
        $this->assertTrue(false !== strpos($value, 'type="url"'));
        $this->assertTrue(false !== strpos($value, 'name="name"'));
        $this->assertTrue(false !== strpos($value, 'size="80"'));
        $this->assertTrue(false !== strpos($value, 'maxlength="200"'));
    }
}
