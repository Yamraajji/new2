@php $title="Login";  @endphp


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

    

<form  method="POST" action="check" enctype="multipart/form-data">
	@csrf
	<h1 class="text-center">Login Here  </h1>
	<br>
   <span style="color:yellow">
	@php 
	if(session()->exists('Wrong') && session()->get('Wrong')=="yes"){ 
     //session()->forget('Wrong');
	echo "Please enter correct login details" ; }
	 
	 @endphp  </span>
  <br>
	<label class="form-label">Name </label>
	<input class="form-control" type="text" name="name" placeholder="Enter your name">
	<label class="form-label">password</label>
    <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
   
    <br>
    <input type="submit" name="submit">

</form>
</div>
@include('files.footer')