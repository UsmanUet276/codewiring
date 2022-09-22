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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Datatypes</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Datatypes</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>Unlike many programming languages C++ have some data types. All variables in c++ use datatype to restrict the type of data at the time of declaration. Whenever a variable initializes in c++ memory of that variable based on the datatype allocates in local memory. Every data type requires a different amount of memory. </p>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Types</h5>

                                <p style="font-size: 20px;">The following are data types in c++:</p>
                                <ul>
                                    <li><p>char</p></li>
                                    <li><p>string</p></li>
                                    <li><p>int</p></li>
                                    <li><p>double</p></li>
                                    <li><p>float</p></li>
                                    <li><p>bool</p></li>
                                </ul>
                            </div>
                            
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Explaination</h5>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">char</h5>

                                <p style="font-size: 15px;">char is a data type that store only one character. As it stores only one character, so we name it char. Char typically requires 1 byte of data.</p>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">string</h5>

                                <p style="font-size: 15px;">The string data type is like the combination of characters. It has no predefined size. </p>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">int</h5>

                                <p style="font-size: 15px;">int is a datatype used to store integers. Int requires 4 bytes of memory and ranges from -2147483648 to 2147483648.</p>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">double</h5>

                                <p style="font-size: 15px;">The double Floating Point data type is used for storing double-precision floating-point values or decimal values. The keyword used for the double floating-point data type is double. Double variables typically require 8 bytes of memory space.</p>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">float</h5>

                                <p style="font-size: 15px;">The floating point data type is used for storing floating-point values or decimal values. The keyword used for the floating-point data type is float. float variables typically require 4 bytes of memory space.</p>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">bool</h5>

                                <p style="font-size: 15px;">The Boolean data type is used for storing Boolean or logical values. The keyword used for the Boolean data type is bool. It can store true or false.</p>
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
	        cout << “Size of char :  “ << sizeof(char) << endl;
            cout << “Size of int :  “ << sizeof(int) << endl;
            cout << “Size of float :  “ << sizeof(float) << endl;
            cout << “Size of double :  “ << sizeof(double) << endl;
         } 


    </code>
    </pre>

                            </div>
                                

<hr>



                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
Size of char : 1
Size of int : 4
Size of float : 4
Size of double : 8



    </code>
    </pre>

                            </div>
                        </div>
                        <a href="cpp_variables.php"><button style=" margin:1rem; margin-left:80%; Background-color:#3F51B5; border-radius:8px;
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
