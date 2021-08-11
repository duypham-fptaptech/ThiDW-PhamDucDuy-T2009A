
<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor content-bodyCSS -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/select2/select2.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/summernote/summernote.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/vendor/summernote/summernote-bs3.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="http://127.0.0.1:8000/assets/vendor/modernizr/modernizr.js"></script>

</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="../" class="logo">
                <img src="http://127.0.0.1:8000/assets/images/logo.png" height="35" alt="JSOFT Admin" />
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            <form action="pages-search-results.html" class="search nav-form">
                <div class="input-group input-search">
                    <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                    <span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
                </div>
            </form>

            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="http://127.0.0.1:8000/assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="http://127.0.0.1:8000/assets/images/!logged-user.jpg" />
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                        <span class="name">John Doe Junior</span>
                        <span class="role">administrator</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="sidebar-header">
                <div class="sidebar-title">
                    Navigation
                </div>
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <div class="nano">
                <div class="nano-content">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-main">
                            <li class="nav-active">
                                <a href="index.html">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                    <span>Quản lý bài viết</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="/form">
                                            Thêm mới
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/list">
                                            Danh sách
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <hr class="separator" />
                </div>

            </div>

        </aside>
        <!-- end: sidebar -->
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Article Forms</h2>

                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="index.html">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Forms</span></li>
                        <li><span>Advanced</span></li>
                    </ol>

                    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                </div>
            </header>
            <!-- start: page -->
            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <h2 class="panel-title">Nhập thông tin tin tức</h2>
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal form-bordered" action="/form" method="post">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">Id</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="inputDefault" name="id">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="inputDefault" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">price</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="inputDefault" name="price">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">Thumbnail</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="inputDefault" name="thumbnail">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-6 col-xs-11">
                                        <button class="btn btn-sm btn-primary colorpicker-element">
                                            Submit
                                        </button>
                                        <button class="btn btn-sm btn-default colorpicker-element">
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>

    <aside id="sidebar-right" class="sidebar-right">
        <div class="nano">
            <div class="nano-content">
                <a href="#" class="mobile-close visible-xs">
                    Collapse <i class="fa fa-chevron-right"></i>
                </a>

                <div class="sidebar-right-wrapper">

                    <div class="sidebar-widget widget-calendar">
                        <h6>Upcoming Tasks</h6>
                        <div data-plugin-datepicker data-plugin-skin="dark" ></div>

                        <ul>
                            <li>
                                <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                <span>Company Meeting</span>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-widget widget-friends">
                        <h6>Friends</h6>
                        <ul>
                            <li class="status-online">
                                <figure class="profile-picture">
                                    <img src="http://127.0.0.1:8000/assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-online">
                                <figure class="profile-picture">
                                    <img src="http://127.0.0.1:8000/assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-offline">
                                <figure class="profile-picture">
                                    <img src="http://127.0.0.1:8000/assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-offline">
                                <figure class="profile-picture">
                                    <img src="http://127.0.0.1:8000/assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </aside>
</section>

<!-- Vendor -->
<script src="http://127.0.0.1:8000/assets/vendor/jquery/jquery.js"></script>
<script src="http://127.0.0.1:8000/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="http://127.0.0.1:8000/assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="http://127.0.0.1:8000/assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="http://127.0.0.1:8000/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="http://127.0.0.1:8000/assets/vendor/magnific-popup/magnific-popup.js"></script>
<script src="http://127.0.0.1:8000/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="http://127.0.0.1:8000/assets/vendor/summernote/summernote.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="http://127.0.0.1:8000/assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="http://127.0.0.1:8000/assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="http://127.0.0.1:8000/assets/javascripts/theme.init.js"></script>

<!-- Examples -->
<script src="http://127.0.0.1:8000/assets/javascripts/dashboard/examples.dashboard.js"></script>

</body>
</html>
