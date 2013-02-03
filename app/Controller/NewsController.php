<?php
class NewsController extends AppController {

	public $name = 'News';
	public $helpers = array('Html','Form');	
	public $uses = array('Club', 'NewsAndUpdates', 'InternationalNews', 'ClubUpdate', 'WeeklyCricketEvent');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));	
		$this->clubId = $this->getClubId();
	}
	
	public function index() {
		$id = $this->clubId['Club']['id'];
		$this-> set('internationalInfo', $this->InternationalNews->find('all'));
		$this-> set('clubUpdateInfo', $this->ClubUpdate->find('all' ,array('conditions' => 
							array('ClubUpdate.club_id' => $id))));
		$this-> set('weekEventInfo', $this->WeeklyCricketEvent->find('all' ,array('conditions' => 
							array('WeeklyCricketEvent.club_id' => $id))));
		$this-> set('otherClubInfo', $this->ClubUpdate->find('all' ,array('conditions' =>  
							array('NOT' => array('ClubUpdate.club_id' => $id)))));
							
	}

	public function admin_index() {
		
	}
}
?>