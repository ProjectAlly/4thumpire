<div class="row-fluid">
    <div class="span12 well">
        <h4>Add Weekly Cricket Event</h4>
        <?php
        echo $this->Form->create('AddWeeklyCricketNews',array('url' => array('controller' => 'News',
            'action' => 'addWeeklyCricketNews',
            'club' => $this->request->params['club'],
            'admin' => 'true')));
        echo "<dl class=\"dl-horizontal\">";
        echo "<dt>";
        echo $this->Form->label('eventname', 'Event Name');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('eventname', array('label' => false));
        echo "</dd>";
        echo "<dt>";
        echo $this->Form->label('details', 'Details');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('details', array('label' => false,
            'rows' => '10'));
        echo "</dd>";
        echo "</dl>";
        echo $this->Form->submit('Save Changes',array('class' => 'btn'));
        echo $this->Form->end();
        ?>
    </div>
</div>
