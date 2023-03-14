<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reporter Entity
 *
 * @property int $id
 * @property string $slug
 * @property string $namebn
 * @property string $nameen
 * @property string|null $location
 * @property string|null $details
 * @property int $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Product[] $products
 */
class Reporter extends Entity
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
        'slug' => true,
        'namebn' => true,
        'nameen' => true,
        'location' => true,
        'details' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'products' => true,
    ];
}
