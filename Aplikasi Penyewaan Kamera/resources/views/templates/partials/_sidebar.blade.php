<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="active">
          <a href="{{ route('dashboard') }}">
            <i class="fa fa-th"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ route('kamera') }}">
            <i class="fa fa-camera"></i> <span>Kamera</span>
          </a>
        </li>
        <li>
          <a href="{{ route('customer') }}">
            <i class="fa fa-user"></i> <span>Customer</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>