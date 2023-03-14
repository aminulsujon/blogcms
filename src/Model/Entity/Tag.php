<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tag Entity
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int $tagtype
 * @property string $title
 * @property string $slug
 * @property int|null $content_id
 * @property string|null $pagelink
 * @property int|null $seq
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $status
 *
 * @property \App\Model\Entity\ParentTag $parent_tag
 * @property \App\Model\Entity\Content $content
 * @property \App\Model\Entity\ChildTag[] $child_tags
 */
class Tag extends Entity
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
        'parent_id' => true,
        'tagtype' => true,
        'title' => true,
        'slug' => true,
        'details' => true,
        'imgname' => true,
        'metatitle' => true,
        'keywords' => true,
        'content_id' => true,
        'pagelink' => true,
        'seq' => true,
        'isspecial' => true,
        'layout' => true,
        'created' => true,
        'modified' => true,
        'status' => true,
        'parent_tag' => true,
        'content' => true,
        'child_tags' => true,
    ];
}
