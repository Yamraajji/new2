

<h2>This is a check form  </h2>
<div>

         <label>Name</label>
         <input type="text" id="name" name="name" placeholder="Enter Your name"><br>

         <label>Email</label>
         <input type="email" id="email" name="email" placeholder="Enter Your email"><br>

         <label>Password</label>
         <input type="password" id="password" name="password" placeholder="Enter your password">
      <br>
      <span id="output"></span>
       <label>Photo </label>
       <!-- for single   -->
       <input type="file" name="photo" id="photo">  
       
         <input type="submit" id="submit"  value="submit">

         </div>


<script>


$('#submit').click(function(){

var name= $('#name').val();
var email= $('#email').val();
var password= $('#password').val();
// for single
 var file=$('#photo')[0].files[0];

// for multiple 
 // var file = $("#photo").get(0).files;
 

var data = new FormData();
data.append("name",name);
data.append("email",email);
data.append("password",password);
// for single 
 data.append("photo",file);

// for multiple
 /*for (var i = 0; i < file.length; i++) {
        data.append("photo", file[i]);
     } */


$.ajax({
type: "post",
enctype: 'multipart/form-data',
url: "<?php echo base_url(); ?>formsubmita",
data:data,
cache:false,
contentType: false,
processData: false,

success: function (res) {
    alert("successfully registered");

},
 error: function (e) {
 
                $("#output").text(e.responseText);
                console.log("ERROR : ", e);
                
 
            }
});
});



</script>
