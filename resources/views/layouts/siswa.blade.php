
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SPK</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ url('public/font-awesome-4.6.1/css/font-awesome.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ url('public/ionicons-2.0.1/css/ionicons.min.css') }}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ url('public/plugins/datatables/dataTables.bootstrap.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ url('public/dist/css/AdminLTE.min.css')}}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ url('public/dist/css/skins/_all-skins.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
        <style type="text/css">
            html, body{
             width:100%;
             height:100%;
             background-color:#fff;
           font-family: 'Sansita', sans-serif;
             }
            .vcenter{
                display: inline-block;
                vertical-align: middle;
                float: none;
            }
        </style>
        @yield('style')
    </head>
      <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

          @include("layouts.header")
          @include("layouts.sidebar")

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
                @yield("content")
          </div><!-- /.content-wrapper -->
          <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Laravel</b> 5.4
            </div>
            <strong>Copyright &copy; 2017 <a href="">SPK Zulham Azwar Achmad</a>.</strong> All rights reserved.
          </footer>

        </div><!-- ./wrapper -->

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="{{ url('public/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('public/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
        <!-- SlimScroll -->
        <script src="{{ url('public/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ url('public/plugins/fastclick/fastclick.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('public/dist/js/app.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ url('public/dist/js/demo.js') }}"></script>
        @yield('script')
    </body>
</html>
