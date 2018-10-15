@extends('layouts.master')

@section('title')
<title>CourseNet | Inventory</title>    
@endsection

@section('content-header')
<section class="content-header">
  <h1>
    Dashboard
    <small>Inventory</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inventory</a></li>
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
          <h3 class="box-title">Form Edit Inventory</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/inventory/update" method="POST">
          <div class="box-body">
            <div class="form-group">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              <input type="hidden" class="form-control" name="id" value="{{ $data->id}}" />
              <input type="hidden" name="_method" value="PUT" />
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama Inventory</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama_inventory" value="{{$data->nama_inventory}} ">
              </div>
            </div>



          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="{{ url('inventory')}}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Submit</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection