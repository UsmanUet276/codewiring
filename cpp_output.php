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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Output</h4>
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
                        <a href="cpp_syntax.php"><button style=" margin:1rem; Background-color:#3F51B5; border-radius:8px;
                                    width:6rem; height:2.5rem; color:white; border: 1px solid white;">
                            Previous
                        </button></a>
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="mb-3 text-center">
                                </div>

                                <h4 class="font-weight-semibold mb-1">
                                    <a href="#" class="text-body" style="font-size: 30px;">Output</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>The <b>cout</b> is written to print output on the console, It is followed by two < signs ( cout << ). After<b>
                                            << </b> operator you have to enter a string in double quotations which you want to print. </p>

                                    <div class="alert alert-primary alert-styled-left alert-dismissible">
                                        <span class="font-weight-semibold">Note: </span> You can also print integer values from cout without using double quotation marks. And don’t forget to use a semicolon at the end.
                                    </div>
                                </div>
                            </div>
                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
        #include&lt;iostream&gt;
        using namespace std;
        main()
        {
            cout << "Hello World!";
            
            cout << “This is my second Program.”;
        } 

    </code>
    </pre>

                            </div>

                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
    Hello World!This is my second Program.

    </code>
    </pre>

                            </div>
                                <hr>
                            <div class="mb-4">
                                <div class="mb-3 text-center">
                                </div>

                                <h4 class="font-weight-semibold mb-1">
                                    <a href="#" class="text-body" style="font-size: 30px;">New Lines</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>Seems to be a problem? </p>
                                    <p>Well Yes. The two outputs are in the same line so you have to jump on the second line for the second input, so we use “<b>\n</b>” or <b>endl</b>.</p>
                                </div>
                            </div>
                                
                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
        #include&lt;iostream&gt;
        using namespace std;
        main()
        {
            cout << “Hello World! \n”;
            cout << “This is my second Program.” << endl;
            cout << “This is new Line.”;
            cout << endl;
            cout << “This is next one.”;

        } 

    </code>
    </pre>

                            </div>

                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-css">
    Hello World! 
    This is my second Program.
    This is new Line.
    This is next one.
    </code>
    </pre>

                            </div>
                                <hr>

                        </div>
                        <a href="cpp_datatypes.php"><button style=" margin:1rem; margin-left:80%; Background-color:#3F51B5; border-radius:8px;
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
