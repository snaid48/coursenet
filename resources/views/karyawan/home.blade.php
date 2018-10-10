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
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Karyawan</li>
  </ol>
</section>
@endsection

@section('content')


  <!-- Main content -->
  <section class="content">
    <!-- /.box -->

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Tabel Karyawan</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nama Karyawan</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Jabatan</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{$row->nama_karyawan}}</td>
                <td>{{$row->alamat}}</td>
                <td>{{$row->telepon}}</td>
                <td>{{$row->jabatan}}</td>
                <td> 
                  <a href="/karyawan/edit/{{$row->id}}"> <button class="btn-primary">Edit</button> </a>
                  <a href="/karyawan/delete/{{$row->id}}"> <button class="btn-danger">Delete</button> </a>
                </td>
              </tr>
              
            @endforeach
          
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection