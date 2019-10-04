<style>
    .err{
    color:red;}
  
</style>
@extends('layouts.master')

@section('title')
    {{"New User"}}
@endsection

@section('content')
<section class="content-header">
    <h1>New User</h1>
</section>
   <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                <!-- general form elements -->
                    <div class="box box-primary clearfix">                           
                            <!-- form start -->     
                            {!! Form::Open(['action'=>'UserController@store','method'=>'POST','autocomplete'=>'off']) !!}
                            @csrf
                            <div class="box-body">
                                <div class="form-group col-md-6 " >
                                    {{Form::label('name',__('name'))}}
                                    <div class="input-group">
                                    <div class="input-group-addon">    
                                    <i class="fa fa-envelope"></i>
                                    </div>
                                    {{ Form::text('name','',['class'=>'form-control inp','placeholder'=>__('enter name'),'autocomplete'=>'off'])}}
                                     <span class="err">{{$errors->first('name')}}</span>
                                 </div>
                                </div>
                                <div class="form-group col-md-6 " >
                                    {{Form::label('email',__('email'))}}
                                    <div class="input-group">
                                    <div class="input-group-addon">    
                                    <i class="fa fa-envelope"></i>
                                    </div>
                                    {{ Form::text('email','',['class'=>'form-control inp','placeholder'=>__('enter email'),'autocomplete'=>'off'])}}
                                     <span class="err">{{$errors->first('email')}}</span>
                                 </div>
                                </div>
                                <div class="form-group col-md-6 " >
                                    {{ Form::label('password',__('password'))}}
                                    <div class="input-group">
                                    <div class="input-group-addon">    
                                    <i class="fa fa-key"></i>
                                    </div>
                                    {{ Form::password('password',['class'=>'form-control inp','placeholder'=>__('enter password')])}}
                                    <span class="err">{{$errors->first('password')}}</span>
                                </div>
                                </div>
                                <!-- <div class="form-group col-md-6 " >
                                    {{Form::label('user_id',__('user_id'))}}
                                    <div class="input-group">
                                    <div class="input-group-addon">    
                                    <i class="fa fa-envelope"></i>
                                    </div>
                                    {{ Form::text('user_id','',['class'=>'form-control inp','placeholder'=>__('enter user_id'),'autocomplete'=>'off'])}}
                                     <span class="err">{{$errors->first('user_id')}}</span>
                                 </div>
                                </div> -->
                                <div class="form-group col-md-6 " >
                                    {{Form::label('customer_name',__('customer_name'))}}
                                    <div class="input-group">
                                    <div class="input-group-addon">    
                                    <i class="fa fa-envelope"></i>
                                    </div>
                                    {{ Form::text('customer_name','',['class'=>'form-control inp','placeholder'=>__('enter customer_name'),'autocomplete'=>'off'])}}
                                     <span class="err">{{$errors->first('customer_name')}}</span>
                                 </div>
                                </div>
                                <div class="form-group col-md-6 " >
                                    {{Form::label('mobile',__('mobile'))}}
                                    <div class="input-group">
                                    <div class="input-group-addon">    
                                    <i class="fa fa-envelope"></i>
                                    </div>
                                    {{ Form::text('mobile','',['class'=>'form-control inp','placeholder'=>__('enter mobile'),'autocomplete'=>'off'])}}
                                     <span class="err">{{$errors->first('mobile')}}</span>
                                 </div>
                                </div>
                              <div class="form-group " >   {{ Form::submit('Add',['class'=>'btn btn-primary'])}}
                                <a href="{{ URL::previous() }}" role="button" class="btn btn-danger">Back</a>
                              </div>

                                    {!! Form::Close() !!}
                                </div><!-- /.box -->
                </div><!--/.col (left) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
@endsection()
   