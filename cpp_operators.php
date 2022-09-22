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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Operators</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Operators</a>
                                </h4>
                                <h4 class="font-weight-semibold mb-1">
                                    <a href="#" class="text-body" style="font-size: 30px;">Arithematic Operators</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>The operators that are used to perform arithmetic operations are known as arithmetic operators.</p>
                                    <hr>
                                    <p>Following are some arithmetic operators</p>
                                </div>
                            </div>
                            
                                <table>
                                    <tr>
                                        <th>Operator</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                    </tr>
                                    <tr>
                                        <td>+</td>
                                        <td>Addition</td>
                                        <td>Use to add two numbers</td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>Subtraction</td>
                                        <td>Use to subtract two numbers</td>
                                    </tr>
                                    <tr>
                                        <td>*</td>
                                        <td>Multiplication</td>
                                        <td>Use to multiply two numbers</td>
                                    </tr>
                                    <tr>
                                        <td>/</td>
                                        <td>Division</td>
                                        <td>Use to divide two numbers</td>
                                    </tr>
                                    <tr>
                                        <td>%</td>
                                        <td>Modulus</td>
                                        <td>Use to find mod of two numbers</td>
                                    </tr>
                                </table>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Logical Operators</h5>

                                <p style="font-size: 20px;">Operators used to determine logical operations between values are logical operators.</p>
                            </div>
                            
                                <table>
                                    <tr>
                                        <th>Operator</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                    </tr>
                                    <tr>
                                        <td>&&</td>
                                        <td>AND</td>
                                        <td>Returns true if both statements are true</td>
                                    </tr>
                                    <tr>
                                        <td>||</td>
                                        <td>OR</td>
                                        <td>Returns true if one of the statements is true</td>
                                    </tr>
                                    <tr>
                                        <td>!</td>
                                        <td>NOT</td>
                                        <td>Return opposite answer if true than false and vice versa</td>
                                    </tr>
                                </table>
                        </div>
                        <a href="cpp_conditional.php"><button style=" margin:1rem; margin-left:76%; Background-color:#3F51B5; border-radius:8px;
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
