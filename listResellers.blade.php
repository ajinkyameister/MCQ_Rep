<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> -->

	@extends('layouts.app')

	@section('mainbody')

	
		<div id="app">
			<ul>

				<!-- @foreach($resellers as $reseller)

				<li> <a href="#"> {{$reseller->name}} </a> </li>

				@endforeach	 -->
			</ul>

			<modifyreseller :reseller="{{$resellers}}">  </modifyreseller>
		</div>

		@endsection
<!-- </body>
</html> -->
