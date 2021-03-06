<?php include('header.php') ?>
<style>
#bodyplot {
  background-color: white;
  margin-top: 10px;
}
#chart {
  background-color: white;
}
.row {
  padding-top: 2px;
}
.circle {
  stroke: #000;
  stroke-width: 1px;
  fill: #fa6900;
  fill-opacity: 1;
}
.line {
  stroke: #ccc;
  stroke-width: 3px;
}
.predict {
  opacity: 0.2;
}
/* <!-- To add -->	 */
</style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.9.1/d3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://www.lactame.com/lib/ml/2.0.0/ml.min.js"></script>
<!-- Container (Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Classification</h2><br>
      <h4>Classification is a sub-type of supervised machine learning. Where decisions are taken and predictions are made based on past data. Which includes both the input data and the output data that it provided.Classification problems require data to be classified into different categories.With classification the groups (or classes) are specified before hand, with each training data instance belonging to a particular class. It is the association between the instances features and the class they belong to that classification algorithms are supposed to learn. An example of use would be an insurance company trying to assign customers into high risk and low risk categories.</h4>
	</div>
    <div class="col-sm-4">
	  </br></br></br></br></br></br></br>
	  <img src = "images/classific-image.png" alt="regression image">
    </div>
  </div>
</div>
<div class="container-fluid bg-grey">
  <div class="row">
      <h4><strong>IMPORTANCE:</strong> <p>Unlike regression where you predict a continuous number, you use classification to predict a category. There is a wide variety of classification applications from medicine to marketing. Classification models include linear models like Logistic Regression, SVM, and nonlinear ones like K-NN, Kernel SVM and Random Forests.</p></h4><br>
  </div>
</div>
<div class="container-fluid">
  <div class="container" id="bodyplot">
  <div class="row">
    <div class="col-sm-6">
      <div id="chart"></div>
    </div>
    <div class="col-sm-6">
      <button type="button" class="btn btn-l" id="new_category_button">New Category Data</button>
      <span id="category_info"></span>
      <button type="button" class="btn btn-l" id="clean_button">Clear</button>
      <label><input type="checkbox" id="predict_check"> Predict</label>
    </div>
	<br><br><br>
	<h4>In the visualization, you can see how Naive Bayes classification works. Click on New Category Data to add different categories by clicking on the sceen within the plot, each categorical data shall be marked with different colours. After you select predict, the decision boundaries are displayed, i.e. data points are classified.</h4>
	<h4>Naive Bayes classifiers are a collection of classification algorithms based on Bayes’ Theorem. It is not a single algorithm but a family of algorithms where all of them share a common principle, i.e. every pair of features being classified is independent of each other.</h4>
  </div>
</div>
</div>
<div id="about" class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
		<h3><b>Introduction</b></h3>
		<h4>Classification is a large domain in the field of statistics and machine learning. Generally, classification can be broken down into two areas:
		<ol></br>
		  <li><b>Binary classification</b> where we wish to group an outcome into one of two groups.</li>
		  <li><b>Multi-class classification</b> where we wish to group an outcome into one of multiple (more than two) groups.</li>
		</ol></br>
		We can use libraries in Python such as scikit-learn for machine learning models, and Pandas to import data as data frames.</h4>
		<h4>These can easily be installed and imported into Python with pip.
		</h4>
	</div>
	<div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Classification</h1>
        </div>
        <div class="panel-footer">
          <h3>Question 1</h3>
          <input style= "color:black; text-decoration: underline; border:#000;" id='answer1'class="panel-footer" type="text" name="" value=""><p> is a python library that can be used for machine learning models. </p>
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
    <p>$ python3 -m pip install sklearn</p>
	<p>$ python3 -m pip install pandas</p></br>
	<p>import sklearn as sk</p>
	<p>import pandas as pd</p>
  </div>
</div>
<div id="about" class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
		<h3><b>Binary Classification</b></h3>
		<h4>For binary classification, we are interested in classifying data into one of two binary groups - these are usually represented as 0's and 1's in our data.</h4>
		<h4>We will look at data regarding coronary heart disease (CHD) in South Africa. The goal is to use different variables such as tobacco usage, family history, ldl cholesterol levels, alcohol usage, obesity and more.</h4>
		<h4>A full description of this dataset is available in the "Data" section of the Elements of Statistical Learning website.</h4>
		<h4>The code below reads the data into a Pandas data frame, and then separates the data frame into a y vector of the response and an X matrix of explanatory variables</h4>
	</div>
	<div class="col-sm-4 col-xs-12">
    <div class="panel panel-default text-center">
      <div class="panel-heading">
        <h1>Classification</h1>
      </div>
      <div class="panel-footer">
        <h3>Question 2</h3>
        <input style= "color:black; text-decoration: underline; border:#000;" id='answer2'class="panel-footer" type="text" name="" value=""><p>  is where we wish to group an outcome into one of two groups. </p>
        <p id="right2" style="display:none; color:#008000">You are right! Good going!</p>
        <p id="wrong2" style="display:none; color:#ff0000">Oops! You are wrong. Please try again.</p>
        <button class="btn btn-lg" id="question2" type="button" name="button">Submit</button>
        <!-- <button class="btn btn-lg" type="button" name="button">See answer</button> -->
      </div>
    </div>
    </div>
  </div>
</div>
<div class="container-fluid bg-grey">
  <div class="row">
	<p>import os</p>
	<p>import pandas as pd</p>
	<p>os.chdir('/Users/stevenhurwitt/Documents/Blog/Classification')</p>
	<p>heart = pd.read_csv('SAHeart.csv', sep=',', header=0)</p>
	<p>heart.head()</p></br>
	<p>y = heart.iloc[:,9]</p>
	<p>X = heart.iloc[:,:9]</p>
  </div>
</div>
<div id="about" class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
		<h3><b>Logistic Regression</b></h3>
		<h4>Logistic Regression is a type of Generalized Linear Model (GLM) that uses a logistic function to model a binary variable based on any kind of independent variables.</h4>
		<h4>To fit a binary logistic regression with sklearn, we use the LogisticRegression module with multi_class set to "ovr" and fit X and y.</h4>
		<h4>We can then use the predict method to predict probabilities of new data, as well as the score method to get the mean prediction accuracy.</h4>
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
	<p>import os</p>
	<p>import sklearn as sk</p>
	<p>import pandas as pd</p>
	<p>from sklearn.linear_model import LogisticRegression</p>
	<p>os.chdir('/Users/stevenhurwitt/Documents/Blog/Classification')</p>
	<p>heart = pd.read_csv('SAHeart.csv', sep=',', header=0)</p>
	<p>heart.head()</p></br>
	<p>y = heart.iloc[:,9]</p>
	<p>X = heart.iloc[:,:9]</p></br>
	<p>LR = LogisticRegression(random_state=0, solver='lbfgs', multi_class='ovr').fit(X, y)</p>
	<p>LR.predict(X.iloc[460:,:])</p>
	<p>round(LR.score(X,y), 4)</p>
  </div>
</div>
<div id="about" class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
		<h3><b>Multi-Class Classification</b></h3>
		<h3><b>Neural Networks</b></h3>
		<h4>While binary classification alone is incredibly useful, there are times when we would like to model and predict data that has more than two classes. Many of the same algorithms can be used with slight modifications.</h4>
		<h4>Neural Networks are a machine learning algorithm that involves fitting many hidden layers used to represent neurons that are connected with synaptic activation functions. These essentially use a very simplified model of the brain to model and predict data.</h4>
		<h4>We use sklearn for consistency in this post, however libraries such as Tensorflow and Keras are more suited to fitting and customizing neural networks, of which there are a few varieties used for different purposes.</h4>
	</div>
	<div class="col-sm-4 col-xs-12">
      <!-- <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Box 4</h1>
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
	<p>import sklearn as sk</p>
	<p>from sklearn.linear_model import MLPClassifier</p>
	<p>NN = MLPClassifier(solver='lbfgs', alpha=1e-5, hidden_layer_sizes=(5, 2), random_state=1)</p>
	<p>NN.fit(X, y)</p>
	<p>NN.predict(X.iloc[460:,:])</p>
	<p>round(LR.score(X,y), 4)</p>
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
          <button class="btn btn-lg"><a href="clustering.php">Go to Clustering!</a></button>
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
          else{echo "<button class='btn btn-lg'>Please ".'<a href="/tutscorner/login.php">'.'login'.'</a>'." to take the quiz.</button>";} ?>
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
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script type="text/javascript">
  $("#question1").on('click', function(e){
    e.preventDefault();
    $answer = $("#answer1").val();
    console.log('check');
    console.log($answer);
    if($answer=="Scikit-learn"){
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
<script type="text/javascript">
  $("#question2").on('click', function(e){
    e.preventDefault();
    $answer = $("#answer2").val();
    console.log('check');
    console.log($answer);
    if($answer=="Binary Classification"){
      console.log("Right");
      $('#right2').show();
      $('#wrong2').hide();
    }
    else{
      $('#wrong2').show();
      $('#right2').hide();
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

<!-- To add -->
var size = 400; //The size of the canvas
var margin_size = 50;
var point_size = 8;
var colors = d3.scaleOrdinal(d3.schemeCategory10);
var domain_max = 100;
var data = [];
var current_category = undefined;
var xScale, yScale;
var nb = undefined; // model
function drawCircle(container, p, r, color) {
  var circle = container
    .append("circle")
    .attr("cx", p.x)
    .attr("cy", p.y)
    .attr("r", r)
    .classed("circle", true);
  if (color) {
    circle.style("fill", color);
  }
  return circle;
}
function drawLine(container, p1, p2) {
  var line = container
    .append("line")
    .attr("x1", p1.x)
    .attr("y1", p1.y)
    .attr("x2", p2.x)
    .attr("y2", p2.y)
    .classed("line", true);
  return line;
}
function gen_new_category() {
  if (current_category == undefined) {
    current_category = 0;
  } else {
    current_category = current_category + 1;
  }
  d3
    .select("#category_info")
    .text("category" + current_category)
    .style("color", colors(current_category));
}
function clean() {
  data = [];
  current_category = undefined;
  total_category = 0;
  d3.select("#category_info").text("");
  d3.select("#train_info").text("");
  $(".circle").remove();
  $(".line").remove();
}
function train() {
  var train_data = [];
  var labels = [];
  data.map(function(d) {
    train_data.push([d.x, d.y]);
    labels.push(d.category);
  });
  nb = new ML.SL.NaiveBayes();
  nb.train(train_data, labels);
  console.log("training complete");
}
function drawPredict(model, container) {
  var predict_data = [];
  for (var i = 1; i <= domain_max; i++) {
    for (var j = 1; j <= domain_max; j++) {
      predict_data.push([i, j]);
    }
  }

  var label = nb.predict(predict_data);
  var length = predict_data.length;
  for (var i = 0; i < length; i++) {
    var point = {};
    point.x = predict_data[i][0];
    point.y = predict_data[i][1];

    var predict_point = drawCircle(
      container,
      { x: xScale(point.x), y: yScale(point.y) },
      1,
      colors(label[i])
    );
    predict_point.classed("predict", true).style("stroke", colors(label[i]));
  }
}
$(function() {
  var margin = {
    top: margin_size,
    right: margin_size,
    bottom: margin_size,
    left: margin_size
  },
    width = size - margin.left - margin.right,
    height = size - margin.top - margin.bottom;
  var root = d3
    .select("#chart")
    .append("svg")
    .attr("width", size)
    .attr("height", size);
  var g = root
    .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
  var layer1 = root.append("g").attr("id", "layer1");
  //Draw Axis
  xScale = d3.scaleLinear().rangeRound([0, width]);
  yScale = d3.scaleLinear().rangeRound([height, 0]);
  xScale.domain([0, domain_max]);
  yScale.domain([0, domain_max]);
  g
    .append("g")
    .attr("transform", "translate(0," + height + ")")
    .call(d3.axisBottom(xScale));
  g.append("g").call(d3.axisLeft(yScale));
  // Generate Data
  $("#new_category_button").click(function() {
    gen_new_category();
    root.on("click", function() {
      var coords = d3.mouse(this);
      var mapped_coords = [coords[0] - margin_size, coords[1] - margin_size];
      // convert to data domain
      var newData = {
        x: Math.round(xScale.invert(mapped_coords[0])), // Takes the pixel number to convert to number
        y: Math.round(yScale.invert(mapped_coords[1]))
      };
      newData.coordinates = { x: coords[0], y: coords[1] };
      if (current_category !== undefined) {
        drawCircle(
          g,
          { x: mapped_coords[0], y: mapped_coords[1] },
          point_size,
          colors(current_category)
        );
        newData.category = current_category;
        data.push(newData);
      }
    });
  });
  $("#clean_button").click(function() {
    clean();
  });
  $("#predict_check").change(function() {
    train();
    // this will contain a reference to the checkbox
    if (this.checked) {
      drawPredict(nb, g);
    } else {
      $(".predict").remove();
    }
  });
  $("#predict_button").click(function() {
    root.on("mousemove", function(d) {
      var coords = d3.mouse(this);
      var mapped_coords = [coords[0] - margin_size, coords[1] - margin_size];
      var current_data_point = [];
      current_data_point.push(Math.round(xScale.invert(mapped_coords[0])));
      current_data_point.push(Math.round(yScale.invert(mapped_coords[1])));
      var current_point = {};
      current_point.x = mapped_coords[0];
      current_point.y = mapped_coords[1];
      var label = nb.predict([current_data_point]);
      var predict_point = drawCircle(g, current_point, 8, colors(label[0]));
      predict_point
        .transition()
        .duration(1000)
        .style("fill-opacity", 0)
        .style("stroke-width", "0px");
    });
  });
});
// <!-- To add -->

});
</script>
  <?php include('footer.php') ?>
