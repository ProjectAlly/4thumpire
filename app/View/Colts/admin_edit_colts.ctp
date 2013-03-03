<div class="row-fluid">
    <div class="span12 well">
        <h4>Edit Colts</h4>
        <?php
        echo $this->Form->create('EditColts',array('url' => array('controller' => 'Colts',
            'action' => 'editColts',
            'club' => $this->request->params['club'],
            'id' => $this->request->params['id'],
            'admin' => 'true')));
        echo "<dl class=\"dl-horizontal\">";
        echo "<dt>";
        echo $this->Form->label('colt_info', 'Colt');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('colt_info', array('label' => false,
            'value' => $colt['Colt']['colt_info']));
        echo "</dd>";
        echo "</dl>";
        echo $this->Form->submit('Save Changes',array('class' => 'btn'));
        echo $this->Form->end();
        ?>
    </div>
</div>
