<?php
namespace Rita\JobQueue\Model\Entity;

use Cake\ORM\Entity;

/**
 * JobQueuedTask Entity.
 */
class JobQueuedTask extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'jobtype' => true,
        'data' => true,
        'group' => true,
        'reference' => true,
        'notbefore' => true,
        'fetched' => true,
        'completed' => true,
        'failed' => true,
        'failure_message' => true,
        'workerkey' => true,
        'status' => true,
    ];
}
