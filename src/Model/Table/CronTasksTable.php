<?php
namespace Rita\JobQueue\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Rita\JobQueue\Model\Entity\JobCronTask;

/**
 * JobCronTasks Model
 */
class CronTasksTable extends Table
{

	public $rateHistory = array();

	public $exit = false;
	public $order = array('created' => 'DESC');
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('job_cron_tasks');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->allowEmpty('jobtype')
            ->allowEmpty('title')
            ->allowEmpty('data')
            ->allowEmpty('name')
            ->add('notbefore', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('notbefore')
            ->add('fetched', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('fetched')
            ->add('completed', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('completed')
            ->add('failed', 'valid', ['rule' => 'numeric'])
            ->requirePresence('failed', 'create')
            ->notEmpty('failed')
            ->allowEmpty('failure_message')
            ->allowEmpty('workerkey')
            ->add('interval', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('interval')
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('status');

        return $validator;
    }
}
