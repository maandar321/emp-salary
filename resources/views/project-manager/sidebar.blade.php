<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
            <img src="{{asset('asset/images/picture.jpg')}}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2>{{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <li><a href="{{url('project-manager/dashboard')}}">
                        <i class="fa fa-dashboard"></i> Dashboard <span></span></a>

                <li class="active"><a><i class="fa fa-table"></i> Leave Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: block;">
                        <li><a href="{{url('team_lead/leave')}}">Apply Leave</a></li>
                        <li><a href="{{url('team-lead/MyLeaves')}}">My leaves</a></li>
                        <li><a href="{{url('team-lead/team-leaves')}}">Pending Approval</a></li>
                        <li><a href="{{url('team-lead/approved-leaves')}}">Approved Leaves</a></li>
                        <li><a href="{{url('team-lead/reject-leave')}}">Rejected Leaves</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>