<?php
    include('header.php');
    include('cpp_sidebar.php');
?>





<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-lg-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Syntax</h4>
                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class=" "></i></a>
                </div>

                <div class="header-elements d-none">
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="" class="breadcrumb-item">C++ Course</a>
                    </div>

                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class=" "></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Inner container -->
            <div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">

                <!-- Left content -->
                <div class="flex-1 order-2 order-lg-1">

                    <!-- Post -->
                    <div class="card">
                        <a href="cpp_getstarted.php"><button style=" margin:1rem; Background-color:#3F51B5; border-radius:8px;
                                    width:6rem; height:2.5rem; color:white; border: 1px solid white;">
                            Previous
                        </button></a>
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="mb-3 text-center">
                                </div>

                                <h4 class="font-weight-semibold mb-1">
                                    <a href="#" class="text-body" style="font-size: 30px;">Syntax</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <ul>
                                        <li><p>As shown in the above example first line #include&lt;iostream&gt;. This is a library that is used to add functional behavior in the program. In this library, we can input output things from the console.</p></li>
                                        <li><p>In the second line using namespace std; means we include a standard library.</p></li>
                                        <li><p>Next line has main() which is a functionality of the program. We can only write the program inside { } brackets after main. These { } brackets are known as the scope of the main function (main method).</p></li>
                                        <li><p>C++ ignores blank spaces, so leaving lines in the program is no harm.</p></li>
                                        <li><p>These above things are known as Skeleton Code. Without these lines, you can’t write any C++ code.</p></li>
                                        <li><p>In the fifth line cout << “Hello World!”; is written. cout is also a functionality of the iostream library, It is used to take input from the console. Always write a string in double quotes like “Hello World!”.</p></li>
                                    </ul>
                                    
                                    <div class="alert alert-primary alert-styled-left alert-dismissible">
										<span class="font-weight-semibold">Note: </span> Every line in C++ ends with semicolon ( ; ).
								    </div>
                                </div>
                            </div>
                        </div>
                        <a href="cpp_output.php"><button style=" margin:1rem; margin-left:80%; Background-color:#3F51B5; border-radius:8px;
                                    width:6rem; height:2.5rem; color:white; border: 1px solid white;">
                            Next
                        </button></a>
                    </div>
                    <!-- /post -->


                </div>
                <!-- /left content -->


                

    <?php
    include('footer.php');
?>
