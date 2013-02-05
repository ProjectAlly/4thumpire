<?php
class HistoryController extends AppController {

	public $name = 'History';
	public $helpers = array('Html','Form');	
	public $uses = array('Club', 'Heritage', 'Honour', 'OldPlayer', 'Title');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this->set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));
		$this->clubId = $this->getClubId();
	}
	
	public function index() {
		$id = $this->clubId['Club']['id'];
		$this-> set('heritageInfo', $this->Heritage->find('all' ,array('conditions' => 
							array('Heritage.club_id' => $id))));
		$this-> set('honourInfo', $this->Honour->find('all' ,array('conditions' => 
							array('Honour.club_id' => $id))));
		$this-> set('oldPlayerInfo', $this->OldPlayer->find('all' ,array('conditions' => 
							array('OldPlayer.club_id' => $id))));
		$this-> set('titleInfo', $this->Title->find('all' ,array('conditions' => 
							array('Title.club_id' => $id))));
							
	}	
	
	public function admin_index() {
		
	}
}
?>