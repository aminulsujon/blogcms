<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Siteoptions Model
 *
 * @method \App\Model\Entity\Siteoption get($primaryKey, $options = [])
 * @method \App\Model\Entity\Siteoption newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Siteoption[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Siteoption|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Siteoption saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Siteoption patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Siteoption[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Siteoption findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SiteoptionsTable extends Table
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

        $this->setTable('siteoptions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('okey')
            ->maxLength('okey', 16)
            ->requirePresence('okey', 'create')
            ->notEmptyString('okey')
            ->add('okey', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('ovalue')
            ->maxLength('ovalue', 2048)
            ->requirePresence('ovalue', 'create')
            ->notEmptyString('ovalue');

        return $validator;
    }

    public function getSiteOptionList(){
        
        $query = $this->find('all');
        $sitoptions = [];
        foreach ($query as $row) {
            $sitoptions[$row->okey] = $row->ovalue;
        }
        
        return $sitoptions;
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
        $rules->add($rules->isUnique(['okey']));

        return $rules;
    }
}
