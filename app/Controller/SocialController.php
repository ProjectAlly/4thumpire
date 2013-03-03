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
	
	public function index() {
	}

	public function admin_index() {
		if($this->isAdminLogged()){ }		
	}
	
	/* METHODS TO EDIT FEATURES */
	
	public function admin_editSocial(){
		$id = $this->request->params['id'];
		$this-> set('social', $this->Social->find('first', array('conditions' => array('Social.id' => $id))));
		if($this->data){
			$this->Social->updateAll(array('Social.name' => "'".$this->data['EditSocial']['name']."'",
										'Social.date' => "'".$this->data['EditSocial']['date']."'",
										'Social.information' => "'".$this->data['EditSocial']['info']."'"),
								     array('Social.id' => $id));
			$this->redirect(array('controller' => 'Social',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true));
		}
	}
	public function admin_editTour(){
		$id = $this->request->params['id'];
		$this-> set('tour', $this->Tour->find('first', array('conditions' => array('Tour.id' => $id))));
		if($this->data){
			$this->Tour->updateAll(array('Tour.information' => "'".$this->data['EditTour']['info']."'",
										'Tour.date' => "'".$this->data['EditTour']['date']."'"),
								     array('Tour.id' => $id));
			$this->redirect(array('controller' => 'Social',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true));
		}		
	}
	public function admin_editWeeklyevent(){
		$id = $this->request->params['id'];
		$this-> set('weekly_event', $this->WeeklyCricketEvent->find('first', array('conditions' => array('WeeklyCricketEvent.id' => $id))));
		if($this->data){
			$this->WeeklyCricketEvent->updateAll(array('WeeklyCricketEvent.event_name' => "'".$this->data['EditWeeklyevent']['name']."'",
													   'WeeklyCricketEvent.details' => "'".$this->data['EditWeeklyevent']['info']."'", 
													   'WeeklyCricketEvent.date' => "'".$this->data['EditWeeklyevent']['date']."'"),
								   			     array('WeeklyCricketEvent.id' => $id));
			$this->redirect(array('controller' => 'Social',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true));
		}		
	}
	public function admin_editAwardeve(){
		$id = $this->request->params['id'];
		$this-> set('award_eve', $this->Award->find('first', array('conditions' => array('Award.id' => $id))));
		if($this->data){
			$this->Award->updateAll(array('Award.name' => "'".$this->data['EditAwardeve']['name']."'",
										  'Award.info' => "'".$this->data['EditAwardeve']['info']."'",
										  'Award.date' => "'".$this->data['EditAwardeve']['date']."'"),
								    	 array('Award.id' => $id));
			$this->redirect(array('controller' => 'Social',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true));
		}		
	}	
	
	/* METHODS TO ADD FEATURES */
	
	public function admin_addSocial(){
		if($this->Social->save($this->data)) {
	 		$this->Social->save(array("name" => $this->data['AddSocial']['name'],
	 								"information" => $this->data['AddSocial']['info'],
	 								"date" => $this->data['AddSocial']['date'],	
									  	 "club_id" => $this->clubId['Club']['id']));
			$this->redirect(array('controller' => 'Social',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}
	public function admin_addTour(){
		if($this->Tour->save($this->data)) {
	 		$this->Tour->save(array("information" => $this->data['AddTour']['info'],
	 								"date" => $this->data['AddTour']['date'],	
									"club_id" => $this->clubId['Club']['id']));
			$this->redirect(array('controller' => 'Social',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}
	public function admin_addWeeklyevent(){
		if($this->WeeklyCricketEvent->save($this->data)) {
	 		$this->WeeklyCricketEvent->save(array("event_name" => $this->data['AddWeeklyevent']['name'],
	 											  "details" => $this->data['AddWeeklyevent']['details'], 
	 											  "date" => $this->data['AddWeeklyevent']['date'],
	 											  "club_id" => $this->clubId['Club']['id']));
	 		$this->redirect(array('controller' => 'Social',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}
	public function admin_addAwardeve(){
		if($this->Award->save($this->data)) {
	 		$this->Award->save(array("name" => $this->data['AddAwardeve']['name'],
	 								 "info" => $this->data['AddAwardeve']['info'],
	 								 "date" => $this->data['AddAwardeve']['date'],
	 								 "club_id" => $this->clubId['Club']['id']));
			$this->redirect(array('controller' => 'Social',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}

	/* METHOD TO REMOVE FEATURE */
	
	public function admin_removeSocial(){
		$id = $this->request->params['id'];
		$this->Social->delete($id);				
		$this->redirect(array('controller' => 'Social',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	public function admin_removeTour(){
		$id = $this->request->params['id'];
		$this->Tour->delete($id);				
		$this->redirect(array('controller' => 'Social',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	public function admin_removeOldplayer(){
		$id = $this->request->params['id'];
		$this->WeeklyCricketEvent->delete($id);				
		$this->redirect(array('controller' => 'Social',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	public function admin_removeAwardeve(){
		$id = $this->request->params['id'];
		$this->Award->delete($id);				
		$this->redirect(array('controller' => 'Social',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	
}
?>