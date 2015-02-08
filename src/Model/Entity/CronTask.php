<?php
namespace Rita\JobQueue\Model\Entity;

use Cake\ORM\Entity;

/**
 * JobCronTask Entity.
 */
class CronTask extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'jobtype' => true,
        'title' => true,
        'data' => true,
        'name' => true,
        'notbefore' => true,
        'fetched' => true,
        'completed' => true,
        'failed' => true,
        'failure_message' => true,
        'workerkey' => true,
        'interval' => true,
        'status' => true,
    ];
}
