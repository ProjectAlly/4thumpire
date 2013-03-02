<?php
class PolicyController extends AppController {

	public $name = 'Policy';
	public $helpers = array('Html','Form');	
	public $uses = array('Club', 'Policy');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));	
		$this->clubId = $this->getClubId();
		$id = $this->clubId['Club']['id'];
		$this-> set('policyInfo', $this->Policy->find('all' ,array('conditions' => 
																array('Policy.club_id' => $id))));
	}
	
	public function index() { }

	public function admin_index() { 
		if($this->isAdminLogged()){ }
	}
	
	public function admin_addPolicy(){
		if($this->Policy->save($this->data)) {
	 		$this->Policy->save(array("policy" => $this->request->data['Policy']['policy_info'],
									  "club_id" => $this->clubId['Club']['id']));
			$this->redirect(array('controller' => 'Policy',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}
	
	public function admin_removePolicy(){
		$id = $this->request->params['id'];
		$this->Policy->delete($id);				
		$this->redirect(array('controller' => 'Policy',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	
	public function admin_editPolicy(){
		$this->Policy->updateAll(array('Policy.policy' => "'".$this->data['Policy']['policy_info']."'"),  
									array('Policy.id' => $this->request->params['id']));
		$this->redirect(array('controller' => 'Policy',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
}
?>