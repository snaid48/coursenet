@extends('layouts.master')

@section('title')
<title>CourseNet | Jabatan</title>    
@endsection

@section('content-header')
<section class="content-header">
  <h1>
    Dashboard
    <small>Jabatan</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Jabatan</a></li>
    <li class="active">Tambah Data</li>
  </ol>
</section>
@endsection

@section('content')


  <!-- Main content -->
  <section class="content">
    
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Form Tambah Jabatan</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal">
        <div class="box-body">

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nama Jabatan</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Jabatan" name="nama_jabatan">
            </div>
          </div>

          

          

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="{{ url('jabatan')}}" class="btn btn-default">Cancel</a>
          <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection