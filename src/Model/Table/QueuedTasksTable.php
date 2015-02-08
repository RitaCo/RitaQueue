<?php
namespace Rita\JobQueue\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Rita\JobQueue\Model\Entity\JobQueuedTask;

/**
 * JobQueuedTasks Model
 */
class QueuedTasksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('job_queued_tasks');
        $this->displayField('id');
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
            ->allowEmpty('data')
            ->allowEmpty('group')
            ->allowEmpty('reference')
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
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('status');

        return $validator;
    }
}
