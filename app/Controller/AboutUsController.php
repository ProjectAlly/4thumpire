<?php
class AboutUsController extends AppController {

	public $name = 'AboutUs';
	public $helpers = array('Html','Form');	
	public $uses = array('Club');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('all' ,array('conditions' => 
														array('Club.website' => $this->request->param['club']))));	
	}
	
	public function index() {
	}	
}
?>