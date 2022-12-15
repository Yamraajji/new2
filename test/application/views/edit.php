


<h2>This is a check form  </h2>
<form method="POST" action="<?php echo base_url(); ?>update">

                           <label>Name</label>
                           <input type="text" name="name" value="<?php echo $response['name']; ?>" placeholder="Enter Your name"><br>

                           <label>Email</label>
                           <input type="email" name="email"  value="<?php echo $response['email']; ?>"  placeholder="Enter Your email"><br>

                           <label>Password</label>
                          <input type="password" name="password"
                            value="<?php echo $response['password']; ?>" placeholder="Enter your password">
                            <input type="hidden" name="id" value="<?php echo $response['id'];  ?>">
                           <input type="submit" value="update">

                           </form>
