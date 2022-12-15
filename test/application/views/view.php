

  <table border="2px solid green">
  	<tr>
  		<td>#</td>
  		<td>name</td>
  		<td>email</td>
  		<td>update</td>
      <td>Delete</td>
  	</tr>

  	<?php 


           
$i=0;
 foreach ($response as $key) {	$i++; ?>

  	 	<tr>
  		<td><?= $i ?></td>
  		<td><?= $key['name'] ?></td>
  		<td><?= $key['email'] ?></td>
  		<td><a href="<?php echo base_url();?>/edit?id=<?php
  		echo $key['id']; ?>" > update </a></td>
      <td><a href="<?php echo base_url();?>/delete?id=<?php
      echo $key['id']; ?>" > delete </a></td>
  	</tr>

	 <?php
  }
   ?>
  </table>
  

 
