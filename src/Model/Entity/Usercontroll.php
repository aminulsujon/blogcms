<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usercontroll Entity
 *
 * @property int $id
 * @property int $usergroup_id
 * @property string $controller
 * @property string $action
 * @property int $status
 *
 * @property \App\Model\Entity\Usergroup $usergroup
 */
class Usercontroll extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'usergroup_id' => true,
        'controller' => true,
        'action' => true,
        'status' => true,
        'usergroup' => true,
    ];
}
