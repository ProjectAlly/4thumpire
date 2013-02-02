<?php
class PolicyController extends AppController {

	public $name = 'Policy';
	public $helpers = array('Html','Form');	
	public $uses = array('Club', 'Policy');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));	
		$this->clubId = $this->getClubId();
														
	}
	
	public function index() {
		$id = $this->clubId['Club']['id'];
		$this-> set('policyInfo', $this->Policy->find('all' ,array('conditions' => 
																array('Policy.club_id' => $id))));
																
	}	
}
?>