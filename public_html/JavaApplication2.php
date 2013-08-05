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
        <h2>Java Application: Multithreading</h2>
         <h4>This program was written to demonstrate creation and handling of threads. It uses the 
                Runnable interface along with Executors/ExecutorService libraries. The program is a simple
                container which spawns a randomly coloured ball when the mouse is clicked inside the window.
                Each time a new ball is spawned a thread is created for it. The number of balls created can 
                be as many threads as your computer can handle. </h4>
            <p align="center"><a class="btn btn-primary" href="resources/MultiThreadEx.jar">Download a runnable Jar file</a></p>
     </div>
     <div class="row">
      <div class="span11">
       <div class="tabbable"> 
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
            <li class="pull-right"><a href="#tab5" data-toggle="tab">MainTester.java</a></li>
            <li class="pull-right"><a href="#tab4" data-toggle="tab">RepaintTimer.java</a></li>
            <li class="pull-right"><a href="#tab3" data-toggle="tab">BallContainer.java</a></li>
            <li class="pull-right"><a href="#tab2" data-toggle="tab">Ball.java</a></li>
            <li class="pull-right"><h4>See the Code</h4></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
            <div class="row">
                <div class="span6"><h4>
                    When opened, the window will appear empty as application is just a container which will 
                    spawn the balls. 
                </h4></div>
                <div class="span5">
                    <img src="resources/Images/MultiThread01.jpg" height="498" width="496"
                         alt="Sample Image" />
                </div>
            </div>
            <div class="row" style="padding:20px 0px 0px 0px">
                <div class="span5">
                    <img src="resources/Images/MultiThread02.jpg" height="498" width="494"
                         alt="Sample Image" />
                </div>
                <div class="span6"><h4>
                    When the mouse is clicked inside the window an event handler will trigger and a new thread will be 
                    created which is represented by a ball appearing in the window.
                </h4></div>
            </div>
            <div class="row" style="padding:20px 0px 0px 0px" >
                <div class="span6"><h4>
                    Each time the mouse is clicked inside the window a new thread will be created and a new ball will 
                    spawn inside the window. The balls for the threads already created will continue to bounce around
                    inside the window until the application is closed at which time all thread will be released.
                </h4></div>
                <div class="span5">
                    <img src="resources/Images/MultiThread03.jpg" height="495" width="498"
                         alt="Sample Image" />
                </div>
            </div>
            </div>
            <div class="tab-pane" id="tab2">
            <pre class="prettyprint">            
package multithreadEx;

import java.awt.Color;
import java.util.Random; 

// thread to handle the ball bouncing attributes
public class Ball implements Runnable {
	
	private boolean xUp, yUp;	// determines weather ball is moving up or down
	private int xDx, yDy;		// direction the ball is moving
	private int x, y;			// current point to draw the ball
	private BallContainer bPanel;	// reference to the panel that displays the balls
	private Color ballColor;	// the color of the current ball
	private Random r;			// random generator for choosing random colors
	
	Color[] colors = new Color[10];		// array of random colors to draw the ball in
	
	// constructor
	public Ball(BallContainer p) {
		xUp = false;
		yUp = false;
		xDx = 5;
		yDy = 5;
		bPanel = p;
		r = new Random(System.currentTimeMillis());
		colors[0] = Color.BLACK;
		colors[1] = Color.RED;
		colors[2] = Color.BLUE;
		colors[3] = Color.YELLOW;
		colors[4] = Color.GREEN;
		colors[5] = Color.WHITE;
		colors[6] = Color.PINK;
		colors[7] = Color.MAGENTA;
		colors[8] = Color.CYAN;
		colors[9] = Color.ORANGE;
		ballColor = colors[r.nextInt(10)];
	}
	
	// accessor methods
	public int getX() {
		return x;
	}
	
	public int getY() {
		return y;
	}
	
	public Color getColor() {
		return ballColor;
	}
	
