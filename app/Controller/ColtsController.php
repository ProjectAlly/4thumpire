<?php
class ColtsController extends AppController {

	public $name = 'Colts';
	public $helpers = array('Html','Form');	
	public $uses = array('Club', 'Colt', 'ClubWelfareOfficer');
	
	public function beforeFilter(){
		$this->layout = 'club';
		$this -> set('club_info', $this->Club->find('first' ,array('conditions' => 
														            array('Club.website' => $this->request->params['club']))));
		$this->clubId = $this->getClubId();
        $id = $this->clubId['Club']['id'];
        $this-> set('coltInfo', $this->Colt->find('all' ,array('conditions' =>
                                                                array('Colt.club_id' => $id))));
        $this-> set('welfareOfficerInfo', $this->ClubWelfareOfficer->find('all' ,array('conditions' =>
                                                                                        array('ClubWelfareOfficer.club_id' => $id))));
	}
	
	public function index() {

	}	
	
	public function admin_index() {
		if($this->isAdminLogged()){ }	
	}

    /* METHODS TO EDIT FEATURES */

    public function editCotls() {

    }

    public function editChairmaninfo() {

    }

    public function editagegroup() {

    }

    public function editConduct() {

    }

    public function editClubWelfareOfficer() {

    }

    /* METHODS TO ADD FEATURES */

    public function addCotls() {

    }

    public function addChairmaninfo() {

    }

    public function addagegroup() {

    }

    public function addConduct() {

    }

    public function addClubWelfareOfficer() {

    }
    /* METHOD TO REMOVE FEATURE */

    public function removeCotls() {

    }

    public function removeChairmaninfo() {

    }

    public function removeagegroup() {

    }

    public function removeConduct() {

    }

    public function removeClubWelfareOfficer() {

    }
}
?>