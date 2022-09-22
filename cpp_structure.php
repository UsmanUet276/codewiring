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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Structures</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Structures</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>Scalar variables can store only one value at a time.</p>
                                    <p>Arrays can store more than one value but of the same data type.</p>
                                    <p><b>What if we want to store the information of different data types in one place?</b></p>
                                    <p>For this problem, C++ provides us an opportunity to define our own data type according to the requirement.</p>
                                    <p>This Data-type is called Structure. We can create our own data type to group items of possibly different types into a single type.</p>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="font-weight-semibold">Syntax</h5>
                                <pre class="">
    <code class="language-cpp">
struct student
{ 
    string name; 
    int rollNumber; 
    float cgpa; 
};
    </code>
    </pre>

                            </div>


                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Declaration</h5>
                                <p style="font-size: 20px;">We have defined our own data type.</p>
                                <p style="font-size: 20px;">We will declare the student variable just as we declare other int, float and char variables
                                </p>
                                <pre>
    <code class="language-cpp">
student stu1;
    </code>
    </pre>

                            </div>
                            <hr>
                            <div>
                                <h5 class="font-weight-semibold">How To Acess?</h5>
                                <pre>
    <code class="language-cpp">
student stu1; 
stu1.name = "Jack";
    </code>
    </pre>
                                <p style="font-size: 20px;">The members of the structure variable are accessed using a dot (.) operator.</p>
                                <p style="font-size: 20px;">We can declare and initialize as many variables as we like.
                                </p>
                            </div>
                            <hr>
                            <div>
                                <h5 class="font-weight-semibold">Revision</h5>
                                <ul style="font-size: 20px;">
                                    <li><p>The structure is a user-defined Data Type. </p></li>
                                    <li><p>It is a collection of variables of different data types under a single name. </p></li>
                                    <li><p>Structure variable is declared the same way as the variables of pre-defined datatypes. </p></li>
                                    <li><p>The members of the structure variable are accessed using a dot (.) operator</p></li>
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
