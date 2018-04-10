<h2>Inregistrarile tabelei flowers</h2>
<table>
    <tr>
        <th>Nume</th>
        <th>Culoare</th>
        <th>Marime</th>
        <th>Pret</th>
      <th colspan="3" align="center">Actions</th>

    </tr>
    <?php foreach ($set_flowers as $set): ?>
    <tr>
        <td><?php echo $set->nume; ?></td>
        <td><?php echo $set->culoare; ?></td>
        <td><?php echo $set->marime; ?></td>
        <td><?php echo $set->pret; ?></td>
       <td>
<?php echo $this->Html->link('View', array('action'=>'view', $set->id)); ?>
<?php echo $this->Html->link('Edit', array('action'=>'edit', $set->id)); ?>
<?php echo $this->html->link('Delete',['action'=>'delete',$set->id, NULL],['confirm'=>'Sigur doriti sa stergeti inregistrarea?']); ?>
</td>

    </tr>
    <?php endforeach; ?>
</table>

<?php 
  echo $this->html->link('Add', array('action'=>'add'));
?> 
