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
                <h1 class="m-0">Testimoni</h1>
              </div><!-- /.col -->
                <div>
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Testimoni</li>
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
                <h3 class="card-title">Edit Testimoni</h3>
              </div>
              <div class="card-body">
              <form action="/testimoni/{{$testimoni->testimoniid}}/update" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
              <div class="form-group">
                <label>Testimonial</label>
                <input name="testimonifrom" type="text" class="form-control" value="{{$testimoni->testimonifrom}}" placeholder="Testimonial">
              </div>
              <div class="form-group">
                <label for="editor">Descriptions</label>
                <textarea class="form-control" id="editor" rows="10" name="testimonidesc">{!!$testimoni->testimonidesc!!}</textarea>
              </div>
              <div class="form-group">
                    <label>File</label>
                    <input type="file" name="filename" class="form-control">
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

@section('ck-editor')
 <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

 <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection