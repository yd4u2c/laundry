@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">

		@if(Session::has('success'))
		<div class="alert alert-success">{{ Session::get('success') }}</div>
		@endif

		@if(Session::has('error'))
		<div class="alert alert-danger">{{ Session::get('error') }}</div>
		@endif

		<div class="col-sm-5 panel panel-primary">
			<div class="panel-heading">Add color of clothes brought</div>
			<div class="panel-body">

				<button id="Add" class="btn btn-success">Click to add</button> <button id="Remove" class="btn btn-danger">Click to remove</button> 
				<p>&nbsp;</p>

				<form method="post" action="inputcolor"> 

					{{ csrf_field() }}

					<div id="textboxDiv"></div> 

					<input type="submit" class="btn btn-primary" name="">

				</form>
			</div>
		</div>

	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>  
	$(document).ready(function() {  
		$("#Add").on("click", function() {  
			$("#textboxDiv").append("<div class='row'><div class='form-group col-sm-4'><select class='form-control' name='category[]'>@foreach($data2 as $row) <option>{{ $row->category }}</option>@endforeach</select></div><div class='form-group col-sm-4'><select class='form-control' name='color[]'>@foreach($data as $row) <option>{{ $row->color }}</option>@endforeach</select></div> <div class='form-group col-sm-4'><input type='text' name='qty[]' required class='form-control' placeholder=''/></div></div>");  
		});  
		$("#Remove").on("click", function() {  
			$("#textboxDiv").children().last().remove();  
		});  
	});  
</script> 
@endsection
