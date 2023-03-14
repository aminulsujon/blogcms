<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $loginname
 * @property int $clienttype
 * @property string $fullname
 * @property string|null $mobile
 * @property string|null $email
 * @property string|null $address
 * @property int $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Comment[] $comments
 */
class Client extends Entity
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
        'loginname' => true,
        'clienttype' => true,
        'fullname' => true,
        'mobile' => true,
        'email' => true,
        'address' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'comments' => true,
    ];
}
