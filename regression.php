<?php include('header.php') ?>

<style>
/* <!-- To add --> */
tr, th {
	  width: 4rem;
	  height: 3rem;
	  border: 1px solid black;
	  text: large;
	  text-align: center;
	}
	th {
	  text-align: center;
	  background: #d0d0d0;
	  border-color: black;
	}
/* <!-- To add --> */
</style>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<!-- Container (Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Regression</h2><br>
      <h4>Regression is a ML algorithm that can be trained to predict real numbered outputs; like temperature, stock price, etc. Regression is based on a hypothesis that can be linear, quadratic, polynomial, non-linear, etc. The hypothesis is a function that based on some hidden parameters and the input values. In the training phase, the hidden parameters are optimized w.r.t. the input values presented in the training. The process that does the optimization is the gradient decent algorithm. If you are using neural networks, then you also need Back-propagation algorithm to compute gradient at each layer. Once the hypothesis parameters got trained (when they gave least error during the training), then the same hypothesis with the trained parameters are used with new input values to predict outcomes that will be again real values.</h4>
	</div>
    <div class="col-sm-4">
	  </br></br></br></br></br>
	  <img src = "images/rgrr-image.png" alt="regression image">
    </div>
  </div>
</div>
<div class="container-fluid bg-grey">
  <div class="row">
      <h4><strong>IMPORTANCE:</strong> <p>Regression models (both linear and non-linear) are used for predicting a real value, like salary for example. If your independent variable is time, then you are forecasting future values, otherwise your model is predicting present but unknown values. Regression technique vary from Linear Regression to SVR and Random Forests Regression.</p></h4><br>
  </div>
</div>
<div id="about" class="container-fluid">
<div class="row">
    <div class="col-sm-8">
	<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
		  <h4>In the visualization, you can see how linear regression models the relationship between a scalar response(X - dependent variable) and an explanatory variable(Y - independent variable). You can change the values for X and Y to view the changes for the regression.</h4>
		  <h4>Here are the values for the regressed line and the statistical values for the mean/average and standard deviation:</h4>
		<div id="y">:)</div>
	</div>
		<br><br><h4>Click the table to edit the numbers for the X and Y variables:</h4>
	</div>
		  <!-- <button onClick="runGraph()">Finish Editing</button><br><br> -->
		  <button onClick="runGraph()" class="btn btn-xs">Finish Editing</button><br><br>

		<table id="datatable">
		  <tr>
			<th>x</th>
			<th>y</th>
		  </tr>
		</table>
	<!-- </div> -->
