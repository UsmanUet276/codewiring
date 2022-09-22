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
                    <h4><i class="icon-arrow-left52 mr-2"></i> - Parameterized Functions</h4>
                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class=" "></i></a>
                </div>

                <div class="header-elements d-none">
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="" class="breadcrumb-item">C++ FUNCTION</a>
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
                                    <a href="#" class="text-body" style="font-size: 30px;">Parameterized Functions</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>You can pass information variables to the function. This information is known as parameters. You can pass parameters in function after the name of the function in the parentheses.</p>
                                </div>
                            </div>


                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Syntax</h5>
                                <pre>
    <code class="language-cpp">
returnType functionName(parameter1 , parameter2 , …………)
{
   //body
}
    </code>
    </pre>

                            </div>

                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
         #include&lt;iostream&gt;
         using namespace std;
         // Function prototype 
         void displayNum(int n1, float n2); 
         main() { 
            int num1 = 5;
            float num2 = 5.5; 
            // calling the function
            displayNum(num1, num2); 
         } 
         // Function definition 
         void displayNum(int n1, float n2) { 
            cout &lt;&lt; "The int number is " &lt;&lt; n1 &lt;&lt; endl; 
            cout &lt;&lt; "The float number is " &lt;&lt; n2; 
         }
    </code>
    </pre>

                            </div>


                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
The int number is 5
The float number is 5.5
    </code>
    </pre>

                            </div>
                            <hr>
                            <div class="mb-4">
                                <div class="mb-3 text-center">
                                </div>

                                <h4 class="font-weight-semibold mb-1">
                                    <a href="#" class="text-body" style="font-size: 30px;">Pass By Reference</a>
                                </h4>

                                <div class="mb-3" style="font-size: 20px;">
                                    <p>You can also pass parameters by reference to change the value of the original variable when some change happens in the method.</p>
                                </div>
                            </div>

                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Example</h5>
                                <pre class="line-numbers">
    <code class="language-cpp">
         // Bubble sort in C++

         #include <iostream>
         using namespace std;

         void swap(int &x, int &y) {
         int z = x;
         x = y;
         y = z;
         }
         // perform bubble sort
         void bubbleSort(int array[], int size) {

            // loop to access each array element
            for (int step = 0; step < size; ++step) {
      
                 // loop to compare array elements
                for (int i = 0; i &lt; size - step; ++i) {

                    // compare two adjacent elements
                    // change > to < to sort in descending order
                    if (array[i] > array[i + 1]) {

                        // swapping elements of elements
                        // are not in the intended order
                     swap(array[i] , array[j+1])
                    }
                 }
             }
          }

          // print array
          void printArray(int array[], int size) {
          for (int i = 0; i < size; ++i) {
              cout &lt;&lt; "  " &lt;&lt; array[i];
          }
          cout &lt;&lt; "\n";
          }

          int main() {
            int data[] = {-2, 45, 0, 11, -9};
  
            // find the array&#39;s length
            int size = sizeof(data) / sizeof(data[0]);
  
            bubbleSort(data, size);
  
            cout &lt;&lt; "Sorted Array in Ascending Order:\n";  
            printArray(data, size);
          }

    </code>
    </pre>

                            </div>


                            <hr>



                            <div>
                                <h5 class="font-weight-semibold">Output</h5>
                                <pre>
    <code class="language-cpp">
-9 -2 0 11 45
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
