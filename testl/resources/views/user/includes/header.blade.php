<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<style>
 .section{
  width:90%;
	}
		body{
     background-image: url('{{ url('test1.jpeg'); }}');

	}

	
	</style>
	<title>{{ $title; }}</title>
</head>
<body style="margin: 20px;background-image:url('test1.jpeg');">
<div class="row" style="background:#b8c990; border:1px solid gray;padding: 10px;">
	<div class="col-sm-2"></div>
	<div class="col-sm-8"><a href="#">Profile</a></div>
	<div class="col-sm-2"><a href="{{ url('logout')}}">logout</a></div>
	


</div>
