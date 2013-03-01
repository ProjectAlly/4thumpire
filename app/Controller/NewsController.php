<?php
class NewsController extends AppController {

	public $name = 'News';
	public $helpers = array('Html','Form');	
	public $uses = array('Club', 'NewsAndUpdates', 'InternationalNews', 'ClubUpdate', 'WeeklyCricketEvent');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));	
		$this->clubId = $this->getClubId();
		$id = $this->clubId['Club']['id'];
		$this-> set('internationalInfo', $this->InternationalNews->find('all'));
		$this-> set('clubUpdateInfo', $this->ClubUpdate->find('all' ,array('conditions' => 
							array('ClubUpdate.club_id' => $id))));
		$this-> set('weekEventInfo', $this->WeeklyCricketEvent->find('all' ,array('conditions' => 
							array('WeeklyCricketEvent.club_id' => $id))));
		$this-> set('otherClubInfo', $this->ClubUpdate->find('all' ,array('conditions' =>  
							array('NOT' => array('ClubUpdate.club_id' => $id)))));
	}
	
	public function index() {
		
							
	}

	public function admin_index() {
			
	}
	
	/* METHODS TO EDIT FEATURES */

    public function admin_editInternationalNews() {

    }

    public function admin_editClubUpdates() {

    }

    public function admin_editWeeklyCricketNews() {

    }

    /* METHOD TO REMOVE FEATURE */

    public function admin_removeInternationalNews() {
        $id = $this->request->params['id'];
        $this->InternationalNews->delete($id);
        $this->redirect(array('controller' => 'News',
            'action' => 'index',
            'club' => $this->request->params['club'],
            'admin' => true));
    }

    public function admin_removeClubUpdates() {
        $id = $this->request->params['id'];
        $this->ClubUpdate->delete($id);
        $this->redirect(array('controller' => 'News',
            'action' => 'index',
            'club' => $this->request->params['club'],
            'admin' => true));
    }

    public function admin_removeWeeklyCricketNews() {
        $id = $this->request->params['id'];
        $this->WeeklyCricketEvent->delete($id);
        $this->redirect(array('controller' => 'News',
            'action' => 'index',
            'club' => $this->request->params['club'],
            'admin' => true));
    }

    /* METHODS TO ADD FEATURES */

    public function admin_addInternationalNews() {

    }

    public function admin_addClubUpdates() {

    }

    public function admin_addWeeklyCricketNews() {

    }
	
}
?>