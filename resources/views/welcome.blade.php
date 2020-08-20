<?php
$uri = $_SERVER['REQUEST_URI'];
$index = '';
$departments='';
$customers='';
$item='';

//dd($uri);

switch ($uri) {
    case '/test/public/home':
        $index = "class=active";
        $title = 'Dashboard';
        break;
case '/test/public/department':
    $departments = "class=active";
        $title = 'Departments';
        break;
case '/test/public/customer':
    $customers = "class=active";
        $title = 'Customers';
        break;



    default:
        $index = 'class="active"';
        $title = 'Dashboard';
        break;
}

?>


        <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Admin Automation System </title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="DIGICON_favicon.png" rel="shortcut icon" type="image/x-icon">

    <!-- Toastr style -->
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">


    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <!-- Gritter -->
    <link href="{{asset('js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <link href="{{asset('css/plugins/select2/select2.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom-style.css')}}" rel="stylesheet">

    <link href="{{asset('css/plugins/clockpicker/clockpicker.css')}}" rel="stylesheet">

    <!--CSS for Image Uploaded -->
    <link href="{{asset('css/plugins/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">

    <!--Datbase table view-->
    <link href="{{asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">

</head>
<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="" src="{{asset('digicon_logo.png')}}" height="50px"/>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold"> </strong>
                             </span>
                            </span>
                        </a>

                    </div>
                    <div class="logo-element" style="background: white">
                        Digicon
                    </div>
                </li>
                <li {{$index}} >
                    <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> <span
                                class="nav-label">Dashboards</span>
                    </a>
                </li>

                <li {{$departments}} >
                    <a href="{{ route('department.index') }}"><i class="fa fa-briefcase"></i> <span
                                class="nav-label">Department  </span>
                    </a>
                </li>
                <li {{$customers}} >
                    <a href="{{ route('customer.index') }}"><i class="fa fa-user"></i> <span
                                class="nav-label">Customer  </span>
                    </a>
                </li>

            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <!--        put sidebar on start of page-wrapper -->
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

            </div>
            <ul class="nav navbar-top-links navbar-right">


                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <span class="m-r-sm welcome-message" style="margin-top: 20px;">Welcome {{--{{auth()->user()->user_name}}--}} </span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">

                        <li>
                            <a >
                                <div>
                                    <i class="fa fa-wrench"></i>
                                    <a href="">
                                        </i>{{ __('Change Password.') }}
                                    </a>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>


                        </li>



                    </ul>
                </li>




            </ul>

        </nav>
        <div class="row  border-bottom "></div>

        @yield('content')

        <div class="footer">

            <div>
                <strong>Copyright</strong> Digicon Developer's Hub &copy; <strong id="ff"></strong>
            </div>
        </div>


        <!-- Mainly scripts -->
        <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
        <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <!-- Flot -->
        <script src="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('js/plugins/flot/jquery.flot.spline.js')}}"></script>
        <script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('js/plugins/flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('js/plugins/select2/select2.full.min.js')}}"></script>

        <!-- Peity -->
        <script src="{{asset('js/plugins/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('js/demo/peity-demo.js')}}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{{asset('js/inspinia.js')}}"></script>
        <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>

        <!-- jQuery UI -->
        <script src="{{asset('js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

        <!-- GITTER -->
        <script src="{{asset('js/plugins/gritter/jquery.gritter.min.js')}}"></script>

        <!-- Sparkline -->
        <script src="{{asset('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Sparkline demo data  -->
        <script src="{{asset('js/demo/sparkline-demo.js')}}"></script>

        <!-- ChartJS-->
        <script src="{{asset('js/plugins/chartJs/Chart.min.js')}}"></script>

        <!-- Toastr -->
        <script src="{{asset('js/plugins/toastr/toastr.min.js')}}"></script>
        <script src="{{asset('js/plugins/clockpicker/clockpicker.js')}}"></script>

        <script type="text/javascript">



            n = new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();
            document.getElementById('ff').innerHTML = y;
            document.getElementById('asd').value = m + '/' + d + '/' + y;
            document.getElementById('asdf').value = m + '/' + d + '/' + y;
        </script>
        <script src="{{asset('js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
        <!-- Clock picker -->
        <script src="{{asset('js/plugins/clockpicker/clockpicker.js')}}"></script>


        <script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>
        <script src="{{asset('js/plugins/jasny/jasny-bootstrap.min.js')}}"></script>

        <script src="{{asset('js/plugins/select2/select2.full.min.js')}}"></script>
        <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

        <script type="text/javascript">


            $(".select2_demo_blood").select2({
                placeholder: "Select Blood Group",
                allowClear: true,

            });

        </script>
        <script>
            $(document).ready(function () {
                $('.clockpicker').clockpicker();


                $('.dataTables-example').DataTable({
                    // pageLength: 25,
                    responsive: true,
                    dom: '<"html5buttons"B>lTfgitp',
                    buttons: [
                        {extend: 'copy'},
                        {extend: 'csv'},
                        {extend: 'excel', title: 'ExampleFile'},
                        {extend: 'pdf', title: 'ExampleFile'},

                        {
                            extend: 'print',
                            customize: function (win) {
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                            }
                        }
                    ]

                });

                $('#data_1 .input-group.date').datepicker({
                    todayBtn: "linked",
                    keyboardNavigation: false,
                    forceParse: false,
                    calendarWeeks: true,
                    autoclose: true
                });


            });


        </script>
    </div>

</div>
</body>
</html>

@include('sweetalert::alert')

@yield('extra')
