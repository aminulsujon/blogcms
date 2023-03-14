<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pagesettings Model
 *
 * @method \App\Model\Entity\Pagesetting get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pagesetting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pagesetting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pagesetting|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pagesetting saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pagesetting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pagesetting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pagesetting findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PagesettingsTable extends Table
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

        $this->setTable('pagesettings');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('pagename')
            ->maxLength('pagename', 16)
            ->requirePresence('pagename', 'create')
            ->notEmptyString('pagename')
            ->add('pagename', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('metatitle')
            ->maxLength('metatitle', 256)
            ->requirePresence('metatitle', 'create')
            ->notEmptyString('metatitle');

        $validator
            ->scalar('metakey')
            ->maxLength('metakey', 256)
            ->requirePresence('metakey', 'create')
            ->notEmptyString('metakey');

        $validator
            ->scalar('metades')
            ->maxLength('metades', 256)
            ->requirePresence('metades', 'create')
            ->notEmptyString('metades');

        $validator
            ->boolean('status')
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
        $rules->add($rules->isUnique(['pagename']));

        return $rules;
    }
}
