<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="/image/logo.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, address, phone, icons" />

    <title>C++ Course</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <title>CodeWiring</title>

    <!-- Icon css link -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <!--             <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!--         <link href="css/style.css" rel="stylesheet">-->
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/my.css" rel="stylesheet" type="text/css">



    <link rel="stylesheet" href="prism.css">




    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="global_assets/js/main/jquery.min.js"></script>
    <script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="global_assets/js/demo_pages/dashboard.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/sparklines.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/lines.js"></script>
    <script src="globxal_assets/js/demo_charts/pages/dashboard/light/areas.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/donuts.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/bars.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/progress.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/pies.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/bullets.js"></script>
    <!-- /theme JS files -->
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .dropdown-content1 {
            display: none;
            position: absolute;
            background-color: #fff;
            width: 100%;
            left: 0;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content1 .header {
            background: red;
            padding: 16px;
            color: white;
        }

        .dropdown:hover .dropdown-content1 {
            display: block;
        }

        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            background-color: #fff;
            height: 250px;
        }

        .column a {
            float: none;
            color: black;
            padding: 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .column a:hover {
            background-color: #ddd;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }


        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                height: auto;
            }

    </style>

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-lg navbar-dark bg-indigo navbar-static">
        <div class="d-flex flex-1 d-lg-none">
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>

            <button data-target="#navbar-search" type="button" class="navbar-toggler" data-toggle="collapse">
                <i class="icon-search4"></i>
            </button>
        </div>
        <div class="text-center text-lg-left" style="padding: 15px 0px 10px 0px">
            <a href="index.php">
                <img src="image/12.png" class="d-none d-sm-block" alt="logo" width="150px" height="35px">
                <img src="image/logo.png" class="d-sm-none" alt="lg" width="30px" height="30px">
            </a>
        </div>

        <div class="navbar-collapse collapse flex-lg-1 mx-lg-3 order-2 order-lg-1" id="navbar-search">
            <div class="navbar-search d-flex align-items-center py-2 py-lg-0">
                <div class="form-group-feedback form-group-feedback-left flex-grow-1">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="form-control-feedback">
                        <i class="icon-search4 text-white opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end align-items-center flex-1 flex-lg-0 order-1 order-lg-2">
            <ul class="navbar-nav flex-row">

                <li class="nav-item">
                    <a href="index.php" class="navbar-nav-link navbar-nav-link-toggler">
                        <i class="icon-home8"></i>
                    </a>
                </li>
                <li class="nav-item nav-item-dropdown-lg dropdown">
                    <a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-book3"></i>
                        <span class="d-none d-lg-inline-block ml-2">Courses</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-lg-350">
                        <div class="row no-gutters">
                            <div class="dropdown-content1" style="background-color:#fff">
                                <div class="row">
                                    <div class="column">
                                        <h3>Basic</h3>
                                        <a href="cpp_introduction.php" style="border-radius:5px; text-align:center;">C++</a>
                                        <a href="comming_soon.php" style="border-radius:5px; text-align:center;">Python</a>
                                        <a href="comming_soon.php" style="border-radius:5px; text-align:center;">HTML</a>
                                    </div>
                                    <div class="column">
                                        <h3>Advance</h3>
                                        <a href="#" style="border-radius:5px; text-align:center;">Coming Soon</a>
                                        <a href="#" style="border-radius:5px; text-align:center;">Coming Soon</a>
                                        <a href="#" style="border-radius:5px; text-align:center;">Coming Soon</a>
                                    </div>
                                    <div class="column">
                                        <h3>Premium</h3>
                                        <a href="#" style="border-radius:5px; text-align:center;">Coming Soon</a>
                                        <a href="#" style="border-radius:5px; text-align:center;">Coming Soon</a>
                                        <a href="#" style="border-radius:5px; text-align:center;">Coming Soon</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="team.php" class="navbar-nav-link navbar-nav-link-toggler ">
                        <i class="icon-people"></i>
                        <span class="d-none d-lg-inline-block ml-2">Team</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->
