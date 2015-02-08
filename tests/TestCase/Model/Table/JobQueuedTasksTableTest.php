<?php
namespace Rita\JobQueue\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Rita\JobQueue\Model\Table\JobQueuedTasksTable;

/**
 * Rita\JobQueue\Model\Table\JobQueuedTasksTable Test Case
 */
class JobQueuedTasksTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'JobQueuedTasks' => 'plugin.rita/job_queue.job_queued_tasks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('JobQueuedTasks') ? [] : ['className' => 'Rita\JobQueue\Model\Table\JobQueuedTasksTable'];        $this->JobQueuedTasks = TableRegistry::get('JobQueuedTasks', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JobQueuedTasks);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
