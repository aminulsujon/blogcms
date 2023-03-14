<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Content Entity
 *
 * @property int $id
 * @property int $contenttype
 * @property string $title
 * @property string $slug
 * @property string $details
 * @property string|null $imgname
 * @property string|null $metatitle
 * @property string|null $metakey
 * @property string|null $metades
 * @property int|null $seq
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Tag[] $tags
 */
class Content extends Entity
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
        'contenttype' => true,
        'title' => true,
        'slug' => true,
        'details' => true,
        'imgname' => true,
        'metatitle' => true,
        'metakey' => true,
        'metades' => true,
        'seq' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'tags' => true,
    ];
}
