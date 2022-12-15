@php  if(session()->get('user_id')==""){
	 redirect('/login');

} else {
	echo "done";
} @endphp