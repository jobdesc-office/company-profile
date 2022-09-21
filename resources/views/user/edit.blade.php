@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
            <div class="card-header">
              <div class="card-title">
                <h1 class="m-0">User</h1>
              </div><!-- /.col -->
                <div>
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User</li>
                  </ol>
                </div>
              </div><!-- /.col -->
            </div><!-- /.card-title -->
          </div><!-- /.card-header -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          	<div class="card">
				<div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
      			<div class="card-body">
      			<form action="/user/{{$user->userid}}/update" method="POST">
      				{{csrf_field()}}
        		<div class="form-group">
        		<label for="exampleInputEmail1">Username</label>
        			<input name="username" type="text" class="form-control" value="{{$user->username}}" placeholder="Username">
              @error('username')
                <span class="text-danger">{{$message}}</span>
              @enderror
        		</div>
        		<div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input name="userpassword" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
              @error('userpassword')
                <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Confirm Password</label>
              <input name="userpassword_confirmation" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
            </div>
      				<button style="width:60px;" type="submit" class="btn btn-success">Save</button>
      			</form>
      		</div>
      		</div>
          </div>
        </div>
      </div>
    </div>
@endsection
