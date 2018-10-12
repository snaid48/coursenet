@extends('layouts.master')

@section('title')
<title>CourseNet | Karyawan</title>    
@endsection

@section('content-header')
<section class="content-header">
  <h1>
    Dashboard
    <small>Karyawan</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Karyawan</a></li>
    <li class="active">Add Data</li>
  </ol>
</section>
@endsection

@section('content')


  <!-- Main content -->
  <section class="content">
    
    <!-- Horizontal Form -->
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama_karyawan">
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                        <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat"></textarea>
                  </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Telepon</label>
    
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Telepon" name="telepon">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
    
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Jabatan" name="jabatan">
                    </div>
                </div>

                

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <a href="{{ url('karyawan')}}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          

  </section>
  <!-- /.content -->
@endsection