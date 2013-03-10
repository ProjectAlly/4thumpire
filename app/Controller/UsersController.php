<?php
class UsersController extends AppController{
	var $name = 'Users';
	public $helpers = array('Time','Html','Form');	
	public $uses = array('Club', 'Authenticate');
	public $components = array('Session', 'Cookie');
	
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));	
		$this->clubId = $this->getClubId();
	}
	public function index(){
	
	}
	public function admin_index(){
		if($this->Session->check('username')) {
				$this->redirect(array('controller'=>'Dashboard', 
										'action'=>'index', 
										'admin'=>true, 
										'club' => $this->request->params['club']));
		}
	}
    public function admin_authenticate(){
    		if($this->data) {
				$admin = $this->Authenticate->find('first',
											array('conditions' =>
													array('AND'=>
																array(
										      				  	  	'Authenticate.user_name' => $this->data['User']['admin_username'],
																	'Authenticate.password' => $this->data['User']['admin_password'],
																	'Authenticate.club_id' => $this->clubId['Club']['id']
																)
									     			 )
									     	));
    		} 
			if($admin == null){
                   $this->Session->setFlash('Incorrect Username & Password combination..!!', 'error'); 
            	   $this->redirect(array('controller' => 'Users',
										'action' => 'index', 
										'club' => $this->request->params['club'],
										'admin' => true));
                   
			}
			else{
				$this->Session->write('clubname', $this->request->params['club']);
				$this->Session->write('clubid', $this->clubId['Club']['id']);
				$this->Session->write('username', $this->data['User']['admin_username']);
                if(isset($this->data['User']['remember_me'])){
                    $this->Cookie->write('name', $this->data['User']['admin_username']);
                    $this->Cookie->write('password', $this->data['User']['admin_password']);
                }
                $this->redirect(array('controller' => 'Dashboard',
										'action' => 'index', 
										'club' => $this->request->params['club'],
										'admin' => true));

			}
	}
    public function admin_logout() {
		$this->Authenticate->updateAll(array('Authenticate.last_logged_in' =>"'".CakeTime::format('Y-m-d H:i:s', time())."'"),
									   array('Authenticate.club_id' => $this->clubId['Club']['id']));
    	$this->Session->destroy();
    }
}
?>
