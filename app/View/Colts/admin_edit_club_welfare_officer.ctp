<div class="row-fluid">
    <div class="span12 well">
        <h4>Edit Club Welfare Officer</h4>
        <?php
        echo $this->Form->create('EditClubWelfareOfficer',array('url' => array('controller' => 'Colts',
            'action' => 'editClubWelfareOfficer',
            'club' => $this->request->params['club'],
            'id' => $this->request->params['id'],
            'admin' => 'true')));
        echo "<dl class=\"dl-horizontal\">";
        echo "<dt>";
        echo $this->Form->label('name', 'Name');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('name', array('label' => false,
            'value' => $clubwelfareofficer['ClubWelfareOfficer']['name']));
        echo "</dd>";
        echo "<dt>";
        echo $this->Form->label('information', 'Information');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('information', array('label' => false,
            'rows' => '10',
            'value' => $clubwelfareofficer['ClubWelfareOfficer']['information']));
        echo "</dd>";
        echo "</dl>";
        echo $this->Form->submit('Save Changes',array('class' => 'btn'));
        echo $this->Form->end();
        ?>
    </div>
</div>
