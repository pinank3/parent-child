<style>
    .err{
    color:red;}
</style>
@extends('layouts.master')

@section('title')
	{{"Add"}}
@endsection

@section('content')
    <section class="content-header">
    <h1>Edit User</h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">User</a></li>
    <li class="active">Edit User</li>
    </ol>
</section>
   <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                <!-- general form elements -->
                    <div class="box box-primary clearfix">
                            <!-- form start -->
    	{!! Form::Open(['action'=>['CustomerController@update',$xyz->id],'method'=>'POST']) !!}
    	@csrf
         <div class="box-body">
		<div class="form-group col-md-6">
    		{{ Form::label('name','name')}}
            <div class="input-group">
                                    <div class="input-group-addon">    
                                    <i class="fa fa-envelope"></i>
                                    </div>
    		{{ Form::text('name',$xyz->customer_name,['class'=>'form-control'])}}
            <span class="err">{{$errors->first('name')}}</span>
        </div>
		</div>
		<div class="form-group col-md-6">
    		{{ Form::label('mobile','mobile')}}
            <div class="input-group">
                                    <div class="input-group-addon">    
                                    <i class="fa fa-envelope"></i>
                                    </div>
    		{{ Form::text('mobile',$xyz->mobile,['class'=>'form-control'])}}
            <span class="err">{{$errors->first('mobile')}}</span>
        </div>
		</div>
        <div class="col-md-12">
		{{Form::hidden('_method','GET')}}
		{{ Form::submit('Update',['class'=>'btn btn-info'])}}
        <a href="{{ URL::previous() }}" role="button" class="btn btn-danger" >Cancel</a>
        </div>
    	{!! Form::Close() !!}
                    </div><!-- /.box -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
@endsection