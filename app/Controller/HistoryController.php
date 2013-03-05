<?php
class HistoryController extends AppController {

	public $name = 'History';
	public $helpers = array('Html','Form');	
	public $uses = array('Club', 'Heritage', 'Honour', 'OldPlayer', 'Title');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this->set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));
		$this->clubId = $this->getClubId();
		$id = $this->clubId['Club']['id'];
		$this-> set('heritageInfo', $this->Heritage->find('all' ,array('conditions' => 
							array('Heritage.club_id' => $id))));
		$this-> set('honourInfo', $this->Honour->find('all' ,array('conditions' => 
							array('Honour.club_id' => $id))));
		$this-> set('oldPlayerInfo', $this->OldPlayer->find('all' ,array('conditions' => 
							array('OldPlayer.club_id' => $id))));
		$this-> set('titleInfo', $this->Title->find('all' ,array('conditions' => 
							array('Title.club_id' => $id))));
	}
	
	public function index() {
							
	}	
	
	public function admin_index() {
		if($this->isAdminLogged()){ }
	}
	
	/* METHODS TO EDIT FEATURES */
	
	public function admin_editHeritage(){
		$id = $this->request->params['id'];
		$this-> set('heritage', $this->Heritage->find('first', array('conditions' => array('Heritage.id' => $id))));
		if($this->data){
			$this->Heritage->updateAll(array('Heritage.information' => "'".$this->data['EditHeritage']['info']."'",
											 'Heritage.date_modified' =>"'".CakeTime::format('Y-m-d H:i:s', time())."'"),
								       array('Heritage.id' => $id));
			$this->redirect(array('controller' => 'History',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true));
		}
	}
	public function admin_editHonour(){
		$id = $this->request->params['id'];
		$this-> set('honour', $this->Honour->find('first', array('conditions' => array('Honour.id' => $id))));
		if($this->data){
			$this->Honour->updateAll(array('Honour.name' => "'".$this->data['EditHonour']['name']."'",
										   'Honour.date_modified' =>"'".CakeTime::format('Y-m-d H:i:s', time())."'"),
								     array('Honour.id' => $id));
			$this->redirect(array('controller' => 'History',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true));
		}		
	}
	public function admin_editOldplayer(){
		$id = $this->request->params['id'];
		$this-> set('oldPlayer', $this->OldPlayer->find('first', array('conditions' => array('OldPlayer.id' => $id))));
		if($this->data){
			$this->OldPlayer->updateAll(array('OldPlayer.name' => "'".$this->data['EditOldPlayer']['name']."'",
			 								  'OldPlayer.date_modified' =>"'".CakeTime::format('Y-m-d H:i:s', time())."'"),
								        array('OldPlayer.id' => $id));
			$this->redirect(array('controller' => 'History',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true));
		}		
	}
	public function admin_editTitle(){
		$id = $this->request->params['id'];
		$this-> set('title', $this->Title->find('first', array('conditions' => array('Title.id' => $id))));
		if($this->data){
			$this->Title->updateAll(array('Title.name' => "'".$this->data['EditTitle']['name']."'",
										  'Title.info' => "'".$this->data['EditTitle']['info']."'",
										  'Title.date_modified' =>"'".CakeTime::format('Y-m-d H:i:s', time())."'"),
								    array('Title.id' => $id));
			$this->redirect(array('controller' => 'History',
									'action' => 'index',
									'club' => $this->request->params['club'],
									'admin' => true));
		}		
	}	
	
	/* METHODS TO ADD FEATURES */
	
	public function admin_addHeritage(){
		if($this->Heritage->save($this->data)) {
	 		$this->Heritage->save(array("information" => $this->data['AddHeritage']['info'],
	 									"date_created" => CakeTime::format('Y-m-d H:i:s', time()),	
									  	"club_id" => $this->clubId['Club']['id']));
			$this->redirect(array('controller' => 'History',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}
	public function admin_addHonour(){
		if($this->Honour->save($this->data)) {
	 		$this->Honour->save(array("name" => $this->data['AddHonour']['name'],
	 								  "date_created" => CakeTime::format('Y-m-d H:i:s', time()),	
									  "club_id" => $this->clubId['Club']['id']));
			$this->redirect(array('controller' => 'History',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}
	public function admin_addOldplayer(){
		if($this->OldPlayer->save($this->data)) {
	 		$this->OldPlayer->save(array("name" => $this->data['AddOldPlayer']['name'],
	 									 "date_created" => CakeTime::format('Y-m-d H:i:s', time()),	
									  	 "club_id" => $this->clubId['Club']['id']));
	 		$this->redirect(array('controller' => 'History',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}
	public function admin_addTitle(){
		if($this->Title->save($this->data)) {
	 		$this->Title->save(array("name" => $this->data['AddTitle']['name'],
	 								 "info" => $this->data['AddTitle']['info'],
	 							     "date_created" => CakeTime::format('Y-m-d H:i:s', time()),
									 "club_id" => $this->clubId['Club']['id']));
			$this->redirect(array('controller' => 'History',
									'action' => 'index', 
									'club' => $this->request->params['club'],
									'admin' => true));
		}   	
	}

	/* METHOD TO REMOVE FEATURE */
	
	public function admin_removeHeritage(){
		$id = $this->request->params['id'];
		$this->Heritage->delete($id);				
		$this->redirect(array('controller' => 'History',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	public function admin_removeHonour(){
		$id = $this->request->params['id'];
		$this->Honour->delete($id);				
		$this->redirect(array('controller' => 'History',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	public function admin_removeOldplayer(){
		$id = $this->request->params['id'];
		$this->OldPlayer->delete($id);				
		$this->redirect(array('controller' => 'History',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	public function admin_removeTitle(){
		$id = $this->request->params['id'];
		$this->Title->delete($id);				
		$this->redirect(array('controller' => 'History',
								'action' => 'index', 
								'club' => $this->request->params['club'],
								'admin' => true));
	}
	
}
?>