<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Upvideos Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\Upvideo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Upvideo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Upvideo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Upvideo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Upvideo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Upvideo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Upvideo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Upvideo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
define('limit_set', 10);
class UpvideosTable extends Table
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

        $this->setTable('upvideos');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
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
            ->scalar('title')
            ->maxLength('title', 512)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        // $validator
        //     ->scalar('sourcelink')
        //     ->maxLength('sourcelink', 256)
        //     ->allowEmptyString('sourcelink');

        $validator
            ->scalar('embedlink')
            ->maxLength('embedlink', 2000)
            ->allowEmptyString('embedlink');

        // $validator
        //     ->scalar('details')
        //     ->requirePresence('details', 'create')
        //     ->notEmptyString('details');

        // $validator
        //     ->notEmptyString('status');

        // $validator
        //     ->dateTime('crated')
        //     ->allowEmptyDateTime('crated');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));

        return $rules;
    }

    public function getVides($limit = null){
        $data = $this->find('all',[
            'fields'=>['Upvideos.id','Upvideos.title','Upvideos.embedlink'],
            'conditions'=>['Upvideos.status'=>1],
            'limit'=>$limit,
            'offset'=>0,
            'order'=>'Upvideos.id DESC'
        ]);
        return $data;
    }

    public function users_videos($v_limit = null,$page = null){
        //int $limit_set;
        if(!empty($v_limit)){
            $limit_set = $v_limit;
        }else{
             $limit_set = 0;
        }
        if(empty($page)){
            $page = 1;
        }

        $offset = ($page-1)*limit_set;

        $data = $this->find('all',[
            'fields'=>['Upvideos.id','Upvideos.product_id','Upvideos.title','Upvideos.embedlink','Upvideos.created'],
            'conditions'=>['Upvideos.status'=>1],
            'limit'=>$limit_set,
            'offset'=>$offset,
            'order'=>'Upvideos.id DESC'
        ]);
        return $data;
    }
}
