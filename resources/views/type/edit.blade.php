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
                <h1 class="m-0">Type</h1>
              </div><!-- /.col -->
                <div>
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Type</li>
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
                <h3 class="card-title">Edit Tipe</h3>
              </div>
        				<div class="card-body">
        				<form action="/type/{{$type->typeid}}/update" method="POST">
        					{{csrf_field()}}
        				<div class="form-group">
        					<label for="exampleInputEmail1">Type</label>
        					<input name="typename" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type" value="{{$type->typename}}">
        				</div>
        				<div class="form-group">
        					<label>Master</label>
        					<select name="masterid" class="form-control">
        						<option value="">- Choose -</option>
        						@foreach($induk as $in)
        						<option value="{{ $in->typeid }}" {{$type->masterid == $in->typeid ? 'selected' : ''}}>{{ $in->typename }}</option>
        						@endforeach
        					</select>
        				</div>
        					<button style="width:60px; type="submit" class="btn btn-success">Save</button>
        				</form>
        			</div>
        			</div>
          </div>
        </div>
      </div>
    </div>
@endsection