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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - If Statements</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Conditional Statements</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>Why do we need Conditions?</p>
                                    <p>When we add some kind of condition to some task, this is called a conditional statement.</p>
                                    <p>We speak many Conditional Statements daily in our life.</p>
                                    <p><b>For example</b></p>
                                    <ul>
                                        <li>
                                            <P>If it will be a Sunny Day, then we will go to play Football.</P>
                                        </li>
                                        <li>
                                            <P>If there will be no Rain, then we will go to Market</P>
                                        </li>
                                    </ul>
                                    <p>As Programming solves Real World problems; therefore, it also needs Conditional Statements.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">If Statements</h5>

                                <p style="font-size: 20px;">If the statement is a conditional statement in c++. It consists of the following two parts.</p>
                                <ul style="font-size: 20px;">
                                    <li>
                                        <p>IF statement</p>
                                    </li>
                                    <li>
                                        <p>Body of if statement</p>
                                    </li>
                                </ul>
                            </div>

                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold">Syntax</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
            #include<iostream>
            using namespace std;
            main()
            {
	           if() // if statement
	           {
		          //body of if statement
	           }
            } 
    </code>
    </pre>
                                <p style="font-size: 20px;">Brackets after the if statement contain a boolean expression</p>
                            </div>

                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
          #include<iostream>
          using namespace std;
          main()
          {         	
             int a = 1;
	         if(a==1) // if statements
	         {
		        cout<&lt;a;
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
1
    </code>
    </pre>

                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Else Statements</h5>

                                <p style="font-size: 20px;">The else statement includes the part of code which executes if the condition in it is wrong.</p>
                            </div>

                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold">Syntax</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
            #include<iostream>
            using namespace std;
            main()
            {
	           if() // if statement
               {
	              //body of if statement
               } 
               else // else statement
               {
	              //body of else statement
               } 

            } 
    </code>
    </pre>
                            </div>

                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
          #include<iostream>
          using namespace std;
          main()
          {         	
             int a = 2;
             if(a==1) // if statement
             {
	            cout<&lt;a;
             } 
             else
             {
	            cout &lt;&lt; “a = 2”;
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
a = 2
    </code>
    </pre>

                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Elseif Statements</h5>

                                <p style="font-size: 20px;">If you want to specify a new condition when first if the condition is false we use else if.</p>
                            </div>

                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold">Syntax</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
            #include<iostream>
            using namespace std;
            main()
            {
	           if(condition) // if statement
               {
	              //body of if statement
               } 
               else if(condition2) // else if statement
               {
	              //body of else if statement
               } 
               else // else statement
               {
	              //body of else statement
               } 

            } 
    </code>
    </pre>
                            </div>

                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
          #include<iostream>
          using namespace std;
          main()
          {         	
             int a = 2;
             if(a==1) // if statement
             {
	            cout&lt;&lt;a;
             } 
             else if(a==2) 
             {
	            cout &lt;&lt; “a = 2“;
             } 
             else
             {
	            cout &lt;&lt; “a = 3”;
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
a = 2
    </code>
    </pre>

                            </div>
                        </div>
                        <a href="cpp_switch.php"><button style=" margin:1rem; margin-left:80%; Background-color:#3F51B5; border-radius:8px;
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
