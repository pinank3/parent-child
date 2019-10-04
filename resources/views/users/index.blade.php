@extends('layouts.master')
@section('title','User List')
@section('content')
<!-- Content Header (User header) -->
<section class="content-header">
        <h1>User
        <span style="margin-left: 20px;"><a href="create" class="btn btn-sm btn-success" role="button"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;ADD New</a></span>
        </h1>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">            
                <div class="box-body">
                 <table id="userList" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach($users as $a)
                    <tr>
                        <td>{{ucfirst($a->name)}}</td>
                        <td>{{$a->email}}</td>
                        <td><a href="{{$a->id}}edit"><i class="fa fa-pencil-square-o"></i></a>&nbsp;<a href="{{$a->id}}delete" onclick="return confirm('Are you sure you want to delete this user_skill?');"><i class="fa fa-trash-o text-danger"></i></a></td>                 
                    </tr>  
                    <?php $i++; ?>               
                    @endforeach       
                    </tbody>
                    </table>
                    {{$users->links()}}
                </div><!-- /.box-body -->
                </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@endsection
@push('scripts')
<script type="text/javascript">
$(function () {    
    $('#userList').dataTable();
});

</script>
@endpush