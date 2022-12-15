   
    <label>Name</label>
         <input type="text" id="name" name="name" placeholder="Enter Your name"><br>

         <label>Email</label>
         <input type="email" id="email" name="email" placeholder="Enter Your email"><br>

         <label>Password</label>
         <input type="password" id="password" name="password" placeholder="Enter your password">
      <br>
<!--  for multiple   -->
<label> Upload Multiple images  </label>
  <input type="file" name="photo[]" id="photo" multiple=""> 
  <input type="submit" id="submit">


  <script> 


$('#submit').click(function(){

 var file = $("#photo").get(0).files;
 var name=$("#name").val();
 var email=$("#email").val();
 var password=$("#password").val();

var data = new FormData();

// for multiple
for (var i = 0; i < file.length; i++) {
        data.append("photo[]", file[i]);

     } 
  data.append("name",name);
  data.append("email",email);
  data.append("password",password)   



$.ajax({
type: "post",
enctype: 'multipart/form-data',
url: "<?php echo base_url(); ?>multiform",
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
