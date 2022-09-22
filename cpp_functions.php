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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Functions</h4>
                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class=" "></i></a>
                </div>

                <div class="header-elements d-none">
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="" class="breadcrumb-item">C++ FUNCTIONS</a>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Functions</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>Every C++ program has at least one function, the main() function. You can split your code into Various functions. This division should ensure that each function performs a specific task. now, You should create reusable functions, also known as procedures or subprograms.</p>
                                    <p>A function is a block of instructions that is executed when it is called from some other point of the program.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Syntax</h5>
                                <pre>
    <code class="language-cpp">
void myFunction()
{
         //body
          cout &lt;&lt; “Hello World!”;
}
    </code>
    </pre>
                                <p style="font-size:20px;">void is the return type. myFunction is the method name and in curly brackets, there is the body of the function.</p>
                            </div>
                            
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Types</h5>
                                <p style="font-size:20px;">There are two types of functions </p>
                                <ul>
                                    <li><p style="font-size:15px;">Predefined functions: already defined by c++</p></li>
                                    <li><p style="font-size:15px;">User-defined functions: defined by users</p></li>
                                </ul>
                            </div>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Syntax</h5>
                                <pre>
    <code class="language-cpp">
void myFunction()
{
         //body
          cout &lt;&lt; “Hello World!”;
}
    </code>
    </pre>
                                <p style="font-size:20px;">void is the return type. myFunction is the method name and in curly brackets, there is the body of the function.</p>
                            </div>
                            
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Types</h5>
                                <p style="font-size:20px;">There are two types of functions </p>
                                <ul>
                                    <li><p style="font-size:15px;">Predefined functions: already defined by c++</p></li>
                                    <li><p style="font-size:15px;">User-defined functions: defined by users</p></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- /post -->


                </div>
                <!-- /left content -->


                

    <?php
    include('footer.php');
?>
