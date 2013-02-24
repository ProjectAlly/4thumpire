<?php
class DashboardController extends AppController{
	var $name = 'Dashboard';
	public $helpers = array('Html','Form');	
	public $uses = array('Club');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));	
		$this->clubId = $this->getClubId();
														
	}
	public function index(){
		if(isset($_SESSION['username'])){
			 $this->redirect(array('controller' => 'Dashboard', 
										'action' => 'admin_index', 
										'club' => $this->request->params['club'],
										'admin' => true));
			 
		} else { $this->redirect(array('controller' => 'Users', 
										'action' => 'admin_index', 
										'club' => $this->request->params['club'],
										'admin' => true)); 
		}
	}
	
	public function admin_index(){
		
	}
	
	
}
?>
