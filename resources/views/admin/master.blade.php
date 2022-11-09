<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>CDRI IRIS - Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">
        <!-- jquery.vectormap css -->
        <link href="{{asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <link href="{{asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />  
        <!-- Bootstrap Css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <!-- for color palette-->
       
        <link href="{{asset('admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">  
        <link href="{{asset('admin/assets/libs/spectrum-colorpicker2/spectrum.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet">

       
         <!-- DataTables -->
         <link href="{{asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('admin/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
 
         <!-- Responsive datatable examples -->
         <link href="{{asset('admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />     
 

    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
          @include('admin.body.header')

            <!-- ========== Left Sidebar Start ========== -->
           @include('admin.body.leftsidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

               @yield('admin')
                <!-- End Page-content -->
               
               @include('admin.body.footer')
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
       {{-- @include('admin.body.rightsidebar') --}}
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        
        <!-- Responsive examples -->
        <script src="{{asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/pages/dashboard.init.js')}}"></script>

      
        <script src="{{asset('admin/assets/libs/parsleyjs/parsley.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/pages/form-validation.init.js')}}"></script>

        <script src="{{asset('admin/assets/libs/select2/js/select2.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/spectrum-colorpicker2/spectrum.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/pages/form-advanced.init.js')}}"></script>

         <!-- Required datatable js -->
         <script src="{{asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
         <script src="{{asset('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
         <!-- Buttons examples -->
         <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
         <script src="{{asset('admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
         <script src="{{asset('admin/assets/libs/jszip/jszip.min.js')}}"></script>
         <script src="{{asset('admin/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
         <script src="{{asset('admin/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
         <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
         <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
         <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
 
         <script src="{{asset('admin/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
         <script src="{{asset('admin/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
         
         <!-- Responsive examples -->
         <script src="{{asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
         <script src="{{asset('admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
 
         <!-- Datatable init js -->
         <script src="{{asset('admin/assets/js/pages/datatables.init.js')}}"></script>


           <!--tinymce js-->
         <script src="{{asset('admin/assets/libs/tinymce/tinymce.min.js')}}"></script>

          <!-- init js -->
         <script src="{{asset('admin/assets/js/pages/form-editor.init.js')}}"></script>

           <!-- App js -->
        <script src="{{asset('admin/assets/js/app.js')}}"></script>



        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
       

  </body>
  </html>


    </body>

</html>


