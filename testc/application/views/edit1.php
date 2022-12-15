<h2>This is a check form  </h2>
<div>

                           <label>Name</label>
                           <input type="text" name="name" value="<?php echo $response['name']; ?>" placeholder="Enter Your name" id="name"><br>

                           <label>Email</label>
                           <input type="email" name="email"  value="<?php echo $response['email']; ?>" id="email" placeholder="Enter Your email"><br>

                           <label>Password</label>
                          <input type="password" id="password" name="password"
                            value="<?php echo $response['password']; ?>" placeholder="Enter your password">
                            <input type="hidden" name="id" id="id" value="<?php echo $response['id'];  ?>">
                           <input type="button" id="submit" value="update">

                           </div>

                           <script>
   	
   		
      $('#submit').click(function(){
      	
     var name= $('#name').val();
     var email= $('#email').val();
     var password= $('#password').val();
      var id= $('#id').val();
 
      $.ajax({
      type: "post",
     url: "<?php echo base_url(); ?>update",
     cache:false,
    data: {
   name:name,email:email,password:password,id:id
     },
   
     success: function (res) {
     	alert("done");

              }
          });
     });


  
   </script>
