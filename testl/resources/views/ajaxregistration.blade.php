
@php $title="dashboard2";@endphp


@include('files.header')
<style>
	.section{ text-align: left;
		 margin: 10%;
		 margin-top: 0%;
		 margin-left: 10%;

	}
	form {
		margin-right: 10%; 
	}
</style>
<div class="section">
<form  method="POST" action="insert" enctype="multipart/form-data">
	@csrf
	<br>
	<input class="form-control" type="text" value="{{csrf_token()}}" name="token">
<br>	<label class="form-label">Name </label>
	<input class="form-control" type="text" id="name" name="name" placeholder="Enter your name">
	<label class="form-label">password</label>
    <input type="password" name="password" id="password" placeholder="Enter Your Password" class="form-control">
    <label class="form-label">age</label>
    <input type="number" name="age" id="age" class="form-control" placeholder="Enter your age">
    <label class="form-label">Profile Image</label>
    <br>
    <input type="file" name="file" id="file">
    <br><br>
    <input type="button" value="submit"  id="submit" name="submit">

</form>
</div>


<script>

var submit=document.getElementById('submit');

submit.addEventListener("click", () => {
var token='{{csrf_token()}}';
var name=document.getElementById('name').value;
var age=document.getElementById('age').value;
var password=document.getElementById('password').value;
var file=document.getElementById('file').files[0];

var formData = new FormData();

         // Add the file to the AJAX request.
        formData.append('file', file);
        formData.append('name', name);
         formData.append('age', age);
          formData.append('password', password);
           formData.append('_token', token);

        // Set up the request.
        var xhr = new XMLHttpRequest();

        // Open the connection.
        xhr.open('POST', '/insert', true);
    

        // Set up a handler for when the task for the request is complete.
        xhr.onload = function () {
          if (xhr.status === 200) {
           alert('Your upload is successful..');
          } else {
            alert('An error occurred during the upload. Try again.');
          }
        };

        // Send the data.
        xhr.send(formData);


});

/*	
	$(document).ready(function(){
 // {'_token':'{{csrf_token()}}'}
var token='{{csrf_token()}}';
alert('token');
});*/
	</script>
@include('files.footer')