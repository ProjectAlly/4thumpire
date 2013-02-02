<?php
class ContactUsController extends AppController {

	public $name = 'ContactUs';
	public $helpers = array('Html','Form');	
	public $uses = array('ContactUs');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->ContactUs->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));	
	}
	
	public function index() {
	}	
}
?>