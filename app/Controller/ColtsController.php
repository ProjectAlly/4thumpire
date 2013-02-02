<?php
class ColtsController extends AppController {

	public $name = 'Colts';
	public $helpers = array('Html','Form');	
	public $uses = array('Club','Colt');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));
		$this->clubId = $this->getClubId();	
	}
	
	public function index() {
		$id = $this->clubId['Club']['id'];
		$this-> set('coltInfo', $this->Colt->find('all' ,array('conditions' => 
							array('Colt.club_id' => $id))));
	}	
}
?>