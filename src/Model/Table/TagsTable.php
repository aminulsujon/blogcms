<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tags Model
 *
 * @property \App\Model\Table\TagsTable&\Cake\ORM\Association\BelongsTo $ParentTags
 * @property \App\Model\Table\ContentsTable&\Cake\ORM\Association\BelongsTo $Contents
 * @property \App\Model\Table\TagsTable&\Cake\ORM\Association\HasMany $ChildTags
 *
 * @method \App\Model\Entity\Tag get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tag newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tag|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tag saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tag[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tag findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TagsTable extends Table
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

        $this->setTable('tags');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ParentTags', [
            'className' => 'Tags',
            'foreignKey' => 'parent_id',
        ]);
        $this->belongsTo('Contents', [
            'foreignKey' => 'content_id',
        ]);
        $this->hasMany('ChildTags', [
            'className' => 'Tags',
            'foreignKey' => 'parent_id',
        ]);
        $this->belongsToMany('Products', [
            'foreignKey' => 'tag_id',
            'targetForeignKey' => 'product_id',
            'joinTable' => 'products_tags'
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
            ->requirePresence('tagtype', 'create')
            ->notEmptyString('tagtype');

        $validator
            ->scalar('title')
            ->maxLength('title', 1024)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 512)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug')
            ->add('slug', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('pagelink')
            ->maxLength('pagelink', 64)
            ->allowEmptyString('pagelink');

        $validator
            ->notEmptyString('seq');

        $validator
            ->notEmptyString('status');

        return $validator;
    }

    public function user_tag($tag_id = null){
        //pr($news_count);die();
        return $this->find()
             ->where(['id'=>$tag_id])
             ->select(['id','title','slug'])
             ->contain([
                'Products' => function($q) {
                    return $q
                        ->where(['status'=>1])
                        ->select(['Products.id','Products.title','Products.slug','Products.created'])
                        ->contain(['Uploads' => function($p) {
                                        return $p
                                            ->where(['status'=>1])
                                            ->select(['Uploads.id','Uploads.imgname','Uploads.caption','Uploads.product_id'])
                                            ->order(['created' =>'DESC']);
                            }])
                        ->order(['created' =>'DESC'])
                        ->limit([10]);
                }
            ])
            ->limit([1]);
            
    }

    public function users_tags($tagtype = null){
        return $this->find('threaded',[
                'contain'=>[
                    'ChildTags'=>[
                        'conditions'=>['status'=>1,'tagtype'=>$tagtype],
                        'fields'=>['id','title','slug','parent_id']
                    ]
                ],
                'conditions'=>['Tags.status'=>1,'Tags.tagtype'=>$tagtype,'Tags.parent_id'=>0],
                'fields'=>['Tags.id','Tags.title','Tags.slug','Tags.isspecial'],
                'order'=>['Tags.seq','Tags.id DESC'],
            ]);
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
        $rules->add($rules->existsIn(['parent_id'], 'ParentTags'));
        $rules->add($rules->existsIn(['content_id'], 'Contents'));

        return $rules;
    }
}
