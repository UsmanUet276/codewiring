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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Variables</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Variables</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>In a computer program, information is stored in variables so that it may be accessed and changed. They also give us a means to give data a descriptive name, making it easier for us and the reader to understand our programs. It can be useful to conceive of variables as data storage units. They exist only to label and keep data in memory. Your software can then make use of this data.</p>
                                    <p>In C++ all variables must declare before use.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Naming Conventions</h5>

                                <p style="font-size: 20px;">All High-Level Languages apply some Naming Rules to the variables </p>
                                <ul>
                                    <li>
                                        <p>The name cannot have Spaces </p>
                                    </li>
                                    <li>
                                        <p>The name cannot start with Numbers </p>
                                    </li>
                                    <li>
                                        <p>The name cannot have any Special Character (&, !, %, # etc)</p>
                                    </li>
                                    <li>
                                        <p>dThe name cannot have any pre-defined keyword.</p>
                                    </li>
                                </ul>
                            </div>

                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Uses Of Variables</h5>

                                <p style="font-size: 20px;">Once the variables are declared and memory is reserved, we can have multiple uses for these variables. </p>
                                <ul>
                                    <li>
                                        <p>We can assign values to these variables according to their data types </p>
                                    </li>
                                    <li>
                                        <p>We can retrieve values from these variables </p>
                                    </li>
                                    <li>
                                        <p>We can apply different mathematical (addition, multiplication, subtraction) and other operations to these variables.</p>
                                    </li>
                                </ul>
                                <hr>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">How To Initializa a Variable?</h5>

                                <p style="font-size: 20px;">Following is the syntax to declare a variable in C++. </p>
                                <pre>
    <code class="language-cpp">
    Datatype  variablename = value;
    </code>
    </pre>

                                <p style="font-size: 20px;">The datatype can be int, float, etc. variable name must be according to the above conventions. The equal sign is used to assign a value to the variable. </p>
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
	           int num = 10;
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
The number is : 10
    </code>
    </pre>

                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 20px;">Declare more than one variable in one line</h5>

                                <p style="font-size: 20px;">To declare more than one variable of the same type in one line we do this.</p>
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
	           int num = 10 , num1 = 20 , num2 = 30;
	           cout << “The number is : “ << num;
	           cout << “The number1 is : “ << num1;
	           cout << “The number2 is : “ << num2;
            } 
    </code>
    </pre>

                            </div>


                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
The number is : 10
The number1 is : 20
The number2 is : 30
    </code>
    </pre>

                            </div>
                        </div>
                        <a href="cpp_input.php"><button style=" margin:1rem; margin-left:80%; Background-color:#3F51B5; border-radius:8px;
                                    width:6rem; height:2.5rem; color:white; border: 1px solid white;">
                            Next
                        </button></a>
                    </div>
                    <!-- /post -->


                </div>
                <!-- /left content -->


                <script>
                    const currentPage = s
                </script>

                <?php
    include('footer.php');
?>
