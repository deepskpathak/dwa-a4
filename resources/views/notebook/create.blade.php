@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="{{ URL::previous() }}"><i class="fa fa-arrow-left"></i></a>
					&nbsp;Create Notebook
				</div>

				<div class="panel-body">
					<form action="{{ url('/notebook/create') }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="name">Notebook Name:</label>
							<input type="text" name="name" class="form-control" required maxlength="20">
						</div>
						
						<input type="submit" name="submit" class="form-control btn btn-success" value="Create Notebook">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection