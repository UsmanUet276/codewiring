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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Reference</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Reference</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>When we declare a variable, it reserves memory for a specific data type.</p>
                                </div>
                                <hr>
                                <h5 class="font-weight-semibold">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
         #include&lt;iostream&gt;
         using namespace std;
         main()
         {
	        int num = 5;
            cout &lt;&lt; num;
         } 
    </code>
    </pre>
                                <p style="font-size: 20px;">Now, if we want to display the contents of the cell then we can use the variable to see the contents of the memory.</p>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
5
    </code>
    </pre>
                                <hr>
                                <p style="font-size:20px;">Let’s say for some reason we do not want to see the contents (5) of the cell, but we want to see the address (0xE4A73) of the cell.</p>
                                <p style="font-size:20px;">For that, we write &#38; before the variable name</p>
                                <h5 class="font-weight-semibold">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
         #include&lt;iostream&gt;
         using namespace std;
         main()
         {
	        int num = 5;
            cout &lt;&lt; &#38;num;
         } 
    </code>
    </pre>
                                <p style="font-size: 20px;">Now, if we want to display the address of the cell then we can use the & with variable to see the address of the memory.</p>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
0xE4A73
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
