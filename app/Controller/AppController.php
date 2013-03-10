<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');
App::uses('CakeTime', 'Utility');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	//public $theme = 'TwitterBootstrap';
	public $components = array('DebugKit.Toolbar','Session','FileUpload.Upload');
	var $helpers = array('Cache','Html','Session','Form','Combinator.Combinator','FileUpload.UploadForm');
	
	public function beforeFilter(){
		$this->Upload->clubid = $this->Session->read('clubid');
		$this->Upload->club = $this->Session->read('clubname');
	}
	
	function getClubId(){
		return $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club'])));
	}
	
	function isAdminLogged(){
		if($this->Session->read('clubid')) {
			return true;
		}
		else {
			$this->Session->setFlash('<strong>Please</strong> Log in first..!!','error');
			$this->redirect(array('controller'=>'Users', 
								'action'=>'index', 
								'admin'=>true, 
								'club' => $this->request->params['club']));
			return false;
		} 
	}
}
