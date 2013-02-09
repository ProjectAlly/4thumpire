<?php
class UsersController extends AppController{
	var $name = 'Users';
	public $helpers = array('Html','Form');	
	public $uses = array('Club');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));	
		$this->clubId = $this->getClubId();
														
	}
	public function admin_index(){
	
	}
	public function index(){
			if(!empty($this->data)) {
				$admin = $this->Club->find('first',
											array('conditions' =>
													array('AND'=>
																array(
										      				  	  	'Club.admin_username' => $this->data['User']['admin_username'],
																	'Club.admin_password' => $this->data['User']['admin_password']
															 	 )
									     			 )
									     	));
				
			}
			if($admin == null){ echo "Incorrect username password"; }
			else{
				$_SESSION['username'] = $this->data['User']['admin_username'];
				$this->redirect(array('controller' => 'Dashboard', 'action' => 'index','admin'=>true));
			}
	}
	
	
}
?>
