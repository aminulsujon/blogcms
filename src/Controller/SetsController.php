<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\ConnectionManager;


/**
 * Contents Controller
 *
 * @property \App\Model\Table\ContentsTable $Contents
 *
 * @method \App\Model\Entity\Content[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SetsController extends AppController
{
	public function initialize(): void
    {
        parent::initialize();
        
    }
    
    public function altercommenttable(){
        $connection = ConnectionManager::get('default');
        $statement = $connection->query("ALTER TABLE `comments` ADD `name` VARCHAR(256) NULL AFTER `parent_id`;");
        $statement = $connection->query("ALTER TABLE `comments` ADD `phone` VARCHAR(32) NULL AFTER `parent_id`;");
        $statement = $connection->query("ALTER TABLE `comments` ADD `email` VARCHAR(128) NULL AFTER `parent_id`;");
        $this->redirect(['controller'=>'products','action'=>'index']);
    }
}