	// run starts the ball in the top left corner and keeps 
	// bouncing the ball around the frame
	public void run() {
		while (true) {
			try {
		        Thread.sleep( 10 );		// sleep 10 milliseconds
		     }
		     catch ( Exception e ) {
					e.printStackTrace();
		     }
			
			// increase the x coordinate if ball is moving right 
			if ( xUp == true ) {
				x += xDx;
				bPanel.setX(x);
			}
			// dcrease the x coordinate if ball is moving left
			else {
				x -= xDx;
				bPanel.setX(x);
			}

			// increase the y coordinate if ball is moving up
			if ( yUp == true ) {
				y += yDy;
				bPanel.setY(y);
			}
			// decrease the y coordinate if ball is moving down
			else {
				y -= yDy;
				bPanel.setY(y);
			}
			
			// when ball hits top or bottom edge choose a new random direction
			if ( y <= 0 ) {
				yUp = true;            
				yDy = ( int ) ( Math.random() * 9 );
			}
			else if ( y >= bPanel.getHeight()-10 ) {
				yDy = ( int ) ( Math.random() * 9 );
				yUp = false;
			}
			
			// when ball hits side edge choose a new random direction		      
			if ( x <= 0 ) {
				xUp = true;
				xDx = ( int ) ( Math.random() * 9 );
			}
			else if ( x >= bPanel.getWidth()-10 ) {
				xUp = false;
				xDx = ( int ) ( Math.random() * 9 );
			}
		}
	}
}
            </pre>
            </div>
            <div class="tab-pane" id="tab3">
                <pre class="prettyprint">
package multithreadEx;

import java.util.ArrayList;
import java.util.concurrent.Executors;
import java.util.concurrent.ExecutorService;
import javax.swing.JPanel;
import java.awt.Graphics;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;

public class BallContainer extends JPanel{

	private static final long serialVersionUID = 1L;
	
	private ArrayList&lt;Ball&gt; ballList;		// list to store the ball objects
	private int x, y;						// current point to draw the ball
	private MouseHandler handler; 			// event handler to start ball moving
	private boolean started = false;		// checks weather the user has clicked
	private BallContainer bPanel;				// reference to the current panel 

	// constructor
	public BallContainer() {
		// register event handler
		handler = new MouseHandler();
		addMouseListener(handler);
		bPanel = this;
		ballList = new ArrayList&lt;Ball&gt;();
	}
	
	// paints the ball at its current location
	public void paintComponent( Graphics g ) {
		super.paintComponent(g);
		if (started) {
			for (int i = 0; i < ballList.size(); i++){
				x = ballList.get(i).getX();
				y = ballList.get(i).getY();
				g.setColor( ballList.get(i).getColor() );
				g.fillOval( x, y, 10, 10 );
			}
		}
	}
	
	// accessor methods
	public void setX(int n)	{
		this.x = n;
	}
	
	public void setY(int n) {
		this.y = n;
	}
	
	// inner class for handling mouse events
	private class MouseHandler extends MouseAdapter {
		public void mousePressed( MouseEvent e )
		{
			ExecutorService exec = Executors.newCachedThreadPool();
			
			started = true;
			int end = ballList.size();		// get the last index of the list
			
			ballList.add(new Ball(bPanel));	// add a new ball to the end of the list
			exec.execute(ballList.get(end));	// start the new thread for the ball
		}		
	}
}
                </pre>
            </div>
            <div class="tab-pane" id="tab4">
            <pre class="prettyprint">
package multithreadEx;

// thread to keep calling repaint on the ball panel
public class RepaintTimer implements Runnable{
	
	private BallContainer bPanel;		// reference to the ball panel
	
	// constructor
	public RepaintTimer(BallContainer p) {
		bPanel = p;
	}

	// once running, the thread will keep calling repaint on the ball panel to repaint
	// all the balls at once
	public void run() {
		while (true) {
			try {
				Thread.sleep(10);		// sleep for 10 milliseconds
			} catch (InterruptedException e) {
				e.printStackTrace();
			}
				bPanel.repaint();
		}
	}
}
            </pre>
            </div>
            <div class="tab-pane" id="tab5">
            <pre class="prettyprint">
package multithreadEx;

import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;
import javax.swing.JFrame;

//Main method to create the window
public class MainTester extends JFrame{

	private static final long serialVersionUID = 1L;

	public static void main(String args[]) {
		
		JFrame f = new JFrame();
		f.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		f.setSize(500, 500);
		f.setVisible(true);

		BallContainer bPanel = new BallContainer();
		f.add(bPanel);

		// start a new repaint timer thread 
		RepaintTimer rTimer = new RepaintTimer(bPanel);
		ExecutorService exec = Executors.newCachedThreadPool();
		exec.execute(rTimer);
	}
	
}
            </pre>
            </div>
              </div>  
            </div>
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
