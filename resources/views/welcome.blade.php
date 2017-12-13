<!DOCTYPE html>
<html lang="en">
<head>
    <title>JobStreet.com - Job Search</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="Public">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="https://dna.jsstatic.com/myjs/myjs-1.3.0.css">
    <link rel="stylesheet" href="https://dna.jsstatic.com/select2/select2.css">
    <link rel="stylesheet" href="https://dna.jsstatic.com/pi/icon-font/2.3/icon-font.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../ico/favicon.png">
    <link rel="apple-touch-icon" href="../../ico/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href=../../"ico/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../ico/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../ico/touch-icon-ipad-retina.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../ico/touch-icon-iphone6p-ios8.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- End of Favicon -->

</head>
<body class="body-mobile-align">

<!--=====================================================Header========================================================================-->
<div class="mobile-navbar-fixed-top">
    <div class="navbar navbar-inverse navbar-static">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" data-canvas="body"
                        type="button" onclick="$('#mobile_search_bar').removeClass('active');">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="jslogo jslogo-mobile visible-xs"></span>
                <!--Mobile View Search Bar toggle button-->
                <div class="search-toggle">
                    <a href="#"><span class="icon-search visible-xs"></span></a>
                </div>
                <div class="navbar-search toggle">
                    <div class="container visible-xs">
                        <div class="col-xs-12">
                            <form id="frmSearch_mobile" name="frmSearch-mobile" action="/" method="get">
                                <div class="input-group">
                                    <input class="form-control no-email" id="search_box_keyword_mobile" name="key" type="text" placeholder="Search Jobs By Title, Skills or Keywords...">
                                    <span class="input-group-btn">
										<a class="btn btn-default" id="header_searchbox_btn_mobile"
                                           type="button">Search</a>
										</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-collapse navbar-collapse-align collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://www.jobstreet.com.my"
                                          title="Leading Job Site in Malaysia - Find Jobs in Malaysia">Home</a></li>
                    <li><a id="header-job-link" href="http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php"
                           title="Search Jobs @ Job Search JobStreet.com Malaysia">Search Jobs</a></li>
                    <li><a href="http://www.jobstreet.com.my/en/companies" title="company profiles">Company Profiles</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" aria-expanded="false">MyJobStreet&nbsp;<b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header hidden-xs">My Resume</li>
                            <li class="hidden-xs"><a
                                        href="http://myjobstreet-dev.jobstreet.com.my/resume/preview-resume.php?x=a2p6dkp4hosoojv84nsr44ecp4">Preview
                                    Resume</a></li>
                            <li class="hidden-xs"><a
                                        href="http://myjobstreet-dev.jobstreet.com.my/resume/edit-work-experience.php?x=a2p6dkp4hosoojv84nsr44ecp4">Edit
                                    Resume</a></li>
                            <li class="divider hidden-xs"></li>
                            <li class="dropdown-header">My Applications</li>
                            <li>
                                <a href="http://myjobstreet-dev.jobstreet.com.my/application/application-status.php?view=0&amp;x=a2p6dkp4hosoojv84nsr44ecp4">Online
                                    Applications</a></li>
                            <li>
                                <a href="http://myjobstreet-dev.jobstreet.com.my/application/interview-request.php?view=latest&amp;x=a2p6dkp4hosoojv84nsr44ecp4">Interview
                                    Requests</a></li>
                            <li class="hidden-xs"><a id="header_emp_request_link"
                                                     href="http://myjobstreet-dev.jobstreet.com.my/application/employer-request.php?x=a2p6dkp4hosoojv84nsr44ecp4">Resume
                                    Requests</a></li>
                            <li class="divider hidden-xs"></li>
                            <li class="dropdown-header hidden-xs">Career Enhancers</li>
                            <li class="hidden-xs"><a
                                        href="http://myjobstreet-dev.jobstreet.com.my/career-enhancer/pa-summary.php?x=a2p6dkp4hosoojv84nsr44ecp4">Priority
                                    Application</a></li>
                            <li class="hidden-xs"><a
                                        href="http://myjobstreet-dev.jobstreet.com.my/career-enhancer/salary-report.php?x=a2p6dkp4hosoojv84nsr44ecp4">Salary
                                    Report</a></li>
                            <li class="hidden-xs"><a
                                        href="javascript: popup_win8('http://myjobstreet-dev.jobstreet.com.my/career-enhancer/assessment.php?x=a2p6dkp4hosoojv84nsr44ecp4', 1000,700,'JELA');">English
                                    Assessment</a></li>
                            <li class="hidden-xs">
                                <a class="hidden-xs"
                                   href="javascript: popup_win8('http://www.jobstreet.com.my/career-resources/', 1000,700,'JELA');">
                                    Career Resources</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"
                           aria-expanded="false">Learning&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.jobstreet.com.my/learning/">View Course</a></li>
                            <li>
                                <a href="http://myjobstreet-dev.jobstreet.com.my/learning/learning-profile.php?x=g8q1cqbllnaoieol1h0ulno8h2">Edit
                                    Learning Profile</a></li>
                        </ul>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" aria-expanded="false">More&nbsp;<b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://job-search-dev.jobstreet.com.my/malaysia/browse/oversea.html">Overseas
                                    Jobs</a></li>
                            <li><a href="http://www.jobstreet.com.my/campus/">Fresh Grad Jobs</a></li>
                            <li><a href="http://job-search-dev.jobstreet.com.my/malaysia/job-classified.php">Classified
                                    Jobs</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown" style="display: list-item;">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" aria-expanded="false">
                            <span class="display-name">Lucas Lee</span>&nbsp;
                            <span><b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="http://myjobstreet-dev.jobstreet.com.my/home/logout.php?x=g8q1cqbllnaoieol1h0ulno8h2">Logout</a>
                            </li>
                            <li class="hidden-xs"><a
                                        href="http://myjobstreet-dev.jobstreet.com.my/home/help.php?x=g8q1cqbllnaoieol1h0ulno8h2&amp;site=my">Help</a>
                            </li>
                            <li class="hidden-xs"><a class="language-separator"
                                                     href="http://myjobstreet-dev.jobstreet.com.my/registration/update-account.php?x=g8q1cqbllnaoieol1h0ulno8h2">My
                                    Account</a></li>
                        </ul>
                    </li>
                    <li style="display: none;">
                        <a href="https://myjobstreet-dev.jobstreet.com.my/home/login.php?site=my&amp;language_code=3">Log
                            In</a>
                    </li>
                    <li class="hidden-xs" style="display: none;"><span>|</span></li>
                    <li style="display: none;">
                        <a href="https://myjobstreet-dev.jobstreet.com.my/registration/simple-signup.php?site=my&amp;language_code=3">Sign
                            Up</a>
                    </li>
                    <ul></ul>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <div class="navbar-lower-deck hidden-xs">
            <div class="container">
                <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs">
                    <a class="jslogo my" id="header-logo-link" href="http://www.jobstreet.com.my"
                       title="Leading Job Site in Malaysia - Find Jobs, Advertise Jobs in Malaysia"></a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="search-area">
                        <form id="frmSearch" name="frmSearch" action="/" method="get">
                            <div class="input-group">
                                <input class="form-control no-email" id="search_box_keyword" name="key" type="text" placeholder="Search Jobs By Title, Skills or Keywords...">

                                {{--<input class="form-control" name="key" type="text"--}}
                                       {{--placeholder="Search Jobs By Title, Skills or Keywords...">--}}
                                <span class="input-group-btn"><a class="btn btn-default" type="button" onclick="document.getElementById('frmSearch').submit();"><span
                                                class="icon-search"></span></a></span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                    <a class="btn btn-link"
                       href="http://job-search-dev.jobstreet.com.my/malaysia/advance-job-search.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;sort=1&amp;order=0"
                       title="Advanced Job Search @ JobStreet.com ">Advanced</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs text-right">
                    <a class="btn btn-link employer-link" id="header-employer-link"
                       href="http://www.jobstreet.com.my/employers/"
                       title="Post a Job Ad: +603-­2176 0333">Employers</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===============================================End of header=============================================================================================-->
