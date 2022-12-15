@if(session()->get('user_id')=="")
    <script type="text/javascript">window.location.href="{{url('/login')}}";</script>
 @endif

 @php  $title="User Dashboard";  @endphp

@include('user.includes.header')
<style>
	.section{ text-align: left;
		 margin: 1%;
		

	}
	form {
		margin-right: 10%; 
	}
</style>
<div class="section">
	<h1 class="text-center">Your Profile</h1>
	<div class="row">
<div class="col-sm-4">
<img  style="height:70%;width:70%;border-radius: 45%" src="uploads/{{ $data->photo }}" alt="once again you lost ">
</div>
<div class="col-sm-8">
	<label class="form-label">Name</label>
	<input type="name" class="form-control" id="name" name="name" value="{{$data->name}}">
	<labe class="form-label">Age</labe>
	<input type="age" class="form-control" id="age" name="age" value="{{$data->age}}"

</div>

</div>
</div>
@include('user.includes.footer')