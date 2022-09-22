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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - User-Defined</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">User-Defined Functions</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>C++ allows programmers to define their own functions. Custom function group code This code group is given a name (identifier) when it performs a particular task. the function is When called from any part of the program they all execute the code defined in the body of the function.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Types</h5>

                                <p style="font-size: 20px;">There are two types of user-defined functions</p>
                                <ul>
                                    <li><p>void functions</p></li>
                                    <li><p>value returning functions</p></li>
                                </ul>
                            </div>

<hr>



                            <div>
                                <h5 class="font-weight-semibold">Syntax</h5>
                                <pre>
    <code class="language-cpp">
returnType functionName(parameters)
{
   //body
}
    </code>
    </pre>

                            </div>
                            <hr>
                            <div>
                                <h5 class="font-weight-semibold" style="font-size:25px;">Void Functions</h5>
                                <h5 class="font-weight-semibold">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
        #include <iostream>
        using namespace std;
        // function declaration 
        void greet()
        {    
        cout << "Hello World"; 
        }        
        main() 
        { 
            // calling a function 
            greet(); 
        }
    </code>
    </pre>

                            </div>
                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
Hello World
    </code>
    </pre>

                            </div>
                                <hr>
                            <div>
                                <h5 class="font-weight-semibold" style="font-size:25px;">Value Returning Functions</h5>
                                <p style="font-size:20px;">In the above programs, we have used void in the function declaration. It's also possible to return a value from a function. For this, we need to specify the returnType of the function during function declaration. Then, the return statement can be used to return a value from a function. The syntax is as follows:</p>
                                <pre>
    <code class="language-cpp">
returnType functionName(dataType parameter1, dataType parameter2,...) {
    // function body return value;
}
    </code>
    </pre>
                                <h5 class="font-weight-semibold">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
        #include <iostream>
        using namespace std;
        // function prototype 
        int add(int a, int b);        
        main() 
        { 
            int sum; 
            // calling the function and storing 
            // the returned value in sum 
            sum = add(100, 78);
            cout &lt;&lt; "100 + 78 = " &lt;&lt; sum &lt;&lt; endl; 
        } 
        // declaring a function 
        int add(int a, int b) { 
            return (a + b); 
        }
    </code>
    </pre>

                            </div>
                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
100 + 78 = 178
    </code>
    </pre>

                            </div>
                        </div>
                    </div>
                    <!-- /post -->


                </div>
                <!-- /left content -->


                

    <?php
    include('footer.php');
?>
