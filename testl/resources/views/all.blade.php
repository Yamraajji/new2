

@include('files.header')
<style>
table{ margin:10%;
	margin-top: 2%;
	padding: 10%;
	align:center;
	border: 2px soild black;
}
a{
	text-decoration: none;
	color:black;
	
}
a:hover{
	color:green;
	background: yellow;
}

</style>
<table  style="text-align: center;">
	<tr>
		<th>Name</th>
		<th>Age</th>
		<th>password</th>
		<th>Update </th>
		<th>Delete</th>
	</tr>
 @foreach($data as $next)
	<tr>
		<td>{{$next->name}}</td>
		<td>{{$next->age}}</td>
		<td>{{$next->password}}</td>
		<td><a  href='{{"update?id=$next->id"}}'>Update</a></td>
		<td><a href='{{"delete?id=$next->id"}}'>Delete</a></td>
	</tr>
@endforeach
</table>
<div class="float-end"> {{ $data->links() }} </div>
</form>

@include('files.footer')