<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;


/**
 * Products Model
 *
 * @property \App\Model\Table\UploadsTable&\Cake\ORM\Association\HasMany $Uploads
 * @property \App\Model\Table\TagsTable&\Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Comments', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('Uploads', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('Upvideos', [
            'foreignKey' => 'product_id',
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'product_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'products_tags',
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
            ->scalar('productcode')
            ->maxLength('productcode', 32)
            ->allowEmptyString('productcode');
        $validator
            ->scalar('summary')
            ->maxLength('summary', 10000)
            ->allowEmptyString('summary');
        $validator
            ->scalar('title')
            ->maxLength('title', 512)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->notEmptyString('status');

        return $validator;
    }


    public function users_product_top($limit = null){
       if(empty($limit)){$limit = 5;}
        return $this->find('all',[
                'contain'=>['Uploads'],
                'conditions'=>['Products.status'=>1,'Products.genus'=>1,'Products.topseq IS NOT'=>0],
                'order'=>['Products.topseq','Products.id DESC'],
                'limit'=>$limit
            ]);
    }

    public function getPhotos($limit = null){
        if(empty($limit)){$limit = 5;}
         return $this->find('all',[
                 'contain'=>['Uploads'],
                 'conditions'=>['Products.status'=>1,'Products.genus'=>2],
                 'order'=>['Products.id DESC'],
                 'limit'=>$limit
             ]);
     }

    public function users_product_headingbox($limit = null){
        if(empty($limit)){$limit = 5;}
         return $this->find('all',[
                 'contain'=>['Uploads'],
                 'conditions'=>['Products.status'=>1,'Products.genus'=>1,'Products.headingbox IS NOT'=>NULL],
                 'order'=>['Products.headingbox','Products.id DESC'],
                 'limit'=>$limit
             ]);
     }
     
     public function users_products_popular($limit = null,$page_count = null,$genus = null){
        if(empty($genus)){$genus = 1;}
        if(empty($limit)){$limit = 10;}
        if(!empty($page_count)){
            $offset = ($page_count-1)*$limit;
        }else{
            $offset = 0;
        }
        return $this->find('all',[
                'contain'=>['Uploads'=>[
                    'conditions'=>['Uploads.status'=>1]
                    ],'Upvideos'],
                'conditions'=>['Products.status'=>1,'Products.genus'=>$genus],
                'order'=>['Products.entireview DESC'],
                'limit'=>$limit,
                'offset'=>$offset
            ]);
    }

    public function users_product_featurebox($limit = null){
        if(empty($limit)){$limit = 5;}
        return $this->find('all',[
                'contain'=>['Uploads'],
                'conditions'=>['Products.status'=>1,'Products.genus'=>1,'Products.featurebox IS NOT'=>NULL],
                'order'=>['Products.featurebox','Products.id DESC'],
                'limit'=>$limit
            ]);
    }

    public function getLiveNews($liveType = null,$limit = null){
        if(empty($limit)){$limit = 5;}
        return json_encode($this->find('all',[
            'contain'=>['Uploads'],
            'conditions'=>['Products.status'=>1,'Products.genus'=>1,'Products.live'=>$liveType],
            'fields'=>['Products.id','Products.title','Products.created'],
            'order'=>['Products.id DESC'],
            'limit'=>$limit
        ]));
    }

    public function users_products_details($id){
        return $this->get($id, [
            'contain' => [
                'Tags', 
                'Uploads'=>[
                    'conditions'=>['Uploads.status'=>1]
                    ],
                'Upvideos'=>[
                    'conditions'=>['Upvideos.status'=>1]
                ]
            ],'conditions'=>['Products.status'=>1]
        ]);
    }
    public function users_live(){
        return $this->find('all', [
            'contain' => [
                'Tags', 
                'Uploads'=>[
                    'conditions'=>['Uploads.status'=>1]
                    ],
                'Upvideos'=>[
                    'conditions'=>['Upvideos.status'=>1]
                ]
            ],'conditions'=>['Products.status'=>1,'Products.live'=>1],
                'order'=>['Products.id DESC']
        ])->first();
    }
    
    public function users_products($limit = null,$page_count = null,$genus = null){
        if(empty($genus)){$genus = 1;}
        if(empty($limit)){$limit = 10;}
        if(!empty($page_count)){
            $offset = ($page_count-1)*$limit;
        }else{
            $offset = 0;
        }
        return $this->find('all',[
                'contain'=>['Uploads'=>[
                    'conditions'=>['Uploads.status'=>1]
                    ],'Upvideos'],
                'conditions'=>['Products.status'=>1,'Products.genus'=>$genus],
                'order'=>['Products.id DESC'],
                'limit'=>$limit,
                'offset'=>$offset
            ]);
    }

    public function users_products_top($limit = null,$genus = null){
        if(empty($genus)){$genus = 1;}
        if(empty($limit)){$limit = 10;}
        if(!empty($page_count)){
            $offset = ($page_count-1)*$limit;
        }else{
            $offset = 0;
        }
        
        return $this->find('all',[
                'contain'=>['Uploads'=>[
                    'conditions'=>['Uploads.status'=>1]
                    ],'Upvideos'],
                'conditions'=>['Products.status'=>1,'Products.genus'=>$genus,'Products.topseq >'=>0],
                'order'=>['Products.topseq'],
                'limit'=>$limit,
                'offset'=>$offset
            ]);
    }

    /**
     * Product tags rundown
     * @params Tag _ids
    */
    public function setRundown($ids){
        $this->ProductsTags = TableRegistry::getTableLocator()->get('ProductsTags');
        // pr($ids);die();
        foreach($ids as $key => $value){
            // pr($key.'-'.$value);
            $tagRundown = $this->ProductsTags->find('all',[
                'conditions'=>['tag_id'=>$value,'isrun >'=>0]
            ]);
            foreach($tagRundown as $rundown){
                $data['user_id'] = $this->Auth->user('id');
                $product = $this->Products->patchEntity($product, $data);
                $this->Products->setRundown($data['tags']['_ids']);
                pr($data);die();
                $result = $this->Products->save($product);
            }
            pr($tagRundown->toArray());die();
        }
        die();
    }
}
