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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Pointers</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Pointer</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p><b>What is a Pointer?</b></p>
                                    <p>Pointer just points towards something.</p>
                                    <p>As a laser pointer is used to point things on board.</p>
                                    <p><b>In the same way, we have pointers in c++</b></p>
                                    <p>But We can only point toward the address of any memory cell using the pointer.</p>
                                    
                                </div>
                                <hr>
                                <h5 class="font-weight-semibold">Syntax</h5>
                                <p style="font-size:20px;">Syntax to declare a pointer of a specific datatype in C++ is:</p>
                                <pre>
    <code class="language-cpp">
int *p;
    </code>
    </pre>
                                <p style="font-size:20px;">We have declared a pointer of int datatype.</p>
                                <p style="font-size:20px;">It means it can only point towards the memory cell containing integer type of data.</p>
                                <hr>
                                <h5 class="font-weight-semibold">Example</h5>
                                <p style="font-size:20px;">Let’s assign the memory address of the num variable to the pointer.</p>
                                <pre class="line-numbers">
    <code class="language-cpp">
         #include&lt;iostream&gt;
         using namespace std;
         main()
         {
	        int num = 5;
            int *p;
            p = &#38;num;
            cout &lt;&lt; *p;
         } 
    </code>
    </pre>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre >
    <code class="language-cpp">
5
    </code>
    </pre>
                                <hr>
                                <p style="font-size:20px;">And if</p>
                                <h5 class="font-weight-semibold">Example</h5>
                                <p style="font-size:20px;">Let’s assign the memory address of the num variable to the pointer.</p>
                                <pre class="line-numbers">
    <code class="language-cpp">
         #include&lt;iostream&gt;
         using namespace std;
         main()
         {
	        int num = 5;
            int *p;
            p = &#38;num;
            cout &lt;&lt; *p;
         } 
    </code>
    </pre>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre >
    <code class="language-cpp">
0xE4A72
    </code>
    </pre>
                                <hr>
                                <p style="font-size:20px;">In the above examples, we first initialize num with the value 5 and then we initialize a pointer after that we assign the address of num to the pointer.</p>
                                <p style="font-size:20px;">Then if we take output op pointer like this *p we get the value of num and if like this p we get the address of num.</p>
                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Conclusions</h5>

                                <p style="font-size: 20px;">The following are data types in c++:</p>
                                <ul > 
                                    <li style="font-size: 20px;"><p>The address of a variable can be stored in another variable known as a pointer variable. The syntax for storing a variable's address to a pointer is: </p></li>
                                    <pre >
    <code class="language-cpp">
dataType *pointerVariableName = &#38;variableName;
    </code>
    </pre>
                                    <li style="font-size: 20px;"><p>we want to inform the pc what the info variety of the variable is and whose address we tend to are attending to store.</p></li>
                                    <li style="font-size: 20px;"><p>If you see the * in a declaration statement, a pointer is being declared for the primary time. </p></li>
                                    <li style="font-size: 20px;"><p>when that, once you see the * on the pointer name, you're dereferencing the pointer to urge to the target.</p></li>
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
