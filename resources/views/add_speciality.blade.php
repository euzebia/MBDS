@extends('layouts.patient_dashboard')
@section('content')
<div class="right_col" role="main">
	<form class="form-horizontal" method="POST"  action="{{ url('/store') }}" >
		<div class="panel-heading">
			Register new speciality
		</div>
		<div class="form-group">
			{{ csrf_field() }}
			<label>Speciality name</label>
			<input type="text" class="form-control" name="speciality_name" style="width:500px;"/>
			<br/>
			<input type="submit" name="add" value="Register" class="btn btn-primary" />
	    </div>
	</form>
</div>

@endsection