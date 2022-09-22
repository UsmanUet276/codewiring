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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Function Overloading</h4>
                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class=" "></i></a>
                </div>

                <div class="header-elements d-none">
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="" class="breadcrumb-item">C++ FUNCTION</a>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Datatypes</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>In function overloading, two or more functions can have the same name but different parameters or return types.</p>
                                </div>
                            </div>
<hr>



                            <div>
                                <h5 class="font-weight-semibold">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
         #include&lt;iostream&gt;
         using namespace std;
	     // function prototype 
         int add(int a, int b); 
         double add(double a, double b);
         string add(string a, string b , string c);
         main() { 
            int sum; 
            double sum1;
            string sum2;
            // calling the function and storing 
            // the returned value in sum 
            sum = add(100, 78);
            sum1 = add(100.60, 78.40);
            sum2 = add(“Hello”, “ World”,”!”);
            
            cout &lt;&lt; "100 + 78 = " &lt;&lt; sum &lt;&lt; endl; 
            cout &lt;&lt; "100.60 + 78.40 = " &lt;&lt; sum1 &lt;&lt; endl; 
            cout &lt;&lt; "Hello + World + ! = " &lt;&lt; sum2 &lt;&lt; endl; 
         } 
         // declaring a function 
         int add(int a, int b) { 
            return (a + b); 
         }
         double add(double a, double b) { 
            return (a + b); 
         }
         string add(string a, string b, string c) { 
            return (a + b + c); 
         }
    </code>
    </pre>

                            </div>
                                

<hr>



                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
100 + 78 = 178
100.60 + 78.40 = 179.00
Hello + World + ! = Hello World!
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
