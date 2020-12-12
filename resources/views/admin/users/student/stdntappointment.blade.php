@extends('layouts.app')
@section('content')
<div class=”wrapper”>
        <div class="sidebar" data-image="{{ asset('img/sidebar-5.jpg') }}" data-color="red" >
        <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        PSYCHCARE 2.0
                    </a>
                </div>
                <ul class="nav">
                <li>
                        <a class="nav-link" href="{{ url('home') }}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('stdprofile') }}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('stdntexamresult') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Test Result</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('stdntappointment') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Appointment</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end nav -->
        <div class="content">
        <div class="container-fluid">
                                <div class="card">    
                                    <div class="card-body"> 
        </div>
        </div>
        </div>
        </div>

@endsection
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>
