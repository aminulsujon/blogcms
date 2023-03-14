<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;


/**
 * Product Entity
 *
 * @property int $id
 * @property string|null $productcode
 * @property string $title
 * @property string $slug
 * @property string $details
 * @property int $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Upload[] $uploads
 * @property \App\Model\Entity\Tag[] $tags
 */
class Product extends Entity
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
        'user_id'=>true,
        'reporter'=>true,
        'pDate'=>true,
        'genus'=>true,
        'productcode' => true,
        'topseq' => true,
        'headingbox' => true,
        'featurebox' => true,
        'ishome' => true,
        'live' => true,
        'title' => true,
        'shoulder' => true,
        'hanger' => true,
        'summary' => true,
        'entireview' => true,
        'details' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'uploads' => true,
        'tags' => true,
        'tagged'=>true
    ];
}
