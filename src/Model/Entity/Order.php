<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $mobile
 * @property string|null $mobile2
 * @property string|null $email
 * @property string $address
 * @property string|null $address2
 * @property bool $paymentMethod
 * @property string $productsDetails
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool $status
 *
 * @property \App\Model\Entity\Product[] $products
 */
class Order extends Entity
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
        'firstName' => true,
        'mobile' => true,
        'mobile2' => true,
        'email' => true,
        'address' => true,
        'address2' => true,
        'paymentMethod' => true,
        'productsDetails' => true,
        'productsCart' => true,
        'subtotal' => true,
        'subproductcount'=>true,
        'created' => true,
        'modified' => true,
        'status' => true,
        'products' => true,
    ];
}
