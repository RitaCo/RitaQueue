<?php
namespace Rita\JobQueue\Test\TestCase\Shell;

use Cake\TestSuite\TestCase;
use Rita\JobQueue\Shell\SalehShell;

/**
 * Rita\JobQueue\Shell\SalehShell Test Case
 */
class SalehShellTest extends TestCase
{

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->io = $this->getMock('Cake\Console\ConsoleIo');        $this->Saleh = new SalehShell($this->io);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Saleh);

        parent::tearDown();
    }

    /**
     * Test main method
     *
     * @return void
     */
    public function testMain()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
