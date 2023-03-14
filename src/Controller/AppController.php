<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth',[
            'authenticate'=>[
                'Form'=>[
                    'fields'=>[
                        'username'=>'email',
                        'password'=>'password'
                    ]   
                ]
            ],
            'loginAction'=>[
                'controller'=>'Users',
                'action'=>'login'
            ]
        ]);

        //$this->set('head_url','http://localhost/news24/');
        $this->set('arr_siteoptions',$this->siteoptions());
        $this->set('arr_content_type',$this->arr_content_type);
        $this->set('arr_onLead',$this->arr_onLead);
        $this->set('arr_loggedUser',$this->Auth->user());
        $this->set('arr_numbers',$this->arr_numbers);
        $this->set('arr_payment_method',$this->arr_payment_method);
        $this->set('arr_publish',$this->arr_publish);
        $this->set('arr_status_order',$this->arr_status_order);
        $this->set('arr_status',$this->arr_status);
        $this->set('arr_tagtype',$this->arr_tagtype);

        //$this->userPermission();

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/4/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function userPermission(){
        $controllerName = $this->request->getParam('controller');
        $actionName = $this->request->getParam('action');
        if($controllerName == 'Pages'){
            return true;
        }elseif($controllerName == 'Users' && $actionName == 'login'){
            return true;
        }else{
            $loggedUser = $this->Auth->user();
            if(empty($loggedUser)){
                $siteoptions = $this->siteoptions();
                die('Hello sir, we are sorry to say that your page is not ready to view. Please <a href="javascript:history.back()">go back</a> to <a href="'.$siteoptions['web_url'].'">another link</a>. Thank you.');
            }
            if($loggedUser['usergroup_id'] == 3){
                return true;
            }
            if($controllerName == 'Users' && $actionName == 'dashboard'){
                return true;
            }
            $this->Usercontrolls = TableRegistry::getTableLocator()->get('Usercontrolls');
            $groupPermissions = $this->Usercontrolls->find('all',['conditions'=>['controller'=>$controllerName,'action'=>$actionName,'status'=>1]])->toArray();
            if(empty($groupPermissions)){
                return($this->redirect($this->referer()));
                die('No access found! Contact with admin');
            }else{
                return true;
            }
        }
    }

    public $arr_content_type = array(1=>'Pages',2=>'Banner');
    public $arr_onLead = array(1=>'Lead',2=>'Shirsho 10',3=>'Top Stories');
    public $arr_numbers = array(
        ' '=>" ",'-'=>"/",':'=>":",
        0=>'০',1=>'১',2=>'২',3=>'৩',4=>'৪',5=>'৫',6=>'৬',7=>'৭',8=>'৮',9=>'৯',
        10=>'১০',11=>'১১',12=>'১২',13=>'১৩',14=>'১৪',15=>'১৫',16=>'১৬',17=>'১৭',18=>'১৮',19=>'১৯',
        20=>'২০',21=>'২১',22=>'২২',23=>'২৩',24=>'২৪',25=>'২৫',26=>'২৬',27=>'২৭',28=>'২৮',29=>'২৯',
        30=>'৩০',31=>'৩১',32=>'৩২',33=>'৩৩',34=>'৩৪',35=>'৩৫',36=>'৩৬',37=>'৩৭',38=>'৩৮',39=>'৩৯',
        40=>'৪০',41=>'৪১',42=>'৪ ২',43=>'৪৩',44=>'৪৪',45=>'৪৫',46=>'৪৬',47=>'৪৭',48=>'৪৮',49=>'৪৯',
        50=>'৫০',51=>'৫১',52=>'৫২',53=>'৫৩',54=>'৫৪',55=>'৫৫',56=>'৫৬',57=>'৫৭',58=>'৫৮',59=>'৫৯',
        60=>'৬০',61=>'৬১',62=>'৬২',63=>'৬৩',64=>'৬৪',65=>'৬৫',66=>'৬৬',67=>'৬৭',68=>'৬৮',69=>'৬৯',
        70=>'৭০',71=>'৭১',72=>'৭২',73=>'৭৩',74=>'৭৪',75=>'৭৫',76=>'৭৬',77=>'৭৭',78=>'৭৮',79=>'৭৯',
        80=>'৮০',81=>'৮১',82=>'৮২',83=>'৮৩',84=>'৮৪',85=>'৮৫',86=>'৮৬',87=>'৮৭',88=>'৮৮',89=>'৮৯',
        90=>'৯০',91=>'৯১',92=>'৯২',93=>'৯৩',94=>'৯৪',95=>'৯৫',96=>'৯৬',97=>'৯৭',98=>'৯৮',99=>'৯৯'
        
    );
    public $arr_publish = array(1=>'Yes',2=>'No');
    public $arr_payment_method = array(1=>'Cash on delivery',2=>'Bkash');
    public $arr_status = array(1=>'Active',2=>'Inactive',3=>'Pending');
    public $arr_status_order = array(1=>'Ordered',2=>'Processing',3=>'Delivered');
    public $arr_tagtype = array(1=>'Category',2=>'Topics');

    public function siteoptions(){
        $this->Siteoptions = TableRegistry::get('Siteoptions');
        return $this->Siteoptions->getSiteOptionList();
    }
}
