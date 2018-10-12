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
    <li><a href="#"><i class="fa fa-dashboard"></i>Arsip</a></li>
    <li class="active">Detail</li>
  </ol>
</section>
@endsection

@section('content')


  <!-- Main content -->
  <section class="content">
    
    <!-- Profile Image -->
    <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">{{$data->nama_arsip}}</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

                    <p class="text-muted"></p>
                </li>
                <li class="list-group-item">
                        <strong><i class="fa fa-phone margin-r-5"></i> Nomor Telepon</strong>

                        <p class="text-muted"></p>
                </li>
                <li class="list-group-item">
                        <strong><i class="fa fa-briefcase margin-r-5"></i> Jabatan</strong>

                        <p class="text-muted"></p>
                </li>
              </ul>
              <a href="{{ url('arsip')}}" class="btn btn-default">Back</a>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection