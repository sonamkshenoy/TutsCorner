<?php include('header.php') ?>

<!-- Container (Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Machine Learning</h2><br>
      <h4>Machine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed. Machine learning focuses on the development of computer programs that can access data and use it learn for themselves</h4><br>
      <!-- <p>It is the field of study that gives computers the capability to learn without being explicitly programmed. ML is one of the most exciting technologies that one would have ever come across. As it is evident from the name, it gives the computer that which makes it more similar to humans: The ability to learn. Machine learning is actively being used today, perhaps in many more places than one would expect.</p> -->
      <!-- <br><button class="btn btn-default btn-lg">Get Started</button> -->
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo slideanim"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-duplicate logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h4><strong>IMPORTANCE:</strong> <p>It is the field of study that gives computers the capability to learn without being explicitly programmed. ML is one of the most exciting technologies that one would have ever come across. As it is evident from the name, it gives the computer that which makes it more similar to humans: The ability to learn. Machine learning is actively being used today, perhaps in many more places than one would expect.</p></h4><br>
    </div>
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


  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>Data Preprocessing is a technique that is used to convert the raw data into a clean data set. In other words, whenever the data is gathered from different sources it is collected in raw format which is not feasible for the analysis.<br></h4>
      </div>
      <div class="item">
        <h4>When our data is comprised of attributes with varying scales, many machine learning algorithms can benefit from rescaling the attributes to all have the same scale.<br></h4>
      </div>
      <div class="item">
        <h4>Rescaling is useful for optimization algorithms in used in the core of machine learning algorithms.<br></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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
          <button class="btn btn-lg"><a href="regression.php">Go to Regression!</a></button>
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
          <button class="btn btn-lg"><a href="Classification_Quiz.php">Take quiz!</a></button>
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
</script>

  <?php include('footer.php') ?>
