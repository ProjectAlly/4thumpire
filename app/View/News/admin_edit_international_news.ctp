<div class="row-fluid">
    <div class="span12 well">
        <h4>Edit Interational News</h4>
        <?php
        echo $this->Form->create('EditInternationalNews',array('url' => array('controller' => 'News',
            'action' => 'editInternationalNews',
            'club' => $this->request->params['club'],
            'id' => $this->request->params['id'],
            'admin' => 'true')));
        echo "<dl class=\"dl-horizontal\">";
        echo "<dt>";
        echo $this->Form->label('title', 'Title');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('title', array('label' => false,
            'value' => $internationalnews['InternationalNews']['title']));
        echo "</dd>";
        echo "<dt>";
        echo $this->Form->label('description', 'Description');
        echo "</dt>";
        echo "<dd>";
        echo $this->Form->input('description', array('label' => false,
            'rows' => '10',
            'value' => $internationalnews['InternationalNews']['description']));
        echo "</dd>";
        echo "</dl>";
        echo $this->Form->submit('Save Changes',array('class' => 'btn'));
        echo $this->Form->end();
        ?>
    </div>
</div>
