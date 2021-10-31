@extends('layouts.app')
@section('content')
         @hasrole('admin')
        <div class="container">
        <div class="row justify-content-center">
                <div class="card">
                <div class="admincontainer">
                <div class="adminbox">
                <div class="card-body">
                <div class="adminicon">01</div>
                <div class="admincontent">
                <h3>List of Users</h3>
                 <div class="managebtn"><a href="{{ route('admin.users.index') }}">Manage Users</div></a>
             </div>
         </div>
         </div>
         <div class="adminbox">
                <div class="card-body">
                <div class="adminicon">02</div>
                <div class="admincontent">
                <h3>Add Users</h3>
                 <div class="managebtn"><a href="{{ route('register') }}">Add User</div></a>
                </div>
                </div>
                </div>
                @endhasrole

                @hasrole('student')
                <div class=”wrapper”>
        <div class="sidebar" data-image="{{ asset('img/sidebar-5.jpg') }}" data-color="red" >
        <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        PSYCHCARE 2.0
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('studentdash') }}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('questionaire') }}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('stdnttime') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Test Result</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('questionaire') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Take Exams</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('stdntappointment') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Appointment</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
           
                <div class="container-fluid">
                    
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                  
                    <div class="container-fluid">
                                <div class="card">    
                                    <div class="card-body">  
                                    <center><img src="{{ asset('img/wellness.png') }}"></center>
                                    <div class="card2">
           <div class="imgBox">
            <img src="{{ asset('img/wellnesslogo.png') }}">
            </div>
            <div class="details">
                <div class="a"><a href="{{ url('wellness') }}">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Read
                    </a></div>
            </div>
        </div>
            </div>
        </div>
            </div>
            <div class="card"> 
                    <div class="card-body"> 
                           <center><img src="{{ asset('img/exams.png') }}"></center>
                <div class="card2">
                        <div class="imgBox">
                            <img src="{{ asset('img/stresslogo.png') }}">
                        </div>
                        <div class="details">
                                <div class="a"> <a href="{{ url('stdntquestion') }}">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Take Test
                    </a></div>
                </div>
            </div>
              
                <div class="card2">
                        <div class="imgBox">
                            <img src="{{ asset('img/learnerslogo.png') }}">
                        </div>
                        <div class="details">
                                <div class="a"><a href="{{ url('stdntquestion') }}">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Take Test
                        </a>
                        </div></div>
                    </div>
                        <div class="card2">
                        <div class="imgBox">
                            <img src="{{ asset('img/personalitylogo.png') }}">
                        </div>
                        <div class="details">
                                <div class="a"><a href="{{ url('stdntquestion') }}">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Take Test
                        </a></div>
                        </div>
                    </div>
         </div>
</div> 
                    </nav>
                </div>
            </div>
    </div>
                
                @endhasrole
                @hasrole('user')
                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    
                    Wait for the admin to verify your accout.
                @endhasrole
                    
                </div>
            </div>
        </div>
    </div>
</div>
                @hasrole('councilour')
                <div class=”wrapper”>
        <div class="sidebar" data-image="{{ asset('img/sidebar-5.jpg') }}" data-color="red" >
        <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        PSYCHCARE 2.0
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('studentdash') }}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('create') }}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Add Questions</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('stdntexamresult') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Test Result</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('listofstudent') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Appointment</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
           
                <div class="container-fluid">
                    
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            
                            
                        
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            
                   

                @endhasrole
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
