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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Multidimentional Array</h4>
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
                    <div class="card" style="width:80">
                        <a href="cpp_getstarted.php"><button style=" margin:1rem; Background-color:#3F51B5; border-radius:8px;
                                    width:6rem; height:2.5rem; color:white; border: 1px solid white;">
                            Previous
                        </button></a>
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="mb-3 text-center">
                                </div>

                                <h4 class="font-weight-semibold mb-1">
                                    <a href="#" class="text-body" style="font-size: 30px;">2D (2 Dimentional Array)</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>The two-dimensional array can be defined as an array of arrays. The 2D array is organized as matrices which can be represented as the collection of rows and columns.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Declaration</h5>
                                <pre>
    <code class="language-cpp">
Data_type arr_name[rows][columns];
    </code>
    </pre>

                            </div>

                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Initialization of 2D Array in C++ </h5>

                                <p style="font-size: 15px;">In the 1D array, we don't need to specify the size of the array if the declaration and initialization are being done simultaneously. However, this will not work with 2D arrays. We will have to define at least the second dimension of the array. The two-dimensional array can be declared and defined in the following way.</p>
                                <pre>
    <code class="language-cpp">
int arr[4][3]={{1,2,3},{2,3,4},{3,4,5},{4,5,6}};
    </code>
    </pre>
                            </div>

                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Example</h5>
                                <p>Write a program that initializes matrix named as cars mentioned and displays values as follows.</p>
                                <p>10 7 12 10 4</p>
                                <p>18 11 15 17 2</p>
                                <p>23 19 12 16 14 </p>
                                <p>7 12 16 0 2</p>
                                <p>3 5 6 2 1</p>
                                <pre class="line-numbers">
    <code class="language-cpp">
         #include&lt;iostream&gt;
         using namespace std;
         main()
         {
	        int cars[5][5] = {{10, 7, 12, 10, 4} ,{18, 11, 15, 17, 2}, {23, 19, 12, 16, 14},
            {7, 12, 16, 0, 2},{3, 5, 6, 2, 1} }.;
            for(int x = 0; x &lt; 5; x = x + 1) {  
	           for(int y = 0; y < 5; y = y + 1)
 	              cout &lt;&lt; cars[x][y] &lt;&lt; "\t"; cout &lt;&lt; endl; 
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
10 7 12 10 4
18 11 15 17 2
23 19 12 16 14 
7 12 16 0 2
3 5 6 2 1
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
