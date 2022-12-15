



@include('files.header')

<form  method="POST" action="change">
	@csrf
	<label>Name </label>
	<input type="text" name="name" value="{{$data->name}}">
	<label>password</label>
    <input type="password" name="password" value="{{ $data->password}}">
    <label>age</label>
    <input type="number" name="age" value="{{ $data->age }}">
    <input type="hidden" name="id" value="{{ $data->id  }}">
    <input type="submit" name="submit">

</form>

@include('files.footer')