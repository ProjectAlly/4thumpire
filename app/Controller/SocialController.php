<?php
class SocialController extends AppController {

	public $name = 'Social';
	public $helpers = array('Html','Form');	
	public $uses = array('Club', 'Social', 'Tour', 'WeeklyCricketEvent', 'Award');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this->set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));
		$this->clubId = $this->getClubId();
	}
	
	public function index() {
		$id = $this->clubId['Club']['id'];
		$this-> set('socialInfo', $this->Social->find('all' ,array('conditions' => 
							array('Social.club_id' => $id))));
		$this-> set('tourInfo', $this->Tour->find('all' ,array('conditions' => 
							array('Tour.club_id' => $id))));
		$this-> set('weekEventInfo', $this->WeeklyCricketEvent->find('all' ,array('conditions' => 
							array('WeeklyCricketEvent.club_id' => $id))));
		$this-> set('awardInfo', $this->Award->find('all' ,array('conditions' => 
							array('Award.club_id' => $id))));
							
	}

	public function admin_index() {
		if($this->isAdminLogged()){ }		
	}
}
?>