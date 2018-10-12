@extends('layouts.master')

@section('title')
<title>CourseNet | Arsip</title>    
@endsection

@section('content-header')
    <section class="content-header">
      <h1>
        Dashboard
        <small>Arsip</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Arsip</li>
      </ol>
    </section>
@endsection

@section('content')


  <!-- Main content -->
  <section class="content">
    <!-- /.box -->

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Tabel Arsip</h3>
        <a href="/arsip/add"> <button class="btn-primary">Add Data</button> </a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nama Arsip</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($data as $row)
            <tr>
              <td><a href="/arsip/show/{{$row->id}}">  {{$row->nama_arsip}} </a></td>
               <td align="center"> 
                  <a href="/arsip/edit/{{$row->id}}"> <button class="btn-primary">Edit</button> </a>
                  <a href="/arsip/delete/{{$row->id}}"> <button class="btn-danger">Delete</button> </a>
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