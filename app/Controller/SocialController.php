<?php
class SocialController extends AppController {

	public $name = 'Social';
	public $helpers = array('Html','Form');	
	public $uses = array('Club');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));	
	}
	
	public function index() {
	}	
}
?>