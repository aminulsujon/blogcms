<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsToMany $Products
 *
 * @method \App\Model\Entity\Order get($primaryKey, $options = [])
 * @method \App\Model\Entity\Order newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Order|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Order[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Order findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrdersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('orders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Products', [
            'foreignKey' => 'order_id',
            'targetForeignKey' => 'product_id',
            'joinTable' => 'products_orders',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('firstName')
            ->maxLength('firstName', 64)
            ->requirePresence('firstName', 'create')
            ->notEmptyString('firstName');

       
        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 32)
            ->requirePresence('mobile', 'create')
            ->notEmptyString('mobile');

        $validator
            ->scalar('mobile2')
            ->maxLength('mobile2', 32)
            ->allowEmptyString('mobile2');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('address')
            ->maxLength('address', 512)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('address2')
            ->maxLength('address2', 512)
            ->allowEmptyString('address2');

        $validator
            ->integer('paymentMethod')
            ->requirePresence('paymentMethod', 'create')
            ->notEmptyString('paymentMethod');

        $validator
            ->scalar('productsDetails')
            ->requirePresence('productsDetails', 'create')
            ->notEmptyString('productsDetails');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }
}
