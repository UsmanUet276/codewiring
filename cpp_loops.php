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
                    <h4><i class="icon-arrow-left52 mr-2"></i>  - Loops</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Loops</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>Initially, there are two types of loops in c++.</p>
                                    <ul>
                                        <li>
                                            <p>Conditional loops</p>
                                        </li>
                                        <li>
                                            <p>Counter loops</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Conditional Loops</h5>

                                <p style="font-size: 20px;">if we don’t know beforehand how many times a set of instructions will be executed we use a conditional loop. I.e., we will execute the loop until a certain condition is met.</p>
                            </div>

                            <hr>

                            <div>
                                <h5 class="font-weight-semibold">Syntax</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
         while(condition)
         {
	       //body
         }
    </code>
    </pre>
                                <p style="font-size: 20px;">While is the keyword for these types of loops.</p>

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
	        Int i = 0;
            while(i<4)
            {
	           cout &lt;$lt; i &lt;$lt; endl;
	           i++;
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
0
1
2
3
    </code>
    </pre>

                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Counter Loops</h5>

                                <p style="font-size: 20px;">In a counter loop, the software anticipates the number of times a particular instruction or collection of instructions will be carried out.</p>
                            </div>

                            <hr>

                            <div>
                                <h5 class="font-weight-semibold">Syntax</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
         for(int x = 0 ; x<5 ; x++)
         {
	        //body
         }
    </code>
    </pre>

                            </div>


                            <hr>
                            <div class="mb-4">
                                <p style="font-size: 20px;">Where for is the keyword</p>
                                <p style="font-size: 20px;">int x = 0 is initial statement </p>
                                <p style="font-size: 20px;">x&lt;5 is loop condition and x++ is update statement.</p>
                            </div>

                            <hr>

                            <div>
                                <h5 class="font-weight-semibold">Example</h5>
                                <p style="font-size: 20px;">Let’s write CodeWiring 5 times using for loop</p>
                                <pre class="line-numbers">
    <code class="language-cpp">
         #include&lt;iostream&gt;
         using namespace std;
         main()
         {
	        for(int x = 0 ; x<5 ; x++)
            {
	           cout&lt;&lt;”CodeWiring”&lt;&lt;endl;
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
CodeWiring
CodeWiring
CodeWiring
CodeWiring
CodeWiring
    </code>
    </pre>

                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Do WHile Loops</h5>

                                <p style="font-size: 20px;">It’s simply a while loop but the difference is that loop will execute once even before checking whether the condition is true or not.</p>
                            </div>

                            <hr>

                            <div>
                                <h5 class="font-weight-semibold">Syntax</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
         do{
	        //condition
         }
         while(condition);
    </code>
    </pre>
                                <p style="font-size: 20px;">Where While and Do is the keyword</p>
                            </div>


                            <hr>

                            <div>
                                <h5 class="font-weight-semibold">Example</h5>
                                <p style="font-size: 20px;">These type of loops runs one time at least</p>
                                <pre class="line-numbers">
    <code class="language-cpp">
         #include&lt;iostream&gt;
         using namespace std;
         main()
         {
	        int i = 0;
            do{
	           cout &lt;&lt; i &lt;&lt; endl;
	           i++;
            }
            while(i>2);
         } 
    </code>
    </pre>

                            </div>


                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
0
    </code>
    </pre>

                            </div>
                        </div>
                        <a href="cpp_break.php"><button style=" margin:1rem; margin-left:78%; Background-color:#3F51B5; border-radius:8px;
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
