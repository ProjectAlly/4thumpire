<div class="row-fluid">
    <div class="span12 well">
        <h4>Add Age Group</h4>
        <?php
        echo $this->Form->create('AddAgeGroup',array('url' => array('controller' => 'News',
            'action' => 'addAgeGroup',
            'club' => $this->request->params['club'],
            'admin' => 'true')));
        echo "<dl class=\"dl-horizontal\">";
        echo "<dt>";
        echo $this->Form->label('title', 'Title');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('title', array('label' => false));
        echo "</dd>";
        echo "<dt>";
        echo $this->Form->label('description', 'Description');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('description', array('label' => false,
            'rows' => '10'));
        echo "</dd>";
        echo "</dl>";
        echo $this->Form->submit('Save Changes',array('class' => 'btn'));
        echo $this->Form->end();
        ?>
    </div>
</div>
