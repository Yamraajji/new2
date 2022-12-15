
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
	<input class="form-control" type="text" name="name" placeholder="Enter your name">
	<label class="form-label">password</label>
    <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
    <label class="form-label">age</label>
    <input type="number" name="age" class="form-control" placeholder="Enter your age">
    <label class="form-label">Profile Image</label>
    <br>
    <input type="file" name="file" id="file">
    <br><br>
    <input type="submit" name="submit">

</form>
</div>


<script>

document.addEventListener("DOMContentLoaded", () => {
  var token='{{csrf_token()}}';
alert(token);
});

/*	
	$(document).ready(function(){
 // {'_token':'{{csrf_token()}}'}
var token='{{csrf_token()}}';
alert('token');
});*/
	</script>
@include('files.footer')