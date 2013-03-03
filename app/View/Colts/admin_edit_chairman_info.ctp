<div class="row-fluid">
    <div class="span12 well">
        <h4>Edit Chairman Info</h4>
        <?php
        echo $this->Form->create('EditChairmanInfo',array('url' => array('controller' => 'Colts',
            'action' => 'editChairmanInfo',
            'club' => $this->request->params['club'],
            'id' => $this->request->params['id'],
            'admin' => 'true')));
        echo "<dl class=\"dl-horizontal\">";
        echo "<dt>";
        echo $this->Form->label('chairman', 'Chairman');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('chairman', array('label' => false,
            'value' => $chairmaninfo['Colt']['chairman']));
        echo "</dd>";
        echo "<dt>";
        echo $this->Form->label('chairman_info', 'Chairman Info');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('chairman_info', array('label' => false,
            'rows' => '10',
            'value' => $chairmaninfo['Colt']['chairman_info']));
        echo "</dd>";
        echo "</dl>";
        echo $this->Form->submit('Save Changes',array('class' => 'btn'));
        echo $this->Form->end();
        ?>
    </div>
</div>
