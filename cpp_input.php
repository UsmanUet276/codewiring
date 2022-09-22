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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Input</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Input</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>As we learned before “cout” is the key word for output. The <b>cin</b> is written to take input from the console, It is followed by two > signs (cin >>). After <b>>></b> operator you must write a variable you declared earlier.</p>
                                    <p>In C++ all variables must declare before use.</p>
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
	          int num;
	          cout << “Type a number: “;
	          cin >> num;
	          cout << “The number is : “ << num;
           } 
    </code>
    </pre>

                            </div>


                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
Type a number: 23
The number is : 23
    </code>
    </pre>

                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Congratulation</h5>

                                <p style="font-size: 20px;">Now you are capable enough to write a small code in c++.</p>
                            </div>
                                 <hr>



                            <div>
                                <h5 class="font-weight-semibold">Example</h5>
                                <p style="font-size: 20px;">In this program, the user inputs two numbers and prints the product of them.</p>
                                <pre class="line-numbers">
    <code class="language-cpp">
            #include &lt;iostream&gt;
            using namespace std;
            main()
            {
	           int num , num1 , product;
	           cout << “Type a number: “;
	           cin >> num;
               cout << “Type second number: “;
	           cin >> num1;
	           cout << “The number is : “ << num;
	           ptoduct = num * num1;
	           cout << “Product of numbers = “ << product;
            } 
    </code>
    </pre>

                            </div>


                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
Type a number: 10
Type second number: 5
Product of numbers = 50
    </code>
    </pre>

                            </div>
                        </div>
                        <a href="cpp_operators.php"><button style=" margin:1rem; margin-left:80%; Background-color:#3F51B5; border-radius:8px;
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
