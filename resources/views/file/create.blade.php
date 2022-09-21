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
                <h1 class="m-0">File</h1>
              </div><!-- /.col -->
                <div>
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">File</li>
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
                <h3 class="card-title">Tambah File</h3>
              </div>
      				<div class="card-body">
      				<form action="/file/create/store" method="POST" enctype="multipart/form-data">
      					{{csrf_field()}}
          				<div class="form-group">
          					<label>Tipe</label>
          					<select name="reftypeid" class="form-control" onfocus="this.size=10;" onblur="this.size=1;" onchange="this.size=1; this.blur();">
          						<option value="">- Choose -</option>
          						@foreach($type as $tp)
          							<option value="{{ $tp->typeid }}">{{ $tp->typename }}</option>
          						@endforeach
          					</select>
          				</div>
                  <div class="form-group">
                    <label>Owner</label>
                    <select name="refid" class="form-control" onfocus="this.size=10;" onblur="this.size=1;" onchange="this.size=1; this.blur();" >
                      <option value="">- Choose -</option>
                      <option value="">- Team -</option>
                      @foreach($team as $tm)
                        <option value="{{ $tm->teamid }}">{{ $tm->teamname }}</option>
                      @endforeach
                      <option value="">- Partner -</option>
                      @foreach($partner as $par)
                        <option value="{{ $par->partnerid }}">{{ $par->partnername }}</option>
                      @endforeach
                      <option value="">- Portofolio -</option>
                      @foreach($portofolio as $porto)
                        <option value="{{ $porto->portofolioid }}">{{ $porto->portofolioname }}</option>
                      @endforeach
                      <option value="">- Info -</option>
                      @foreach($info as $inf)
                        <option value="{{ $inf->infoid }}">{{ $inf->type->typename }}</option>
                      @endforeach
                      <option value="">- Testimoni -</option>
                      @foreach($testimoni as $tes)
                        <option value="{{ $tes->testimoniid }}">{{ $tes->testimonifrom }}</option>
                      @endforeach
                      <option value="">- Service -</option>
                      @foreach($service as $ser)
                        <option value="{{ $ser->serviceid }}">{{ $ser->servicename }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>File</label>
                    <input type="file" name="filename" class="form-control">
                  </div>
      					<button style="width:60px;" type="submit" class="btn btn-primary">Add</button>
      				</form>
      			</div>
      			</div>
          </div>
        </div>
      </div>
    </div>
@endsection