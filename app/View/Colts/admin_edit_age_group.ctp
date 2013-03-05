<div class="row-fluid">
    <div class="span12 well">
        <h4>Edit Age Group</h4>
        <?php
        echo $this->Form->create('EditAgeGroup',array('url' => array('controller' => 'Colts',
            'action' => 'editAgeGroup',
            'club' => $this->request->params['club'],
            'id' => $this->request->params['id'],
            'admin' => 'true')));
        echo "<dl class=\"dl-horizontal\">";
        echo "<dt>";
        echo $this->Form->label('age_group', 'Age Group');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('age_group', array('label' => false,
            'value' => $agegroup['Colt']['age_group']));
        echo "</dd>";
        echo "</dl>";
        echo $this->Form->submit('Save Changes',array('class' => 'btn'));
        echo $this->Form->end();
        ?>
    </div>
</div>