<!-- </div> -->
</div>
<!-- To add -->
<div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
		<h3><b>Prepare the datasets<b></h3><br>
		<h4>There are different datasets available but let us implement it with our own data sets. A simple linear regression has dependent variables (Y) and independent variables (X).</h4>
		<h4>So our data set is ready and since it is a simple linear regression we have only one-factor size of the house affecting the price of the house. In case of multiple linear regression, we would have had more factors affecting house price like locality, the number of rooms etc.
		Now we need to find the regression line(a line which fits best in the above scatter plot so that we can predict the response y(ie. cost of the house) for any new values of x(ie. size of the house).</h4>
    </div>
	<div class="col-sm-4 col-xs-12">
      <!-- <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Box 1</h1>
        </div>
        <div class="panel-footer">
          <h3>Measure</h3>
          <h4>Look where you stand out against your peers</h4>
          <button class="btn btn-lg">Get started</button>
        </div>
      </div> -->
    </div>
  </div>
  <img src = "images/dataset-image.png" align="center" alt="dataset image"><br><br>
</div>
<div class="container-fluid bg-grey">
  <div class="row">
    <p>import pandas ad pd</p>
	<p>import matplotlib.plyplot as plt</p>
	<p>import numpy as np</p>
  </div>
</div>
<div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
		<h3><b>Import the required libraries<b></h3><br>
		<h4>NumPy is a library for the Python programming language. We use it in machine learning because we have to deal with large data in machine learning and this is faster than the normal array. (Get used to numpy arrays, we will use it everywhere). </h4>
		<h4>Matplotlib is a plotting library for the Python programming language and its numerical mathematics extension NumPy. Basically, this helps in plotting of graphs.</h4>
		<h4>Here we have used “numpy as np” and “matplotlib.pyplot as plt” it is done to rename the huge names to something smaller(ease of ). </h4>
	</div>
	<div class="col-sm-4 col-xs-12">
      <!-- <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Box 2</h1>
        </div>
        <div class="panel-footer">
          <h3>Measure</h3>
          <h4>Look where you stand out against your peers</h4>
          <button class="btn btn-lg">Get started</button>
        </div>
      </div> -->
    </div>
  </div>
</div>
<div id="about" class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
		<h3><b>Define the functions required<b></h3><br>
		<h4><b>Function1: </b>It is a function to determine or estimate the coefficients where x and y values are passed into this function.</h4>
		<h4><b>Steps Include:</b>
		<ol>
		  <li>Calculate n</li>
		  <li>Calculate the mean of both x and y numpy array.</li>
		  <li>Calculate cross-deviation and deviation: Just remember here we are calculating SS_xy and SS_xx which is Sum of Squared Errors.</li>
		  <li>Calculate regression coefficients: The amount or value by which the regression line needs to be moved.</li>
		</ol>
		</h4>
	</div>
	<div class="col-sm-4 col-xs-12">
      <!-- <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Box 3</h1>
        </div>
        <div class="panel-footer">
          <h3>Measure</h3>
          <h4>Look where you stand out against your peers</h4>
          <button class="btn btn-lg">Get started</button>
        </div>
      </div> -->
    </div>
  </div>
</div>
<div class="container-fluid bg-grey">
  <div class="row">
    <p>def estimate_coefficients(x, y):</p></br>
	<p>n = np.size(x)</p>
	<p>mean_x, mean_y = np.mean(x), np.mean(y)</p>
	<p>SS_xy = np.sum(y * x - n * mean_y * mean_x)</p>
	<p>SS_xx = np.sum(x * x - n * mean_x * mean_x)</p>
	<p>b_1 = SS_xy / SS_xx</p>
	<p>b_0 = mean_y - b_1 * mean_x</p></br>
	<p>return(b_0, b_1)</p>
  </div>
</div>
<div id="about" class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
		</br>
		<h4><b>Function2: </b>It is a function to plot the graph based on calculated values.</h4>
		<h4><b>Steps Include:</b>
		<ol>
		  <li>Plot the points: “plt.scatter” plots the points on the graph where</li>
			<ul style="list-style-type:square;">
				<ol>“x and y” are the locations of the points on the graph</ol>
				<ol>“color” is the colour of the plotted points change it to red or green or orange and play around for more possible colours</ol>
				<ol>“marker” is the shape of the points like a circle or any other symbols for different types of marker</ol>
			</ul>
		  <li>Predict the regression line value: Take the minimum error possible, the regression line is decided here.</li>
		  <li>Plot the regression line</li>
		  <li>Labels are put here instead of just x and y ie the name for x and y are put on the graph here.</li>
		  <li>Show the plotted graph</li>
		</ol>
		</h4>
	</div>
	<div class="col-sm-4 col-xs-12">
    <div class="panel panel-default text-center">
      <div class="panel-heading">
        <h1>Classification</h1>
      </div>
      <div class="panel-footer">
        <h3>Question 1</h3>
        <input style= "color:black; text-decoration: underline; border:#000;" id='answer1'class="panel-footer" type="text" name="" value=""><p> short form as np.array() </p>
        <p id="right1" style="display:none; color:#008000">You are right! Good going!</p>
        <p id="wrong1" style="display:none; color:#ff0000">Oops! You are wrong. Please try again.</p>
        <button class="btn btn-lg" id="question1" type="button" name="button">Submit</button>
        <!-- <button class="btn btn-lg" type="button" name="button">See answer</button> -->
      </div>
    </div>
    </div>
  </div>
</div>
<div class="container-fluid bg-grey">
  <div class="row">
    <p>def plot_regression_line(x, y, b):</p></br>
	<p>plt.scatter(x, y, color="m", marker="o", s="30)</p>
	<p>y_pred = b[0] + b[1]*x</p>
	<p>plt.plot(x, y_pred, color="g")</p>
	<p>plt.x.label("Size")</p>
	<p>plt.ylabel("Cost")</p>
	<p>plt.show()</p>
  </div>
</div>
<div id="about" class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
		<h4><b>Function3: </b>Main function</h4>
		<h4><b>Steps Include:</b>
		<ol>
		  <li>Gather the data sets required ie. x and y.</li>
		  <li>Calculate coefficients required ie. the value of moving of regression line in both x and y-direction.</li>
		  <li>Plot the graph</li>
		  <li>Write the main and call the main function</li>
		</ol></br>
		So here if asked for the price of the house for the size of 7Ksq feet the answer would be around 920K where the real value would be around 900K so the error is 20K.
		</h4>
	</div>
	<div class="col-sm-4 col-xs-12">
	  <img src = "images/lr-image.png" align="center" alt="lr image"><br><br>
    </div>
  </div>
</div>
<div class="container-fluid bg-grey">
  <div class="row">
    <p>def main():</p></br>
	<p>x = np.array([1, 2, 3, 4, 5, 6, 7, 8, 9, 10])</p>
	<p>y = np.array([300, 350, 500, 700, 800, 850, 900, 1000, 1200])
	<p>b = estimate_coefficients(x, y)</p>
	<p>print("Estimate coefficients:\nb=0 = {} \nn_b1 = {}".format(b[0], b[1]))</p>
	<p>plot_regression_line(x, y, b)</p>
	</br></br></br>
	<p>if _name_ == "_main_":</p></br>
	<p>main()</p>
  </div>
</div>
<!-- Container (Section) -->
<div id="services" class="container-fluid text-center">
  <h2>IN DEPTH</h2>
  <h4>Machine Learning</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>DATA PREPROCESSING</h4>
      <p>First and important step</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-ok logo-small"></span>
      <h4>REGRESSION</h4>
      <p>Numerical Predictive Analysis</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-th-large logo-small"></span>
      <h4>CLASSIFICATION</h4>
      <p>Categorical Predictive Analysis</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-barcode logo-small"></span>
      <h4>CLUSTERING</h4>
      <p>Unsupervised Predictive Ananlysis</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>NEURAL NETWORKS</h4>
      <p>Advanced computing systems similar to the brain</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">DIMENSIONALITY REDUCTION</h4>
      <p>Increasing efficiency everytime</p>
    </div>
  </div>
</div>
<!-- Container (Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Let's Get Started</h2>
    <h4>Choose a section that you want to start with</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Tutorials</h1>
        </div>
        <div class="panel-footer">
          <h3>Learn</h3>
          <h4>Learn about differnet algorithms in ML</h4>
          <button class="btn btn-lg"><a href="classification.php">Go to Classification!</a></button>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Quiz</h1>
        </div>
        <div class="panel-footer">
          <h3>Evaluate</h3>
          <h4>Understand how well you know your concepts</h4>
          <?php if(isset($_SESSION['name'])){echo '<button class="btn btn-lg"><a href="Classification_Quiz.php">Take quiz!</a></button>';}
          else{echo  "<button class='btn btn-lg'>Please ".'<a href="/tutscorner/login.php">'.'login'.'</a>'." to take the quiz.</button>";} ?>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Scoreboard</h1>
        </div>
        <div class="panel-footer">
          <h3>Measure</h3>
          <h4>Look where you stand out against your peers</h4>
          <button class="btn btn-lg"><a href="Scoreboard.php">Scoreboard</a></button>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#question1").on('click', function(e){
    e.preventDefault();
    $answer = $("#answer1").val();
    console.log('check');
    console.log($answer);
    if($answer=="numpy.array()"){
      console.log("Right");
      $('#right1').show();
      $('#wrong1').hide();
    }
    else{
      $('#wrong1').show();
      $('#right1').hide();
    }
  })
</script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
<!-- To add -->
var randomArray = [];
function getRandomVariable() {
  var number = 1 + Math.floor(Math.random() * 1000);
  return number;
}
function createRandomArray(numOfElements) {
  for (var i = 0; i < numOfElements; i++) {
    var arrayOfThisRow = [];
    arrayOfThisRow.push(getRandomVariable());
    arrayOfThisRow.push(getRandomVariable());
    randomArray.push(arrayOfThisRow);
  }
  randomArray.sort(Comparator);
}
function Comparator(a,b){
  if (a[0] < b[0]) return -1;
  if (a[0] > b[0]) return 1;
  return 0;
}
createRandomArray(20);
for (var p = 0; p < randomArray.length; p++) {
	$("#datatable").append("<tr><td><div contenteditable='true' id='editNum'>" + randomArray[p][0] + "</div></td><td><div contenteditable='true' id='editNum'>" + randomArray[p][1] + "</div></td></tr>");
}
var real = [];
var x = [];
var y = [];
var xySum = 0;
var xSquaredSum = 0;
var xAverage = 0;
var yAverage = 0;
var b2 = 0;
var b1 = 0;
var stdArray = [];
var std = 0;
var predicted = [];
function initialise() {
  real = [];
	x = [];
  y = [];
  xySum = 0;
  xAverage = 0;
  yAverage = 0;
  b2 = 0;
  b1 = 0;
  stdArray = [];
  std = 0;
  predicted = [];
  xSquaredSum = 0;
}
function getValues() {
  $("table#datatable tr").each(function() {
    var arrayOfThisRow = [];
    var tableData = $(this).find('td');
    if (tableData.length > 0) {
        tableData.each(function() {
          hi = parseInt($(this).text());
          arrayOfThisRow.push(hi);});
        real.push(arrayOfThisRow);
    }
  });
  for (var i = 0; i < real.length; i++) {
    x.push(real[i][0]);
    y.push(real[i][1]);
  }
}
// put into [[x, y][x, y]] format
function formatValues() {
  for (var i = 0; i < x.length; i++) {
  real[i] = [];
    for (var k = 0; k < 1; k++) {
      real[i].push(x[i]);
      real[i].push(y[i]);
    }
  }
}
// gets sum of X*Y
function getXY() {
  for (var l = 0; l < x.length; l++) {
    for (var m = 0; m < 1; m++) {
      xySum += real[l][m] * real[l][m+1];
    }
  }
}
// gets sum of x^2
function getXSquared() {
  for (var l = 0; l < x.length; l++) {
    for (var m = 0; m < 1; m++) {
      xSquaredSum += Math.pow(real[l][m], 2);
    }
  }
}
// gets average of x and y
function getAverages() {
  var totalx = 0;
  var totaly = 0;
  for (var i = 0; i < x.length; i++) {
    totalx += x[i];
    totaly += y[i];
  }
  xAverage = totalx/x.length;
  yAverage = totaly/x.length;
}
//b2 = [xySum - (count*xAverage*yAverage)]/[X^2sum - (count*xAverage^2)]
function getB2() {
  b2 = (xySum - (x.length*xAverage*yAverage)) / (xSquaredSum - (x.length * Math.pow(xAverage, 2)));
}
function getB1() {
  b1 = yAverage - xAverage * b2;
}
// Get predicted linear x y coords
function calculateYHat() {
  for (var i = 0; i < x.length; i++) {
    predicted[i] = [];
    for (var k = 0; k < 1; k++) {
      predicted[i].push(x[i]);
      predicted[i].push(b1+b2*x[i]);
    }
  }
}
// Get standard deviation
function getStd() {
  for (var i = 0; i < x.length; i++) {
    stdArray.push(Math.pow(x[i]-xAverage, 2));
    std += stdArray[i];
  }
  std /= x.length;
  std = Math.sqrt(std);
}
function compareNumbers(a, b) {
  return a[0] - b[0];
}
function updateText() {
	document.getElementById("y").innerHTML = ("Predicted = " + b1.toFixed(2) + " + " + b2.toFixed(2) + " * x<br>Average = " + yAverage.toFixed(2)) + "<br>Standard Deviation = " + std.toFixed(2);
};
function runGraph () {
  initialise();
  getValues();
  formatValues();
  getAverages();
  getXY();
  getXSquared();
  getB2();
  getB1();
  calculateYHat();
  getStd();
  updateText();

  $(function () {
        $('#container').highcharts({
            title: {
                text: 'Simple Linear Regression',
                x: -20 //center
            },
            <!-- subtitle: { -->
                <!-- text: 'Inconsistencies by Mei', -->
                <!-- x: -20 -->
            <!-- }, -->
            xAxis: {
                title: {
                    text: 'X'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            yAxis: {
                title: {
                    text: 'Y'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Real',
                data: real,
				color: '#0f3c3d'
                }, {
                name: 'Predicted',
                data: predicted,
				color: '#9fb1b1'
                }]
        });
    });
}
runGraph();
document.getElementById("editNum").addEventListener("input", function() {
    runGraph();
}, false);

<!-- To add -->
  </script>

<?php include('footer.php') ?>

