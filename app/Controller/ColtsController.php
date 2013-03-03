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

    public function admin_editColts() {
        $id = $this->request->params['id'];
        $this-> set('colt', $this->Colt->find('first', array('conditions' => array('Colt.id' => $id))));
        if($this->data){
            $this->Colt->updateAll(array('Colt.colt_info' => "'".$this->data['EditColts']['colt_info']."'"),
                array('Colt.id' => $id));
            $this->redirect(array('controller' => 'Colts',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    public function admin_editChairmanInfo() {
        $id = $this->request->params['id'];
        $this-> set('chairmaninfo', $this->Colt->find('first', array('conditions' => array('Colt.id' => $id))));
        if($this->data){
            $this->Colt->updateAll(array('Colt.chairman' => "'".$this->data['EditChairmanInfo']['chairman']."'",
                    'Colt.chairman_info' => "'".$this->data['EditChairmanInfo']['chairman_info']."'"),
                array('Colt.id' => $id));
            $this->redirect(array('controller' => 'Colts',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    public function admin_editAgeGroup() {
        $id = $this->request->params['id'];
        $this-> set('agegroup', $this->Colt->find('first', array('conditions' => array('Colt.id' => $id))));
        if($this->data){
            $this->Colt->updateAll(array('Colt.age_group' => "'".$this->data['EditAgeGroup']['age_group']."'"),
                array('Colt.id' => $id));
            $this->redirect(array('controller' => 'Colts',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    public function admin_editConduct() {
        $id = $this->request->params['id'];
        $this-> set('conduct', $this->Colt->find('first', array('conditions' => array('Colt.id' => $id))));
        if($this->data){
            $this->Colt->updateAll(array('Colt.colt_conduct' => "'".$this->data['EditConduct']['colt_conduct']."'"),
                array('Colt.id' => $id));
            $this->redirect(array('controller' => 'Colts',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    public function admin_editClubWelfareOfficer() {
        $id = $this->request->params['id'];
        $this-> set('clubwelfareofficer', $this->ClubWelfareOfficer->find('first', array('conditions' => array('ClubWelfareOfficer.id' => $id))));
        if($this->data){
            $this->ClubWelfareOfficer->updateAll(array('ClubWelfareOfficer.name' => "'".$this->data['EditClubWelfareOfficer']['name']."'",
                    'ClubWelfareOfficer.information' => "'".$this->data['EditClubWelfareOfficer']['information']."'"),
                array('ClubWelfareOfficer.id' => $id));
            $this->redirect(array('controller' => 'Colts',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    /* METHODS TO ADD FEATURES */

    public function admin_addCotls() {
        if($this->Colt->save($this->data)){
            $this->Colt->save(array('title' => $this->data['AddColt']['title'],
                'description' => $this->data['AddColt']['description'],
                'club_id' => $this->clubId['Club']['id']));
            $this->redirect(array('controller' => 'news',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    public function admin_addChairmanInfo() {
        if($this->Colt->save($this->data)){
            $this->Colt->save(array('title' => $this->data['AddColt']['title'],
                'description' => $this->data['AddColt']['description'],
                'club_id' => $this->clubId['Club']['id']));
            $this->redirect(array('controller' => 'news',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    public function admin_addAgeGroup() {
        if($this->Colt->save($this->data)){
            $this->Colt->save(array('colt_info' => $this->data['AddAgeGroup']['colt_info'],
                'description' => $this->data['AddAgeGroup']['description'],
                'club_id' => $this->clubId['Club']['id']));
            $this->redirect(array('controller' => 'news',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    public function admin_addConduct() {
        if($this->Colt->save($this->data)){
            $this->Colt->save(array('title' => $this->data['AddColt']['title'],
                'description' => $this->data['AddColt']['description'],
                'club_id' => $this->clubId['Club']['id']));
            $this->redirect(array('controller' => 'news',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }

    public function admin_addClubWelfareOfficer() {
        if($this->Colt->save($this->data)){
            $this->ClubWelfareOfficer->save(array('title' => $this->data['AddClubWelfareOfficer']['title'],
                'description' => $this->data['AddClubWelfareOfficer']['description'],
                'club_id' => $this->clubId['Club']['id']));
            $this->redirect(array('controller' => 'news',
                'action' => 'index',
                'club' => $this->request->params['club'],
                'admin' => true));
        }
    }
    /* METHOD TO REMOVE FEATURE */

    public function admin_removeCotls() {
        $id = $this->request->params['id'];
        $this->Colt->delete($id);
        $this->redirect(array('controller' => 'Colts',
            'action' => 'index',
            'club' => $this->request->params['club'],
            'admin' => true));
    }

    public function admin_removeChairmanInfo() {
        $id = $this->request->params['id'];
        $this->Colt->delete($id);
        $this->redirect(array('controller' => 'Colts',
            'action' => 'index',
            'club' => $this->request->params['club'],
            'admin' => true));
    }

    public function admin_removeAgeGroup() {
        $id = $this->request->params['id'];
        $this->Colt->delete($id);
        $this->redirect(array('controller' => 'Colts',
            'action' => 'index',
            'club' => $this->request->params['club'],
            'admin' => true));
    }

    public function admin_removeConduct() {
        $id = $this->request->params['id'];
        $this->Colt->delete($id);
        $this->redirect(array('controller' => 'Colts',
            'action' => 'index',
            'club' => $this->request->params['club'],
            'admin' => true));
    }

    public function admin_removeClubWelfareOfficer() {
        $id = $this->request->params['id'];
        $this->ClubWelfareOfficer->delete($id);
        $this->redirect(array('controller' => 'Colts',
            'action' => 'index',
            'club' => $this->request->params['club'],
            'admin' => true));
    }
}
?>