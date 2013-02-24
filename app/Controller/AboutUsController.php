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
		
	}
	public function admin_updateAboutUs(){
		$this->Club->updateAll(array('Club.about_us_title' => $this->data['AboutUs']['about_us_title'],
			    					 'Club.about_us' => $this->data['AboutUs']['about_us']),
							         array('Club.id' => $this->clubId));
		$this->redirect(array('controller' => 'AboutUs', 'action' => 'index', 'club' => 'rc'));	
	}
}
?>