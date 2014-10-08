<?php
/**
 * This file is part of the context project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Context;

/**
 * Class ArrayContextTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Context
 */
class ArrayContextTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ArrayContext
     */
    private $context;

    public function setUp()
    {
        $this->context = new ArrayContext();
    }

    public function test_should_set_the_value()
    {
        $this->context->set('key', 'value');
        $this->assertSame('value', $this->context->get('key'));
    }

    public function test_should_not_trigger_error_when_value_not_set()
    {
        $this->assertNull($this->context->get('key'));
    }

    public function test_should_override_the_value()
    {
        $this->context->set('key', 'value');
        $this->context->set('key', 'value-override');
        $this->assertSame('value-override', $this->context->get('key'));
    }
}
 