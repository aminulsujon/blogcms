<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Voteoptions Model
 *
 * @property \App\Model\Table\VotesTable&\Cake\ORM\Association\BelongsTo $Votes
 *
 * @method \App\Model\Entity\Voteoption newEmptyEntity()
 * @method \App\Model\Entity\Voteoption newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Voteoption[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Voteoption get($primaryKey, $options = [])
 * @method \App\Model\Entity\Voteoption findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Voteoption patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Voteoption[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Voteoption|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Voteoption saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Voteoption[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Voteoption[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Voteoption[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Voteoption[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VoteoptionsTable extends Table
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

        $this->setTable('voteoptions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Votes', [
            'foreignKey' => 'vote_id',
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
            ->scalar('voption')
            ->maxLength('voption', 64)
            ->requirePresence('voption', 'create')
            ->notEmptyString('voption');

        $validator
            ->integer('vcount')
            ->allowEmptyString('vcount');

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
        $rules->add($rules->existsIn(['vote_id'], 'Votes'), ['errorField' => 'vote_id']);

        return $rules;
    }
}
