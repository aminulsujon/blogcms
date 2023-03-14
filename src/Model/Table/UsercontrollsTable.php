<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usercontrolls Model
 *
 * @property \App\Model\Table\UsergroupsTable&\Cake\ORM\Association\BelongsTo $Usergroups
 *
 * @method \App\Model\Entity\Usercontroll get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usercontroll newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usercontroll[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usercontroll|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usercontroll saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usercontroll patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usercontroll[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usercontroll findOrCreate($search, callable $callback = null, $options = [])
 */
class UsercontrollsTable extends Table
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

        $this->setTable('usercontrolls');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Usergroups', [
            'foreignKey' => 'usergroup_id',
            'joinType' => 'INNER',
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
            ->scalar('controller')
            ->maxLength('controller', 32)
            ->requirePresence('controller', 'create')
            ->notEmptyString('controller');

        $validator
            ->scalar('action')
            ->maxLength('action', 32)
            ->requirePresence('action', 'create')
            ->notEmptyString('action');

        $validator
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['usergroup_id'], 'Usergroups'));

        return $rules;
    }
}
