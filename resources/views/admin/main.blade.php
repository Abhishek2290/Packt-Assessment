<!DOCTYPE html>
<html>
@include('admin.layout.head')
@include('admin.layout.customCss')
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admin.layout.sidebar')
          
           
            <div class="layout-page">
                <!-- Navbar -->
                @include('admin.layout.header')
                <!-- / Navbar -->
               
  
                <!-- Content wrapper -->
                <div class="content-wrapper">
                  <div class="container-xxl flex-grow-1 container-p-y">
                    @include('admin.layout.error')
                    @yield('content')
                  </div>
                </div>
                <!-- Content wrapper -->
              </div>
              <!-- / Layout page -->
            </div>
            @include('admin.layout.footer')

            <!--Datatable External Js-->
            {{-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> --}}
            {{-- <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> --}}
            <script src="{{asset('assets/js/dataTable/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('assets/js/dataTable/dataTables.bootstrap4.min.js')}}"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!--External Js-->
            <script src="{{ asset('assets/js/dropify/dropify.min.js') }}"></script>
            <script>
                $(document).ready(function() {
                    $('.dropify').dropify();
                });
            </script>
            @yield('javascript')
          </div>
</body>

</html>
