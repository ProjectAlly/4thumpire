<?php
class ClubController extends AppController {

	public $name = 'Club';
	public $helpers = array('Html','Form');	
	public $uses = array('Club', 'Ground', 'Committee', 'Subscription', 'Marks', 'Scholarship', 'Partner');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this->set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));
		$this->clubId = $this->getClubId();
		$id = $this->clubId['Club']['id'];
		$this-> set('groundInfo', $this->Ground->find('all' ,array('conditions' => 
							array('Ground.club_id' => $id))));
		$this-> set('committeeInfo', $this->Committee->find('all' ,array('conditions' => 
							array('Committee.club_id' => $id))));
		$this-> set('subscriptionInfo', $this->Subscription->find('all' ,array('conditions' => 
							array('Subscription.club_id' => $id))));
		$this-> set('marksInfo', $this->Marks->find('all' ,array('conditions' => 
							array('Marks.club_id' => $id))));
		$this-> set('scholarshipInfo', $this->Scholarship->find('all' ,array('conditions' => 
							array('Scholarship.club_id' => $id))));
		$this-> set('partnerInfo', $this->Partner->find('all' ,array('conditions' => 
							array('Partner.club_id' => $id))));
							
	}
	
	public function index() {
	}	
	
	public function admin_index() {
	}
	
	public function admin_edit_ground(){
		$this->clubId = $this->getClubId();
		$this->Ground->updateAll(array('Ground.name' => $this->data['Ground']['ground_name'],
			    					 'Ground.info' => $this->data['Ground']['ground_info']),
							         array('Ground.club_id' => $this->clubId));
		echo "success";
		//$this->redirect(array('controller' => 'Club', 'action' => 'index', 'admin' => 'true'));	
	}
	
	
	
}
?>