@extends('layouts.masterpage')

	@section('content')
		<div class="row">
			<div class="col-md-6">
				<table class="table">
					<tr>
						<td>Name</td>
						<td>Email</td>
					</tr>
					<tr>
						<td>{{$abc ->name}}</td>
						<td> {{$abc->email}}</td>
					</tr>
				</table>
			</div>
		</div>
@endsection