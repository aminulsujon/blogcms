<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Voteoption Entity
 *
 * @property int $id
 * @property int $vote_id
 * @property string $voption
 * @property int|null $vcount
 *
 * @property \App\Model\Entity\Vote $vote
 */
class Voteoption extends Entity
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
        'vote_id' => true,
        'voption' => true,
        'vcount' => true,
        'vote' => true,
    ];
}
