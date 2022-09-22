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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Arrays</h4>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Array</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>In C/C++ or any other programming language, an array is a group of related data items stored in adjacent memory regions, and its elements can be retrieved at random using an array's indices. They can be used to hold collections of primitive data types of any type, including int, float, double, char, etc. For instance</p>
                                </div>
                                <ul style="font-size: 15px;">
                                    <li><p>Snooker balls that are identically spherical but differ in color or value</p></li>
                                    <li><p>Each bunch of bananas in a bunch is a varied size and/or value.</p></li>
                                    <li><p>You set your preferred music to repeat.</p></li>
                                    <li><p>Pages are found in books.</p></li>
                                </ul>
                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Array declaration</h5>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">Syntax</h5>
                                <pre>
    <code class="language-cpp">
Datatype array_name[Array_size];
    </code>
    </pre>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">Example</h5>
                                <pre>
    <code class="language-cpp">
int arr[100];
string games[5];
char alphabets[25];
    </code>
    </pre>
                            </div>
                            <hr>
                            <div class="mb-4">
                                <h5 class="font-weight-semibold" style="font-size: 30px;">Array Initialization</h5>
                                <pre>
    <code class="language-cpp">
int list[] = {0,1,2,3};
char grades[4] = {‘A’ , ‘C’ , ‘B’ , ‘A’}; 
    </code>
    </pre>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
         #include&lt;iostream&gt;
         using namespace std;
         main()
         {
	        int array[5]; 
            array[0]=10;
            array[1]=20; 
            array[2]=30; 
            array[3]=40; array[4]=50;
            cout&lt;&lt;"lst	element	at	location	[0]="&lt;&lt;array[0]&lt;&lt;endl;
            cout&lt;&lt;"2nd	element	at	location	[1]="&lt;&lt;array[1]&lt;&lt;endl;
            cout&lt;&lt;"3rd	element	at	location	[2]="&lt;&lt;array[2]&lt;&lt;endl;
            cout&lt;&lt;"4th	element	at	location	[3]="&lt;&lt;array[3]&lt;&lt;endl;
            cout&lt;&lt;"5th	element	at	location	[4]="&lt;&lt;array[4]&lt;&lt;endl;
         } 
    </code>
    </pre>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">Output</h5>
                                <pre>
    <code class="language-cpp">
1st element at location [0]=10 
2nd element at location [1]=20
3rd element at location [2]=30
4th element at location [3]=40
5th element at location [4]=50
    </code>
    </pre>
                                <hr>
                                <h5 class="font-weight-semibold" style="font-size: 15px;">Arrays are most likely used in loops</h5>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
         #include&lt;iostream&gt;
         using namespace std;
         main()
         {
	        int numbers[5]; 
            cout &lt;&lt; "Enter S numbers: " &lt;&lt; endl; 
            // store input from the user to an array 
            for (int i = 0; i < 5; ++i) { 
                cin >> numbers[i];
            } 
            cout << "The numbers are: "; 
            // print array elements 
            for (int n = 0; n < 5; ++n) { 
                cout &lt;&lt; numbers[n] &lt;&lt; " "; 
            }            

         } 
    </code>
    </pre>
                                <h5 class="font-weight-semibold" style="font-size: 20px;">Example</h5>
                                <pre>
    <code class="language-cpp">
Enter 5 numbers: 
11 
12 
13 
14 
15 
The numbers are: 11 12 13 14 15
    </code>
    </pre>
                            </div>
                            
                        </div>
                        <a href="cpp_sizearray.php"><button style=" margin:1rem; margin-left:80%; Background-color:#3F51B5; border-radius:8px;
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
