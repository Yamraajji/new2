<table border="2px solid green" class="tbl tbl-bordered">
  	<tr>
  		<td>#</td>
  		<td>name</td>
  		<td>email</td>
      <td>Photo</td>
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
      <td><a href="pic/<?php echo $key['photo']; ?>" target="blank" >preview</a></td>
  		<td><a href="<?php echo base_url();?>edit1?id=<?php
  		echo $key['id']; ?>" > update </a></td>
      <td><button  onclick="remove('<?php echo $key['id']; ?>')" class="btn btn-primary"> delete </button> </td>
  	</tr>

	 <?php
  }
   ?>
  </table>
  <script>
  function remove(valu){
  $.ajax({
      type: "post",
     url: "<?php base_url();?>delete",
     cache:false,
    data: {
   id:valu
     },
   
     success: function (res) {
      alert("You successfully deleted ");
     window.location.href="<?php echo base_url();?>ajaxview"
 
              }
          });


  }

</script>