<div class="page-title">
    <div class="container">
        <div class="information col-lg-12">
            <span class="save-job-alert hidden-sm hidden-xs">
					<a id="save_job_alert" href="#" title="Save as email job alert">
					<span class="icon-envelope"></span>Save as email job alert
					</a>
				</span>
            <span class="result-count pull-right">1 - 20 of 100 jobs</span>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-3">

    </div>
    <div class="col-xs-12 col-md-12">
        <!--======================================Tabs====================================================-->
        <div class="panel-tabs text-left">
            <div class="col-sm-10">
                <h1 id="search_desc">

                    @foreach($arr_key as $key)
                        <button type="button" class="btn btn-danger">{{$key}}  <i class="fa fa-times-circle-o" aria-hidden="true"></i></button><div class="divider"></div>
                    @endforeach
                </h1>
                <style>
                    .divider {
                        width: 5px;
                        height: auto;
                        display: inline-block;
                    }

                </style>
            </div>
            <div class="col-sm-2 pull-right">
                <a type="button" class="btn btn-danger" href="/clear">Clear all</a>
            </div>
        </div>
        <!--======================================End of Tabs====================================================-->
        <div class="tab-content jobs jobs-no-hover">
            <!--Search Result-->
            <div class="tab-pane fade in active">
                @foreach($data as $job)
                    <div class="panel panel-card">
                        <div class="panel-body card-body">
                            <div class="card-primary">
                                <a class="pull-right hidden-xs" href="#"
                                   title="View all jobs posted by F-Secure Corporation Sdn. Bhd."><img
                                            src="http://placehold.it/150x150"></a>
                                <h4 class="card-title"><a href="#"
                                                          title="View job details - Senior Web Development Engineer">{{$job->fields->position_title}}</a>
                                </h4>
                                <div class="info no-fig xn">
                                    <a href="#" title="View all jobs posted by F-Secure Corporation Sdn. Bhd."><span
                                                class="text">{{$job->fields->company_name}}</span></a>
                                </div>
                            </div>
                            <div class="card-secondary">
                                <span class="info no-fig xn job-location"><a href="#"><span
                                                class="icon-location"></span><span
                                                class="text">{{$job->fields->work_location_state}}</span></a></span><span
                                        class=
                                        "info no-fig xn expected-salary"><span class="icon-dollar-sign"></span><span
                                            class="text">Around Expected Salary</span></span>
                            </div>
                            <div >
                                <ul class="list-inline" style="padding-left: 0px;">
                                    @foreach($job->fields->tags as $tag)
                                        <li>
                                            <h4><span class="label label-danger" href="#">{{$tag}}</span></h4>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                            <div class="card-tertiary hidden-xs">
                                <div class="info no-fig xn">
                                    {{--*/  $dummy = {!!$job->fields->job_responsibilities!!} /*--}}
                                    {{--<span class="text">{{$job->fields->job_responsibilities}}</span>--}}
                                </div>
                            </div>
                            <div class="sub-info">
                                <span>3 minutes ago</span>
                                <div class="sub-info-expand hidden-xs">
                                    &nbsp;&bull;&nbsp;
                                    <span class="sub-info-toggle" role="button">
										<span class="text">more</span>
										<span class="caret"></span>
                                    </span>
                                    <div class="sub-info-detail collapse" aria-expanded="false">
                                        <hr>
                                        <a class="muted hidden-xs" href="#"
                                           title="IT - Software &gt; Software Engineer/Programmer">IT - Software</a>
                                        &gt;
                                        <a class="muted hidden-xs" href="#" title="Software Engineer/Programmer">Software
                                            Engineer/Programmer</a>
                                        <div class="industry-info">
                                            <span class="hidden-xs">Industry:</span>&nbsp;<a class="muted hidden-xs"
                                                                                             href="#"
                                                                                             title="IT / Software in Malaysia">IT
                                                / Software</a>
                                        </div>
                                        {{--<div class="tag-info">--}}
                                        {{--<ul class="list-inline">--}}
                                        {{--<li><span class="icon-tag"></span></li>--}}
                                        {{--<li><a class="tag-text" href="#">senior finance</a></li>--}}
                                        {{--<li><a class="tag-text" href="#">finance manager</a></li>--}}
                                        {{--</ul>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="panel">
                <div class="panel-body text-center">
                    <ul class="pagination pull-left">
                        <li class="disabled">
                            <a href="#"><span class="icon-angle-left"></span></a>
                        </li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a class="hidden-xs" href="#">6</a>
                        </li>
                        <li>
                            <a href="#"><span class="icon-angle-right"></span></a>
                        </li>
                    </ul>
                    <span class="pull-right pagination-result-count">1 - 20 of 100 jobs</span>
                </div>
            </div>
        </div><!--End of Search Result-->
    </div><!--End of Second content tab-->
</div>
<div class="hidden-xs hidden-sm col-md-2">
    <span class=""><img src="http://placehold.it/160x600"></span>
    <div class="clearfix x2">
        <span class=""></span>
    </div>

    <div class="hidden-xs hidden-sm col-md-2">

    </div>
    <span class=""></span>
</div>
<a href="javascript:;" class="btn btn-top"><span class="icon-angle-up"></span></a>

<footer>
    <div class="container">
        <ul class="list-inline">
            <li><a href="http://www.jobstreet.com.my/sitemap.htm" id="footer-sitemap">Site Map</a></li>
            <li><a href="http://www.jobstreet.com.my/aboutus/default.htm">About Us</a></li>
            <li>
                <a href="http://job-search.jobstreet.com/CompanyProfile/company-profile.php?dm=http%3a%2f%2fsiva-my.jsstatic.com&amp;p=%2f_ads%2f_static%2fxml%2fMY%2f&amp;token=28b361b7dc8f5a797749c8397de04e59d5e14a2968d0b48e496e&amp;rnd=91859390#.UrjtWvQW1qV"
                   id="footer_work_with_us">Work With Us</a></li>
            <li><a href="http://www.jobstreet.com.my/terms-of-use.htm" id="footer_term_use">Terms of Use</a></li>
            <li><a href="http://www.jobstreet.com.my/privacy-policy.htm" id="footer_privacy_policy">Privacy Policy</a>
            </li>
            <li><a href="http://www.jobstreet.com.my/safe-job-search-guide.htm" id="footer_safe_guide">Safe Job Search
                    Guide</a></li>
            <li><a href="http://myjobstreet-dev.jobstreet.com.my/home/help.php?site=my" id="footer_help">Help</a></li>
            <li><a href="http://myjobstreet-dev.jobstreet.com.my/home/feedback.php?site=my&amp;sub=feedback"
                   id="footer_feedback" target="_blank">Send Feedback</a></li>
        </ul>
        <p class="footer-copyright">Copyright &copy; <span id="year"></span> JobStreet.com</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="https://dna.jsstatic.com/js/bootstrap.js"></script>

<!-- Plugin -->
<script src="https://dna.jsstatic.com/select2/select2.js"></script>
<script src="https://dna.jsstatic.com/js/myjs.js"></script>

<!-- JS file -->
<script src="/js/jquery.easy-autocomplete.min.js"></script>

<!-- CSS file -->
<link rel="stylesheet" href="/css/easy-autocomplete.min.css">

<!-- Additional CSS Themes file - not required-->
<link rel="stylesheet" href="/css/easy-autocomplete.themes.min.css">
<script>
    var options = {
        url: "suggest.json",

        categories: [
            {   //Category fruits
                listLocation: "fruits",
                header: "-- Fruits --"
            },
            {   //Category vegetables
                listLocation: "vegetables",
                header: "-- Vegetables --"
            }
        ]

    };
    $("#search_box_keyword_mobile").easyAutocomplete(options);
    $("#search_box_keyword").easyAutocomplete(options);
</script>
<script>

    $(document).ready(function () {
        //Toggle sub info details
        $(".sub-info-toggle").click(function () {
            var sub_info_parent = $(this).parent();
            var toggle_text = $(this).find(".text");

            sub_info_parent
                .toggleClass("expand")
                .find(".sub-info-detail").collapse('toggle');
            toggle_text.text(sub_info_parent.hasClass("expand") ? 'less' : 'more');
        });

    });
</script>
</body>
</html>