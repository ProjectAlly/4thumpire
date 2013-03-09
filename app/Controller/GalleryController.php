<?php
class GalleryController extends AppController {

	public $name = 'Gallery';
	public $helpers = array('Html','Form');	
	public $uses = array('Club', 'ClubPhoto', 'ClubVideo', 'AwardPhoto', 'Social');
	
	public function beforeFilter(){
		$this->layout = 'uploader';
		$this->set('club_info', $this->Club->find('first' ,array('conditions' => 
														array('Club.website' => $this->request->params['club']))));
		$this->clubId = $this->getClubId();
	}
	
	public function index() {
		$id = $this->clubId['Club']['id'];
		$this->set('clubPhotoInfo', $this->ClubPhoto->find('all' ,array('conditions' => 
																		array('ClubPhoto.club_id' => $id))));
		$this->set('clubVideoInfo', $this->ClubVideo->find('all' ,array('conditions' => 
																		array('ClubVideo.club_id' => $id))));
		$this->set('awardInfo', $this->AwardPhoto->find('all' ,array('conditions' => 
																		array('AwardPhoto.club_id' => $id))));
		$this->set('socialInfo', $this->Social->find('all' ,array('conditions' => 
																		array('Social.club_id' => $id))));
	}	
	
	public function admin_index() {
		if($this->isAdminLogged()){ }		
	}
}
?>