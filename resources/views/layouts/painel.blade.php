
<!DOCTYPE html>
<html>
    
  @component('components.head')
  @endcomponent

<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->

<div class="wrapper">
  @component('components.header')
  @endcomponent
  @component('components.sidebar')
  @endcomponent

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <main class="py-4">
          @yield('content')
      </main>
  </div>
  <!-- /.content-wrapper -->

  @component('components.footer')
  @endcomponent

  <!-- Control Sidebar -->
  @component('components.control-sidebar')
  @endcomponent

</div>
<!-- ./wrapper -->

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
