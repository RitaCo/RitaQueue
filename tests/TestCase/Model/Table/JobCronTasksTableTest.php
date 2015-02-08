<?php
namespace Rita\JobQueue\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Rita\JobQueue\Model\Table\JobCronTasksTable;

/**
 * Rita\JobQueue\Model\Table\JobCronTasksTable Test Case
 */
class JobCronTasksTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'JobCronTasks' => 'plugin.rita/job_queue.job_cron_tasks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('JobCronTasks') ? [] : ['className' => 'Rita\JobQueue\Model\Table\JobCronTasksTable'];        $this->JobCronTasks = TableRegistry::get('JobCronTasks', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JobCronTasks);

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
