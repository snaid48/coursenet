@extends('layouts.master')

@section('title')
<title>CourseNet | Departemen</title>    
@endsection

@section('content-header')
<section class="content-header">
  <h1>
    Dashboard
    <small>Departemen</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Departemen</a></li>
    <li class="active">Edit</li>
  </ol>
</section>
@endsection

@section('content')


  <!-- Main content -->
  <section class="content">
    
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Form Edit Departemen</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
          <div class="box-body">

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama Departemen</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama_departemen" value="{{$data->nama_departemen}} ">
              </div>
            </div>


           

            

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="{{ url('departemen')}}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Submit</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection