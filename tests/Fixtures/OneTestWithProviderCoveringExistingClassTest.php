<?php

namespace OckCyp\CoversValidator\Tests\Fixtures;

class OneTestWithProviderCoveringExistingClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers OckCyp\CoversValidator\Tests\Fixtures\ExistingClass::existingMethod
     * @dataProvider provideDummyTest
     */
    public function testDummyTest($x)
    {

    }

    public function provideDummyTest()
    {
        return array(
            array('x'),
        );
    }
}
