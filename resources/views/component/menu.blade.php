<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Adi</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li {{(Route::getFacadeRoot()->current()->uri() === 'home') ? 'class=active' : null}}><a href="{{ url('home')}}"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
        <li {{(Route::getFacadeRoot()->current()->uri() === 'karyawan') ? 'class=active' : null}}><a href="{{ url('karyawan')}}"><i class="fa fa-book"></i> <span>Karyawan</span></a></li>
        <li {{(Route::getFacadeRoot()->current()->uri() === 'jabatan') ? 'class=active' : null}}><a href="{{ url('jabatan')}}"><i class="fa fa-book"></i> <span>Jabatan</span></a></li>
        <li {{(Route::getFacadeRoot()->current()->uri() === 'departemen') ? 'class=active' : null}}><a href="{{ url('departemen')}}"><i class="fa fa-book"></i> <span>Departemen</span></a></li>
        <li {{(Route::getFacadeRoot()->current()->uri() === 'arsip') ? 'class=active' : null}}><a href="{{ url('arsip')}}"><i class="fa fa-book"></i> <span>Arsip</span></a></li>
        <li {{(Route::getFacadeRoot()->current()->uri() === 'inventory') ? 'class=active' : null}}><a href="{{ url('inventory')}}"><i class="fa fa-book"></i> <span>Inventory</span></a></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>