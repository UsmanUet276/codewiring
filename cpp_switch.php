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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Switch</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Switch Statement</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>Depending on the result of an integral expression, switch permits choosing from several different code sections.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Syntax</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
         #include&lt;iostream&gt;
         using namespace std;
         main()
         {
	        switch(condition) {
            case 1:
                // code 
                break;
            case 2:
                // code
                break;
            default:
            // code
            }

         } 
    </code>
    </pre>          
                                <p style="font-size:20px;">If a matched expression is discovered, execution may move on to default or subsequent case labels. To halt execution and hand off control to the sentence that comes after the switch statement, use the break statement. Without a break statement, all statements, including the default, from the matched case label through the end of the switch are performed.</p>
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
	        int num=1;
            switch(num+1) {
                case 1: 
                    cout&lt;&lt;"Case1: Value is: "&lt;&lt;num&lt;&lt;endl;
                    break;
                case 2: 
                    cout&lt;&lt;"Case2: Value is: "&lt;&lt;num&lt;&lt;endl;
                    break;
                case 3: 
                    cout&lt;&lt;"Case3: Value is: "&lt;&lt;num&lt;&lt;endl;
                    break;
                default: 
                    cout&lt;&lt;"Default: Value is: "&lt;&lt;num&lt;&lt;endl;
            }

         } 
    </code>
    </pre>

                            </div>
                                

<hr>



                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
Case2: Value is: 1
    </code>
    </pre>

                            </div>
                        </div>
                        <a href="cpp_loops.php"><button style=" margin:1rem; margin-left:80%; Background-color:#3F51B5; border-radius:8px;
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
