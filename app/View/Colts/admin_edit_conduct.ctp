<div class="row-fluid">
    <div class="span12 well">
        <h4>Edit Conduct</h4>
        <?php
        echo $this->Form->create('EditConduct',array('url' => array('controller' => 'Colts',
            'action' => 'editConduct',
            'club' => $this->request->params['club'],
            'id' => $this->request->params['id'],
            'admin' => 'true')));
        echo "<dl class=\"dl-horizontal\">";
        echo "<dt>";
        echo $this->Form->label('colt_conduct', 'Colt Conduct');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('colt_conduct', array('label' => false,
            'value' => $conduct['Colt']['colt_conduct']));
        echo "</dd>";
        echo "</dl>";
        echo $this->Form->submit('Save Changes',array('class' => 'btn'));
        echo $this->Form->end();
        ?>
    </div>
</div>
