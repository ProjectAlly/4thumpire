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
		if($this->isAdminLogged()){ }
	}
	
	/* METHODS TO EDIT FEATURES */
	
	public function admin_editGround(){
		$this->Ground->updateAll(array('Ground.name' => "'".$this->data['Ground']['ground_name']."'",
			    					 'Ground.info' => "'".$this->data['Ground']['ground_info']."'"),
							     array('Ground.club_id' => $this->clubId['Club']['id']));
		$this->redirect(array('controller' => 'Club',
								'action' => 'index',
								'club' => $this->request->params['club'],
								'admin' => true));
	}

	public function admin_editCommittee(){
		$id = $this->request->params['id'];
		$this-> set('committee', $this->Committee->find('first', array('conditions' => 
																		array('Committee.id' => $id))));
		if($this->data){
			$this->Committee->updateAll(array('Committee.member_name' => "'".$this->data['EditCommittee']['name']."'",
				    						 'Committee.member_info' => "'".$this->data['EditCommittee']['info']."'"),
								     array('Committee.id' => $id));
			$this->redirect(array('controller' => 'Club',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true, '#' =>'collapseTwo'));
		}
	}

	public function admin_editSubscription(){
		$id = $this->request->params['id'];
		$this-> set('subscription', $this->Subscription->find('first', array('conditions' => 
																		array('Subscription.id' => $id))));
		if($this->data){
			$this->Subscription->updateAll(array('Subscription.member_name' => "'".$this->data['EditSubscription']['name']."'",
				    						 'Subscription.member_info' => "'".$this->data['EditSubscription']['info']."'"),
								     array('Subscription.id' => $id));
			$this->redirect(array('controller' => 'Club',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true));
		}
	}
	public function admin_editScholarship(){
		$id = $this->request->params['id'];
		$this-> set('scholarship', $this->Scholarship->find('first', array('conditions' => 
																		array('Scholarship.id' => $id))));
		if($this->data){
			$this->Scholarship->updateAll(array('Scholarship.name' => "'".$this->data['EditScholarship']['name']."'",
				    						    'Scholarship.information' => "'".$this->data['EditScholarship']['info']."'"),
								   		  array('Scholarship.id' => $id));
			$this->redirect(array('controller' => 'Club',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true));
		}		
	}
	public function admin_editMark(){
		$id = $this->request->params['id'];
		$this-> set('mark', $this->Marks->find('first', array('conditions' => 
																		array('Marks.id' => $id))));
		if($this->data){
			$this->Marks->updateAll(array('Marks.award_name' => "'".$this->data['EditMarks']['name']."'",
				    						 'Marks.award_info' => "'".$this->data['EditMarks']['info']."'"),
								     array('Marks.id' => $id));
			$this->redirect(array('controller' => 'Club',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true));
		}		
	}
	public function admin_editPartner(){
		$id = $this->request->params['id'];
		$this-> set('partner', $this->Partner->find('first', array('conditions' => 
																		array('Partner.id' => $id))));
		if($this->data){
			$this->Partner->updateAll(array('Partner.name' => "'".$this->data['EditPartner']['name']."'"),
								    	 array('Partner.id' => $id));
			$this->redirect(array('controller' => 'Club',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true));
		}		
	}	
	
	/* METHODS TO ADD FEATURES */
	
	public function admin_addCommittee(){
		if($this->Committee->save($this->data)) {
	 		$this->Committee->save(array("member_name" => $this->data['AddCommittee']['name'],
	 									 "member_info" => $this->data['AddCommittee']['info'],	
									  	 "club_id" => $this->clubId['Club']['id']));
			$this->redirect(array('controller' => 'Club',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}
	public function admin_addSubscription(){
		if($this->Subscription->save($this->data)) {
	 		$this->Subscription->save(array("member_name" => $this->data['AddSubscription']['name'],
	 									 "member_info" => $this->data['AddSubscription']['info'],	
									  	 "club_id" => $this->clubId['Club']['id']));
			$this->redirect(array('controller' => 'Club',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}
	public function admin_addScholarship(){
		if($this->Scholarship->save($this->data)) {
	 		$this->Scholarship->save(array("name" => $this->data['AddScholarship']['name'],
	 									 "information" => $this->data['AddScholarship']['info'],	
									  	 "club_id" => $this->clubId['Club']['id']));
			$this->redirect(array('controller' => 'Club',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}
	public function admin_addMark(){
		if($this->Marks->save($this->data)) {
	 		$this->Marks->save(array("award_name" => $this->data['AddMark']['name'],
	 									 "award_info" => $this->data['AddMark']['info'],	
									  	 "club_id" => $this->clubId['Club']['id']));
	 		$this->redirect(array('controller' => 'Club',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}
	public function admin_addPartner(){
		if($this->Partner->save($this->data)) {
	 		$this->Partner->save(array("name" => $this->data['AddPartner']['name'],	
									  	 "club_id" => $this->clubId['Club']['id']));
			$this->redirect(array('controller' => 'Club',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}

	/* METHOD TO REMOVE FEATURE */
	
	public function admin_removeCommittee(){
		$id = $this->request->params['id'];
		$this->Committee->delete($id);				
		$this->redirect(array('controller' => 'Club',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	public function admin_removeSubscription(){
		$id = $this->request->params['id'];
		$this->Subscription->delete($id);				
		$this->redirect(array('controller' => 'Club',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	public function admin_removeScholarship(){
		$id = $this->request->params['id'];
		$this->Scholarship->delete($id);				
		$this->redirect(array('controller' => 'Club',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	public function admin_removeMark(){
		$id = $this->request->params['id'];
		$this->Marks->delete($id);				
		$this->redirect(array('controller' => 'Club',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	public function admin_removePartner(){
		$id = $this->request->params['id'];
		$this->Partner->delete($id);				
		$this->redirect(array('controller' => 'Club',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	
}
?>