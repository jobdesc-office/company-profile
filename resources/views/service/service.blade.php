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
                <h1 class="m-0">Service</h1>
              </div><!-- /.col -->
                <div>
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Service</li>
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
                <h3 class="card-title">Data Service</h3>
                <div class="float-sm-right">
                  <a style="width:60px;" href="/service/create" class="btn btn-sm btn-primary">Add</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                  </div>
                  <div class="row">
                  <div class="col-sm-12">
                  <table class="table table-bordered table-hover dataTable dtr-inline">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Service</th>
                    <th>Description</th>
                    <th>Actions</th>
                    <th>Active</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($service as $ser)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$ser->servicename}}</td>
                    <td>{!!$ser->servicedesc!!}</td>
                    <td>
                      @if($ser->isactive == true)
                        <a href="/service/{{$ser->serviceid}}/isactive" class="btn btn-sm btn-success">Active</a>
                      @else
                      <a href="/service/{{$ser->serviceid}}/isactive" class="btn btn-sm btn-danger">InActive</a>
                      @endif
                    </td>
                    <td>
                      <a style="width:60px;" href="/service/{{$ser->serviceid}}/edit" class="btn btn-sm btn-warning")>Edit</a>
                      <a style="width:60px;" href="/service/{{$ser->serviceid}}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau dihapus ?')">Delete</a>
                    </td>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                </table>
              </div>
              </div>
                <div class="row">
                  <div class="col-sm-12">
                  <div class="float-sm-right">
                    {{ $service->links() }}
                  </div>
                  <div>
                    Showing
                    {{ $service->firstItem() }}
                    to
                    {{ $service->lastItem() }}
                  </div>
              </div>
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection