<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Home';
	public $helpers = array('Html','Form');
	

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Register', 'Query', 'NewsAndUpdates', 'ClubUpdates', 'InternationalNews');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function beforeFilter(){
		$this->set('temp_news_updates', $this->NewsAndUpdates->find('all'));
		$this->set('temp_club_updates', $this->ClubUpdates->find('all'));
		$this->set('temp_international_news', $this->InternationalNews->find('all'));
	}
	
	public function index() {
	}
	
	public function aboutUs() {
	}
	
	public function products() {
	}
	
	public function members() {
	}
	
	public function newsAndUpdates() {
	}
	
	public function blog() {
	}

	public function contactUs() {
	}
	
	public function signUp() {
	}

	public function registerUser(){

	}
	
	public function registerUser_form2(){

	}
	
	public function submitQuery(){
		if(!empty($this->data)){
			if($this->Query->save($this->data)){
				//echo "Query Submitted succesfully";
				$this->redirect(array('controller' => 'Home', 'action' => 'contactUs'));
			} else {
				$this->Session->setFlash('Something went wrong please try again.');
			}
		}
	}
	
}
