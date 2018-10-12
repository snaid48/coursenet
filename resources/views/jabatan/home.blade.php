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
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Jabatan</li>
      </ol>
    </section>
@endsection

@section('content')


  <!-- Main content -->
  <section class="content">
    <!-- /.box -->

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Tabel Jabatan</h3>
        <a href="/jabatan/add"> <button class="btn-primary">Add Data</button> </a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nama Jabatan</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($data as $row)
            <tr>
                <td><a href="/jabatan/show/{{$row->id}}">  {{$row->nama_jabatan}} </a></td>
               <td align="center"> 
                  <a href="/jabatan/edit/{{$row->id}}"> <button class="btn-primary">Edit</button> </a>
                  <a href="/jabatan/delete/{{$row->id}}"> <button class="btn-danger">Delete</button> </a>
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