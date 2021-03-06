<?php
class AboutUsController extends AppController {

	public $name = 'AboutUs';
	public $helpers = array('Html','Form');	
	public $uses = array('Club');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this->set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));
		$this->clubId = $this->getClubId();
	}
	
	public function index() {
		
	}	
	
	public function admin_index() {
		if($this->isAdminLogged()){ }		
	}

	public function admin_updateAboutUs(){
		$this->Club->updateAll(array('Club.about_us_title' => "'".$this->data['AboutUs']['about_us_title']."'",
			    					 'Club.about_us' => "'".$this->data['AboutUs']['about_us']."'", 
									 'Club.date_modified' =>"'".CakeTime::format('Y-m-d H:i:s', time())."'"),
							         array('Club.id' => $this->clubId['Club']['id']));
		$this->redirect(array('controller' => 'AboutUs', 'action' => 'index', 'club' => $this->request->params['club']));	
	}
}
?>