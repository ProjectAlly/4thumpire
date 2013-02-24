<?php
class ClubHomeController extends AppController {

	public $name = 'ClubHome';
	public $helpers = array('Html','Form');	
	public $uses = array('Club', 'ClubNews', 'ClubSponsor');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));	
		$this->clubId = $this->getClubId();
														
	}
	
	public function index() {
		$id = $this->clubId['Club']['id'];
		$this-> set('clubNews', $this->ClubNews->find('all' ,array('conditions' => 
																array('ClubNews.club_id' => $id))));
		$this-> set('clubSponsors', $this->ClubSponsor->find('all' ,array('conditions' => 
																array('ClubSponsor.club_id' => $id))));
																
	}

	public function admin_index() {
		
	}
	
	public function admin_updateWelcomeMessage(){
		$this->Club->updateAll(array('Club.club_message' => "'".$this->data['ClubHome']['welcome_message']."'"),
							         array('Club.id' => $this->clubId['Club']['id']));
		$this->redirect(array('controller' => 'ClubHome', 'action' => 'index', 'club' => $this->request->params['club']));	
	}
	
	
}
?>