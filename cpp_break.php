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
                    <h4><i class="icon-arrow-left52 mr-2"></i>  Break &#38; Continue</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Break Statement</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>As you already study about break statements in the switch. Used to jump out of the switch.
                                        It is also used in loops to switch out of them when needed.</p>
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
	        for(int x = 0 ; x<5 ; x++){
	           if(x > 3){
		       break;
	           }
	           cout &lt;&lt; x;
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
0123
    </code>
    </pre>

                            </div>
                                <hr>
                            <div class="mb-4">
                                <div class="mb-3 text-center">
                                </div>

                                <h4 class="font-weight-semibold mb-1">
                                    <a href="#" class="text-body" style="font-size: 30px;">Continue Statement</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>Unlike the break statement continue statement breaks only one iteration of the loop at a specific condition.</p>
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
	        for(int x = 0 ; x&lt;5 ; x++){
	           if(x == 3){
		          continue;
	           }
	           cout &lt;&lt; x;
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
0124
    </code>
    </pre>

                            </div>
                        </div>
                        <a href="cpp_array.php"><button style=" margin:1rem; margin-left:76%; Background-color:#3F51B5; border-radius:8px;
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
