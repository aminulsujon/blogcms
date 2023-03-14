<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contents Model
 *
 * @property \App\Model\Table\TagsTable&\Cake\ORM\Association\HasMany $Tags
 *
 * @method \App\Model\Entity\Content get($primaryKey, $options = [])
 * @method \App\Model\Entity\Content newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Content[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Content|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Content saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Content patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Content[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Content findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContentsTable extends Table
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

        $this->setTable('contents');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Tags', [
            'foreignKey' => 'content_id',
        ]);
    }
    
    public function getCotnentsOfType($content_type = null){
    	return $this->find('all',['conditions'=>['contenttype'=>$content_type],'order'=>'seq']);
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
            ->requirePresence('contenttype', 'create')
            ->notEmptyString('contenttype');

        $validator
            ->scalar('title')
            ->maxLength('title', 1024)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 512)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug');

        $validator
            ->scalar('details')
            ->requirePresence('details', 'create')
            ->notEmptyString('details');

        $validator
            ->scalar('imgname')
            ->maxLength('imgname', 64)
            ->allowEmptyString('imgname');

        $validator
            ->scalar('metatitle')
            ->maxLength('metatitle', 512)
            ->allowEmptyString('metatitle');

        $validator
            ->scalar('metakey')
            ->maxLength('metakey', 1024)
            ->allowEmptyString('metakey');

        $validator
            ->scalar('metades')
            ->maxLength('metades', 1024)
            ->allowEmptyString('metades');

        $validator
            ->allowEmptyString('seq');

        $validator
            ->boolean('status')
            ->notEmptyString('status');

        return $validator;
    }
}
