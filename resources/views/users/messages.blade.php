@if(session('success'))
	<div class="alert alert-success  alert-dismissible" role="alert">
		{{session('success')}}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</div>
@endif
@if(session('errors'))
    <div class="alert alert-danger  alert-dismissible" role="alert">
        {{session('errors')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif
{{-- @if($errors)
    <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
		</ul>
        
    </div>
@endif --}}