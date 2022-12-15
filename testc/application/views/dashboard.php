<?php if($this->session->userdata('userid')=="")

redirect('login');
  ?>
  
<div class="col-sm-12"> <button class="float-right btn"><a href="<?php echo base_url(); ?>destroyer"> logout </a> </button></div>
   
 <br>
    
<h1>You are logined sussessfull <h1>

