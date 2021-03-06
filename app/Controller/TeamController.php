<?php
	class TeamController extends AppController {
	
	public $name = 'Team';
	public $helpers = array('Html','Form');	
	public $uses = array('Club');
	
		
	public function beforeFilter(){
		$this->layout = 'club';
		$this->set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));
		$this->clubId = $this->getClubId();
	}	
		
	public function index() {
	}

	public function admin_index() {
		if($this->isAdminLogged()){ }
	}
}
?>