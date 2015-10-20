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
                    <form action="#" id="sky-form" class="sky-form" novalidate="novalidate">
                    <header>Your Profile</header>

                    <fieldset>
                        <div class="row">
                            <div class="col col-6">
                                <section>
                                    <label class="input">
                                        <i class="icon-prepend fa fa-user"></i>
                                        <input type="text" name="first_name" placeholder="First name">
                                    </label>
                                </section>
                                <section>
                                    <label class="input">
                                        <i class="icon-prepend fa fa-user"></i>
                                        <input type="text" name="middle_name" placeholder="Middle name">
                                    </label>
                                </section>
                                <section>
                                    <label class="input">
                                        <i class="icon-prepend fa fa-user"></i>
                                        <input type="text" name="family_name" placeholder="Family name">
                                    </label>
                                </section>
                            </div>
                            <div class="col col-6">
                                <section>
                                   <label class="input">
                                        <i class="icon-prepend fa fa-envelope"></i>
                                        <input type="email" name="email" placeholder="E-mail" value="{{ $user["email"] }}">
                                    </label> 
                                </section>
                                <section>
                                    <label class="input">
                                        <i class="icon-prepend fa fa-phone"></i>
                                        <input type="tel" name="phone" placeholder="Phone">
                                    </label>
                                </section>
                                <section>
                                    <label class="select">
                                        <select name="gender">
                                            <option value="-" selected="" disabled="">Gender</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </label>
                                </section> 
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="row">
                            <section class="col col-5">
                                <label class="label">Country</label>
                                <label class="input">
                                    <input id="country" type="text" list="list">
                                    <datalist id="list">
                                        <option value="0" selected="" disabled="">Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->Country }}"></option>
                                         @endforeach
                                    </datalist>
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="label">City</label>
                                <label class="select">
                                    <select id="city" name="city">
                                        <option value="1"></option>
                                        <option value="2"></option>
                                    </select>
                                </label>
                            </section>

                            <section class="col col-3">
                                <label class="label">Post code</label>
                                <label class="input">
                                    <input type="text" name="code">
                                </label>
                            </section>
                        </div>

                        <section>
                            <label for="file" class="input">
                                <input type="text" id="file" placeholder="Address">
                            </label>
                        </section>

                        <section>
                            <label class="textarea">
                                <textarea rows="3" name="info" placeholder="Additional info"></textarea>
                            </label>
                        </section>
                    </fieldset>

                    <fieldset>
                        <div class="row">
                            <section class="col col-6">
                                <label class="input">
                                    <i class="icon-append fa fa-calendar"></i>
                                    <input type="text" name="start" id="start" placeholder="Expected start date" class="hasDatepicker">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="input">
                                    <i class="icon-append fa fa-calendar"></i>
                                    <input type="text" name="finish" id="finish" placeholder="Expected finish date" class="hasDatepicker">
                                </label>
                            </section>
                        </div>
                    </fieldset>

                    <footer>
                        <button type="submit" class="btn-u">Continue</button>
                    </footer>
                </form>
                </div>
            </div>
            <!-- End Profile Content -->
        </div>
    </div><!--/container-->
    <!--=== End Profile ===-->
@endsection

@section('script')
    
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/counter/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/counter/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js') }}"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
@endsection
@section('script-bottom')
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/masking.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/validation.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            App.initCounter();
            App.initScrollBar();
            Masking.initMasking();
            Datepicker.initDatepicker();
            Validation.initValidation();
        });
    </script>
@endsection