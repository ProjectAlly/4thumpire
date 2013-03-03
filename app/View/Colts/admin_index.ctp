<div class="row-fluid">
<div class="span12 well">
<div class="accordion" id="accordion2">
<!-- Colts -->
<div class="accordion-group">
    <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            Colts
        </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
        <div class="accordion-inner">
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Information</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($coltInfo as $coltInfos):
                    ?>
                    <tr>
                        <td><?php echo $coltInfos['Colt']['colt_info']; ?></td>
                        <td>
                            <?php
                            echo $this->Html->link('Edit',array('controller' => 'Colts',
                                                                'action' => 'editCotls',
                                                                'club' => $this->request->params['club'],
                                                                'admin' => true,
                                                                'id' => $coltInfos['Colt']['id']),
                                                          array('class' => 'label label-info'));
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->link('Remove',array('controller' => 'Colts',
                                                                  'action' => 'removeCotls',
                                                                  'club' => $this->request->params['club'],
                                                                  'admin' => true,
                                                                  'id' => $coltInfos['Colt']['id']),
                                                            array('class' => 'label label-info'));
                            ?>
                        </td>
                    </tr>
                        <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div> <!-- /WELL -->

            <?php
            echo $this->Html->link('Add Colts', array('controller' => 'Colts',
                                                      'action' => 'addCotls',
                                                      'club' => $this->request->params['club'],
                                                      'admin' => true),
                                                array('class' => 'btn btn-primary'));
            ?>
            <br/><br/>
        </div>
    </div>
</div>
<!-- /Colts -->

<!-- Colts Chairman -->
<div class="accordion-group">
    <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
            Colts Chairman
        </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
        <div class="accordion-inner">
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Chairman Name</th>
                        <th>Chairman Info</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($coltInfo as $coltInfos):
                    ?>
                    <tr>
                        <td><?php echo $coltInfos['Colt']['chairman']; ?></td>
                        <td><?php echo $coltInfos['Colt']['chairman_info']; ?></td>
                        <td>
                            <?php
                            echo $this->Html->link('Edit',array('controller' => 'Colts',
                                    'action' => 'editChairmaninfo',
                                    'club' => $this->request->params['club'],
                                    'admin' => true,
                                    'id' => $coltInfos['Colt']['id']),
                                array('class' => 'label label-info'));
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->link('Remove',array('controller' => 'Colts',
                                    'action' => 'removeChairmaninfo',
                                    'club' => $this->request->params['club'],
                                    'admin' => true,
                                    'id' => $coltInfos['Colt']['id']),
                                array('class' => 'label label-info'));
                            ?>
                        </td>
                    </tr>
                        <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
            <?php
            echo $this->Html->link('Add Chairman', array('controller' => 'Colts',
                    'action' => 'addChairmaninfo',
                    'club' => $this->request->params['club'],
                    'admin' => true),
                array('class' => 'btn btn-primary'));
            ?>

            <br/><br/>

        </div>
    </div>
</div>
<!-- /Colts Chairman -->

<!-- Colts Age Group -->
<div class="accordion-group">
    <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
            Age Group
        </a>
    </div>
    <div id="collapseThree" class="accordion-body collapse">
        <div class="accordion-inner">
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Age Group</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($coltInfo as $coltInfos):
                        ?>
                    <tr>
                        <td><?php echo $coltInfos['Colt']['age_group']; ?></td>
                        <td>
                            <?php
                            echo $this->Html->link('Edit',array('controller' => 'Colts',
                                    'action' => 'editagegroup',
                                    'club' => $this->request->params['club'],
                                    'admin' => true,
                                    'id' => $coltInfos['Colt']['id']),
                                array('class' => 'label label-info'));
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->link('Remove',array('controller' => 'Colts',
                                    'action' => 'removeagegroup',
                                    'club' => $this->request->params['club'],
                                    'admin' => true,
                                    'id' => $coltInfos['Colt']['id']),
                                array('class' => 'label label-info'));
                            ?>
                        </td>
                    </tr>
                        <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
            <?php
            echo $this->Html->link('Add Age Group', array('controller' => 'Colts',
                    'action' => 'addagegroup',
                    'club' => $this->request->params['club'],
                    'admin' => true),
                array('class' => 'btn btn-primary'));
            ?>

            <br/><br/>
        </div>
    </div>
</div>
<!-- /Colts Age Group -->

<!-- Colts Conduct -->
<div class="accordion-group">
    <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
            Conduct
        </a>
    </div>
    <div id="collapseFour" class="accordion-body collapse">
        <div class="accordion-inner">
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Conduct</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($coltInfo as $coltInfos):
                        ?>
                    <tr>
                        <td><?php echo $coltInfos['Colt']['colt_conduct']; ?></td>
                        <td>
                            <?php
                            echo $this->Html->link('Edit',array('controller' => 'Colts',
                                    'action' => 'editConduct',
                                    'club' => $this->request->params['club'],
                                    'admin' => true,
                                    'id' => $coltInfos['Colt']['id']),
                                array('class' => 'label label-info'));
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->link('Remove',array('controller' => 'Colts',
                                    'action' => 'removeConduct',
                                    'club' => $this->request->params['club'],
                                    'admin' => true,
                                    'id' => $coltInfos['Colt']['id']),
                                array('class' => 'label label-info'));
                            ?>
                        </td>
                    </tr>
                        <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
            <?php
            echo $this->Html->link('Add Conduct', array('controller' => 'Colts',
                    'action' => 'addConduct',
                    'club' => $this->request->params['club'],
                    'admin' => true),
                array('class' => 'btn btn-primary'));
            ?>

            <br/><br/>
        </div>
    </div>
</div>
<!-- /Colts Conduct -->


<!-- CLub Welfare Officer -->
<div class="accordion-group">
    <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
            Club Welfare Officer
        </a>
    </div>
    <div id="collapseFive" class="accordion-body collapse">
        <div class="accordion-inner">
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Officer</th>
                        <th>Information</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($welfareOfficerInfo as $welfareOfficerInfos):
                        ?>
                    <tr>
                        <td><?php echo $welfareOfficerInfos['ClubWelfareOfficer']['name']; ?></td>
                        <td><?php echo $welfareOfficerInfos['ClubWelfareOfficer']['information']; ?></td>
                        <td>
                            <?php
                            echo $this->Html->link('Edit',array('controller' => 'Colts',
                                    'action' => 'editClubWelfareOfficer',
                                    'club' => $this->request->params['club'],
                                    'admin' => true,
                                    'id' => $welfareOfficerInfos['ClubWelfareOfficer']['id']),
                                array('class' => 'label label-info'));
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->link('Remove',array('controller' => 'Colts',
                                    'action' => 'removeClubWelfareOfficer',
                                    'club' => $this->request->params['club'],
                                    'admin' => true,
                                    'id' => $welfareOfficerInfos['ClubWelfareOfficer']['id']),
                                array('class' => 'label label-info'));
                            ?>
                        </td>
                    </tr>
                        <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
            <?php
            echo $this->Html->link('Add Club Welfare Officer', array('controller' => 'Colts',
                    'action' => 'addClubWelfareOfficer',
                    'club' => $this->request->params['club'],
                    'admin' => true),
                array('class' => 'btn btn-primary'));
            ?>

            <br/><br/>
        </div>
    </div>
</div>
<!-- /CLub Welfare Officer -->

</div><!-- /ACCORDION -->
<!-- COLLAPSIBLE MENU ENDS -->

<script type="text/javascript">
    $(".collapse").collapse();
</script>
</div><!-- SPAN12  -->
</div><!-- /ROW FLUID -->
