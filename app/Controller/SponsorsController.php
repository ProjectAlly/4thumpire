<?php
class SponsorsController extends AppController {

	public $name = 'Sponsors';
	public $helpers = array('Html','Form');	
	public $uses = array('Club');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));	
	}
	
	public function index() {
	}	
	
	public function admin_index() {
		if($this->isAdminLogged()){ }		
	}
}
?>