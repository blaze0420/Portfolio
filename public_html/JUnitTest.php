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
      <div class="hero-unit">
      <h2>JUnit Testing</h2>
      <p>This is an assignment I was given on JUnit Testing. All the classes were provided to me
      except the CustomerTest.java class which is the class I wrote that contains the testing units. The example is based
      on a video store which rents movies to customers.</p></div>
      
      <div class="row">
        <div class="span9">
          <h4> Price class is an abstract class which is used by the following 3 classes</h4>
        </div>
        <div class="span3">
            <h4><a href="resources/JUnitTestCode/Price.txt" target="_blank">Price.java</a></h4>
        </div>
      </div>
      <div class="row">
        <div class="span9">
          <h4>The next 3 classes are used to define the price rates applied to different types of rentals</h4>
        </div>
        <div class="span3">
            <h4><a href="resources/JUnitTestCode/RegularPrice.txt" target="_blank">RegularPrice.java</a><br>
            <a href="resources/JUnitTestCode/ChildrensPrice.txt" target="_blank">ChildrensPrice.java</a><br> 
            <a href="resources/JUnitTestCode/NewReleasePrice.txt" target="_blank">NewReleasePrice.java</a></h4>
        </div>
      </div>
      <div class="row">
        <div class="span9">
            <h4>The rental class defines methods to handle renting to a customer such as how much to charge and how many days the
            movie can be taken.</h4>
        </div>
        <div class="span3">
            <h4><a href="resources/JUnitTestCode/Rental.txt" target="_blank">Rental.java</a></h4>
        </div>
      </div>
      <div class="row">
        <div class="span9"><h4>
            The Movie class stores the properties of a movie, like the title, type of rental, and how much to charge.
        </h4></div>
        <div class="span3">
            <h4><a href="resources/JUnitTestCode/Movie.txt" target="_blank">Movie.java</a></h4>
        </div>
      </div>
      <div class="row">
        <div class="span9"><h4>
            The Customer class stores information about the rentals a customer has as well as adding new rentals
            in order to calculate their bill when they check out a movie.</h4>
        </div>
        <div class="span3">
            <h4><a href="resources/JUnitTestCode/Customer.txt" target="_blank">Customer.java</a></h4>
        </div>
      </div>
      <div class="row">
        <div class="span9"><h4>
            The CustomerTest class contains all the testing units written to test the given classes.</h4>
        </div>
        <div class="span3">
            <h4><a href="resources/JUnitTestCode/CustomerTest.txt" target="_blank">CustomerTest.java</a></h4>
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
