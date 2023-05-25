    <!-- Preloader parte de arriba del menu y notificaciones del top -->

    @include('layouts.adminlte.preloader')
    <!-- Navbar menu y notificaciones en el top -->
    @include('layouts.adminlte.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      @include('layouts.adminlte.brandlogo')

      <!-- Sidebar -->
      @include('layouts.adminlte.sidebar')
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    
      <!-- /.content-header -->
     
      @if($sectionx)
      <div class="content-header">
        <div class="container-fluid">
          @include('layouts.adminlte.contentheader')
        </div><!-- /.container-fluid -->
      </div>
      @yield('content')
      @else

      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          @include('layouts.adminlte.contentheader')
        </div><!-- /.container-fluid -->
      </div>
      <!-- Main content -->
      <section class="content">
        @yield('content')
      </section>
     
      <!-- /.content -->
    </div> 
    @endif