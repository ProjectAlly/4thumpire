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
		$this-> set('internationalInfo', $this->InternationalNews->find('all', array('conditions' => 
							array('InternationalNews.club_id' => $id))));
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
		if($this->isAdminLogged()){ }	
	}
	
	/* METHODS TO EDIT FEATURES */

    public function admin_editInternationalNews() {
        $id = $this->request->params['id'];
        $this-> set('internationalnews', $this->InternationalNews->find('first', array('conditions' => array('InternationalNews.id' => $id))));
        if($this->data){
            $this->InternationalNews->updateAll(array('InternationalNews.title' => "'".$this->data['EditInternationalNews']['title']."'",
                                                      'InternationalNews.description' => "'".$this->data['EditInternationalNews']['description']."'",
            										  'InternationalNews.date_modified' =>"'".CakeTime::format('Y-m-d H:i:s', time())."'"),
                                                array('InternationalNews.id' => $id));
            $this->redirect(array('controller' => 'news',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    public function admin_editClubUpdates() {
        $id = $this->request->params['id'];
        $this-> set('clubupdates', $this->ClubUpdate->find('first', array('conditions' => array('ClubUpdate.id' => $id))));
        if($this->data){
            $this->ClubUpdate->updateAll(array('ClubUpdate.title' => "'".$this->data['EditClubUpdates']['title']."'",
                                               'ClubUpdate.description' => "'".$this->data['EditClubUpdates']['description']."'",
            								   'ClubUpdate.date_modified' =>"'".CakeTime::format('Y-m-d H:i:s', time())."'"),
                                         array('ClubUpdate.id' => $id));
            $this->redirect(array('controller' => 'news',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    public function admin_editWeeklyCricketNews() {
        $id = $this->request->params['id'];
        $this-> set('weeklycricketnews', $this->WeeklyCricketEvent->find('first', array('conditions' => array('WeeklyCricketEvent.id' => $id))));
        if($this->data){
            $this->WeeklyCricketEvent->updateAll(array('WeeklyCricketEvent.event_name' => "'".$this->data['EditWeeklyCricketNews']['eventname']."'",
                                                       'WeeklyCricketEvent.details' => "'".$this->data['EditWeeklyCricketNews']['details']."'",
            										   'WeeklyCricketEvent.date_modified' =>"'".CakeTime::format('Y-m-d H:i:s', time())."'"),
                array('WeeklyCricketEvent.id' => $id));
            $this->redirect(array('controller' => 'news',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
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
        if($this->InternationalNews->save($this->data)){
            $this->InternationalNews->save(array('title' => $this->data['AddInternationalNews']['title'],
                                                 'description' => $this->data['AddInternationalNews']['description'],
	 											 'date_created' => CakeTime::format('Y-m-d H:i:s', time()),
            									 'club_id' => $this->clubId['Club']['id']));
            $this->redirect(array('controller' => 'news',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    public function admin_addClubUpdates() {
        if($this->ClubUpdate->save($this->data)){
            $this->ClubUpdate->save(array('title' => $this->data['AddClubUpdates']['title'],
                                                 'description' => $this->data['AddClubUpdates']['description'],
	 											 'date_created' => CakeTime::format('Y-m-d H:i:s', time()),
                                                 'club_id' => $this->clubId['Club']['id']));
            $this->redirect(array('controller' => 'news',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    public function admin_addWeeklyCricketNews() {
        if($this->WeeklyCricketEvent->save($this->data)){
            $this->WeeklyCricketEvent->save(array('event_name' => $this->data['AddWeeklyCricketNews']['eventname'],
                                                  'details' => $this->data['AddWeeklyCricketNews']['details'],
	 											  'date_created' => CakeTime::format('Y-m-d H:i:s', time()),
                                                  'club_id' => $this->clubId['Club']['id']));
            $this->redirect(array('controller' => 'news',
                                  'action' => 'index',
                                  'club' => $this->request->params['club'],
                                  'admin' => true));
        }
    }
	
}
?>