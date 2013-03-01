<div class="row-fluid">
    <div class="span12 well">
        <h4>Edit Club Updates</h4>
            <?php
            echo $this->Form->create('EditClubUpdates',array('url' => array('controller' => 'News',
                                                                          'action' => 'editClubUpdates',
                                                                          'club' => $this->request->params['club'],
                                                                          'id' => $this->request->params['id'],
                                                                          'admin' => 'true')));
            echo "<dl class=\"dl-horizontal\">";
                echo "<dt>";
                    echo $this->Form->label('title', 'Title');
                echo "</dt>";
                echo "<dd>";
                    echo $this->Form->input('title', array('label' => false,
                                                          'value' => $oldPlayer['OldPlayer']['name']));
                echo "</dd>";
            echo "</dl>";
            echo $this->Form->submit('Save Changes',array('class' => 'btn'));
            echo $this->Form->end();
            ?>
    </div>
</div>
