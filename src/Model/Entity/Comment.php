<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity
 *
 * @property int $id
 * @property int|null $client_id
 * @property int $product_id
 * @property int|null $parent_id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string $body
 * @property int $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\ParentComment $parent_comment
 * @property \App\Model\Entity\ChildComment[] $child_comments
 */
class Comment extends Entity
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
        'client_id' => true,
        'product_id' => true,
        'parent_id' => true,
        'name' => true,
        'email' => true,
        'phone' => true,
        'body' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'client' => true,
        'product' => true,
        'parent_comment' => true,
        'child_comments' => true,
    ];
}
