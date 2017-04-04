<?php namespace Chuimi\Acl\Tests\Models;

use Chuimi\Acl\Tests\TestCase;

abstract class ModelsTest extends TestCase
{
    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    public function setUp()
    {
        parent::setUp();

        $this->migrate();
    }

    public function tearDown()
    {
        parent::tearDown();
    }
}
