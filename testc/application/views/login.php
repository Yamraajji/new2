<h2>Login Now  </h2>
<?php if($this->session->userdata('login')!="")
{  $this->session->unset_userdata('login');
	echo "please enter correct details to login";
} ?>
<form method="POST" action="<?php echo base_url(); ?>logincheck">


                           <label>Email</label>
                           <input type="email" name="email" placeholder="Enter Your email"><br>

                           <label>Password</label>
                           <input type="password" name="password" placeholder="Enter your password">
                           <input type="submit" value="login">

                           </form>
