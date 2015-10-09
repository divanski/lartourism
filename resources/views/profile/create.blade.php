@extends('app')

@section('style')
    <link rel="stylesheet" href="{{ url('assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css') }}">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="{{ url('assets/css/pages/profile.css') }}">
@endsection

@section('content')
    <!--=== Profile ===-->
    <div class="container content profile">
        <div class="row">
            <!--Left Sidebar-->
            <div class="col-md-3 md-margin-bottom-40">

                <img class="img-responsive profile-img margin-bottom-20" src="assets/img/team/img32-md.jpg" alt=""/>

                <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                    <li class="list-group-item ">
                        <a href="page_profile.html"><i class="fa fa-bar-chart-o"></i> Overall</a>
                    </li>
                    <li class="list-group-item active">
                        <a href="page_profile_me.html"><i class="fa fa-user"></i> Profile</a>
                    </li>
                    <li class="list-group-item">
                        <a href="page_profile_users.html"><i class="fa fa-group"></i> Users</a>
                    </li>
                    <li class="list-group-item">
                        <a href="page_profile_projects.html"><i class="fa fa-cubes"></i> My Projects</a>
                    </li>
                    <li class="list-group-item">
                        <a href="page_profile_comments.html"><i class="fa fa-comments"></i> Comments</a>
                    </li>
                    <li class="list-group-item">
                        <a href="page_profile_history.html"><i class="fa fa-history"></i> History</a>
                    </li>
                    <li class="list-group-item">
                        <a href="page_profile_settings.html"><i class="fa fa-cog"></i> Settings</a>
                    </li>
                </ul>
            </div>
            <!--End Left Sidebar-->

            <!-- Profile Content -->
            <div class="col-md-9">
                <div class="profile-body">
                    <form action="#" class="sky-form">
                        <header>Your profile information</header>
                        <div class="form-group">
                            <input type="hidden" name="user_id" value="{{$user['id']}}">
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Profile Content -->
        </div>
    </div><!--/container-->
    <!--=== End Profile ===-->
@endsection

@section('script')
    @parent
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/counter/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/counter/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/datepicker.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            App.initCounter();
            App.initScrollBar();
            Datepicker.initDatepicker();
        });
    </script>
@endsection