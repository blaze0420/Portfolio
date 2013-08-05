<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
   <head>
       <meta charset="utf-8">
       <title>ColinChristie.me</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- Le styles -->
       <link href="css/bootstrap.css" rel="stylesheet">
       <style type="text/css">
         body {
           padding-top: 60px;
         }
       </style>
       <link href="css/bootstrap-responsive.css" rel="stylesheet">
   
       <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
       <!--[if lt IE 9]>
         <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
       <![endif]-->
   </head>   
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.html">ColinChristie.me</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
            <div style="padding:3px 0px 0px 0px;" class="pull-right"><a href="http://ca.linkedin.com/pub/colin-christie/59/245/680" target="_blank">
              <img src="resources/Images/btn_viewmy_160x33.png" width="160" height="33" border="0" 
              alt="View Colin Christie's profile on LinkedIn"></a>
            </div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <div id="wrap">
      <div id="main" class="clear-top">
        <div class="container">
            <div class="row">
                <div class="span9">
                    <h4>This program will take in three signed integers, store them in an array, 
                    and print the result of the follow expression (a - (b + c) + d)</h4>
                </div>
                <div class="span3"><h4>
                    <a href="AssemblyCode/Evaluate_Signed_Nums.txt">Evaluate_Signed_Nums.asm</a></h4>
                </div>
            </div>
            
                <div class="row">
                <div class="span9">
                    <h4>this program reads 10 numbers typed in at the keyboard and stores them in myArray.
                        The sum of every other element starting from myArray[1] is calculated and displayed on the screen</h4>
                </div>
                <div class="span3">
                    <h4><a href="AssemblyCode/Assignment1_b.txt">Sum_Odd_Elements.asm</a></h4>
                </div>
            </div>
        
            <div class="row">
                <div class="span9">
                    <h4>this program displays randomly generated numbers in binary, decimal, and hex in the top right corner, centre, and 
                        bottom left of the screen respectively</h4>
                </div>
                <div class="span3">
                    <h4><a href="AssemblyCode/Assignment1_c.txt">Random_Base_Powers.asm</a></h4>
                </div>
            </div>    

            <div class="row">
                <div class="span9">
                    <h4>This program makes use of function calls and function prototypes to demonstrate how function
                        call stacks work at their most basic level. It takes an integer value typed at the keyboard
                        and displays on the screen if the number is prime or not.</h4>
                </div>
                <div class="span3">
                    <h4><a href="AssemblyCode/Assignment2_a.txt">Check_Prime.asm</a></h4>
                </div>
            </div>

            <div class="row">
                <div class="span9">
                    <h4>Another program that uses a function call. This time the function contains a loop which will
                    give the product of numbers sotred in 2 registers. The loop is only using bitwise shifts on the
                    values in the registers to obtain the results</h4>
                </div>
                <div class="span3">
                    <h4><a href="AssemblyCode/Assignment2_b.txt">Bitwise_Multiply.asm</a></h4>
                </div>
            </div>

            <div class="row">
                <div class="span9">
                    <h4>The last program also makes use of function calls with paramters. This program takes input
                    from the user in the form of a string. It deletes the first character in the string, then
                    moves all remaining characters one space ahead to get rid of the empty space</h4>
                </div>
                <div class="span3">
                    <h4><a href="AssemblyCode/Assignment2_c.txt">Trim.asm</a></h4>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!--<footer class="footer" >
     <p>&#169; CsC 2013</p>
    </footer>
   <!--Copyright 2013 Colin Christie

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.-->
   
        <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="resources/bootstrap/js/jquery.js"></script>
    <script src="resources/bootstrap/js/bootstrap-alert.js" type=""></script>
    <script src="resources/bootstrap/js/bootstrap-button.js" type=""></script>
    <script src="resources/bootstrap/js/bootstrap-collapse.js" type=""></script>
    <script src="resources/bootstrap/js/bootstrap-carousel.js" type=""></script>
    <script src="resources/bootstrap/js/bootstrap-dropdown.js" type=""></script>
    <script src="resources/bootstrap/js/bootstrap-modal.js" type=""></script>
    <script src="resources/bootstrap/js/bootstrap-popover.js" type=""></script>
    <script src="resources/bootstrap/js/bootstrap-scrollspy.js" type=""></script>
    <script src="resources/bootstrap/js/bootstrap-tab.js" type=""></script>
    <script src="resources/bootstrap/js/bootstrap-tooltip.js" type=""></script>
    <script src="resources/bootstrap/js/bootstrap-transition.js" type=""></script>
    <script src="resources/bootstrap/js/bootstrap-typeahead.js" type=""></script>
  </body>    
</html>
