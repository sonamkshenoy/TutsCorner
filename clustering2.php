<?php include('header.php') ?>

<!-- Container (Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Clustering</h2><br>
      <h4>Clustering comes under unsupervised machine learning. It is done only using the input data that is available, and is used to determine the hidden patterns, similarities and anomalies present in the data. Clustering problems have observations divided into subsets into different subsets, each of them containing similar information. These subsets are called clusters. With clustering the groups (or clusters) are based on the similarities of data instances to each other. No predefined output class is used in training and the clustering algorithm is supposed to learn the grouping. An example of use would be an online movie company recommending you a movie because other customers who had made similar movie choices as you in the past (i,e. the cluster you fall in) have favorably rated that movie.</h4>
	</div>
    <div class="col-sm-4">
	  </br></br></br></br></br></br></br>
	  <img src = "images/cluster-image.png" alt="regression image">
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
      <h4><strong>IMPORTANCE:</strong> <p>Clustering is similar to classification, but the basis is different. In Clustering you don’t know what you are looking for, and you are trying to identify some segments or clusters in your data. When you use clustering algorithms on your dataset, unexpected things can suddenly pop up like structures, clusters and groupings you would have never thought of otherwise.</p></h4><br>
  </div>
</div>

<div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
		<h3><b>Import the libraries<b></h3><br>
		<h4>In this section, we will see how Python's Scikit-Learn library can be used to implement the KNN algorithm in less than 20 lines of code.</h4>
		<h4>We are going to use the famous iris data set for our KNN example. The dataset consists of four attributes: sepal-width, sepal-length, petal-width and petal-length. These are the attributes of specific types of iris plant. The task is to predict the class to which these plants belong. There are three classes in the dataset: Iris-setosa, Iris-versicolor and Iris-virginica.</h4>
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
		<h3><b>Import and Preprocess the Dataset<b></h3><br>
		<h4>To import the dataset and load it into our pandas dataframe, execute the following code</h4>
		<h4>To see what the dataset actually looks like, execute the following command - dataset.head()</h4>
		<h4>Executing the above script will display the first five rows of our dataset</h4>
		<h4> To preprocess split our dataset into its attributes and labels. The X variable contains the first four columns of the dataset (i.e. attributes) while y contains the labels.</h4>
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
  <img src = "images/tableknn-image.jpg" align="center" alt="data image"><br><br>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <p>url = "https://archive.ics.uci.edu/ml/machine-learning-databases/iris/iris.data"</p>
	<p>names = ['sepal-length', 'sepal-width', 'petal-length', 'petal-width', 'Class']</p>
	<p>dataset = pd.read_csv(url, names=names)</p>
	<p>dataset.head()</p></br>
	<p>X = dataset.iloc[:, :-1].values</p>
	<p>Y = dataset.iloc[:, 4].values</p>
  </div>
</div>

<div id="about" class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
		<h3><b>Train Test Split<b></h3><br>
		<h4>To avoid over-fitting, we will divide our dataset into training and test splits, which gives us a better idea as to how our algorithm performed during the testing phase. This way our algorithm is tested on un-seen data, as it would be in a production application.</h4>
		<h4>To create training and test splits, execute the following script as below</h4>
		<h4>The above script splits the dataset into 80% train data and 20% test data. This means that out of total 150 records, the training set will contain 120 records and the test set contains 30 of those records.</h4>
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
    <p>from sklearn.model_selection import train_test_split</p>
	<p>X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.20)</p>
  </div>
</div>

<div id="about" class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
		<h3><b>Feature Scaling<b></h3><br>
		<h4>Before making any actual predictions, it is always a good practice to scale the features so that all of them can be uniformly evaluated.
		The gradient descent algorithm (which is used in neural network training and other machine learning algorithms) also converges faster with normalized features.</h4>
		<h4>Since the range of values of raw data varies widely, in some machine learning algorithms, objective functions will not work properly without normalization. For example, the majority of classifiers calculate the distance between two points by the Euclidean distance. If one of the features has a broad range of values, the distance will be governed by this particular feature. Therefore, the range of all features should be normalized so that each feature contributes approximately proportionately to the final distance.</h4>
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
    <p>from sklearn.preprocessing import StandardScaler</p>
	<p>scaler = StandardScaler()</p>
	<p>scaler.fit(X_train)</p></br>
	<p>X_train = scaler.transform(X_train)</p>
	<p>X_test = scaler.transform(X_test)</p>
  </div>
</div>

<div id="about" class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
		<h3><b>Training and Predictions<b></h3><br>
		<h4>The next step is to import the KNeighborsClassifier class from the sklearn.neighbors library. In the second line, this class is initialized with one parameter, i.e. n_neigbours. This is basically the value for the K. There is no ideal value for K and it is selected after testing and evaluation, however to start out, 5 seems to be the most commonly used value for KNN algorithm.</h4>
		<h4>The final step is to make predictions on our test data. To do so, execute the following script - y_pred = classifier.predict(X_test)</h4>
		<h4>For evaluating an algorithm, confusion matrix, precision, recall and f1 score are the most commonly used metrics. The confusion_matrix and classification_report methods of the sklearn.metrics can be used to calculate these metrics.</h4>
	</div>
	<div class="col-sm-4 col-xs-12">
      <!-- <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Box 5</h1>
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
	<p>from sklearn.neighbors import KNeighborsClassifier</p>
	<p>classifier = KNeighborsClassifier(n_neighbors=5)</p>
	<p>classifier.fit(X_train, y_train)</p></br>
	<p>y_pred = classifier.predict(X_test)</p></br>
	<p>from sklearn.metrics import classification_report, confusion_matrix</p>
	<p>print(confusion_matrix(y_test, y_pred))</p>
	<p>print(classification_report(y_test, y_pred))</p>
	  </div>
</div>

<div id="about" class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
		<h3><b>Comparing Error Rate with the K value</b></h3><br>
		<h4>In the training and prediction section we said that there is no way to know beforehand which value of K that yields the best results in the first go. We randomly chose 5 as the K value and it just happen to result in 100% accuracy.</h4>
		<h4>One way to help you find the best value of K is to plot the graph of K value and the corresponding error rate for the dataset.</h4>
		<h4>The next step is to plot the error values against K values.</h4>
		<h4>From the output we can see that the mean error is zero when the value of the K is between 5 and 18. I would advise you to play around with the value of K to see how it impacts the accuracy of the predictions.</h4>
	</div>
	<div class="col-sm-4 col-xs-12">
    <div class="panel panel-default text-center">
      <div class="panel-heading">
        <h1>Clustering</h1>
      </div>
      <div class="panel-footer">
        <h3>Question 1</h3>
        <p>KNN is <input style= "color:black; text-decoration: underline; border:#000;" id='answer1'class="panel-footer" type="text" name="" value=""> algorithm and therefore requires no training prior to making real time predictions.</p>
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
    <p>error = []</p>
	<p>for i in range(1, 40):</p>
	<p>knn = KNeighborsClassifier(n_neighbors=i)</p>
	<p>knn.fit(X_train, y_train)</p>
	<p>pred_i = knn.predict(X_test)</p>
	<p>error.append(np.mean(pred_i != y_test))</p></br>
	<p>plt.figure(figsize=(12, 6))</p>
	<p>plt.plot(range(1, 40), error, color='red', linestyle='dashed', marker='o', markerfacecolor='blue', markersize=10)</p>
	<p>plt.title('Error Rate K Value')</p>
	<p>plt.xlabel('K Value')</p>
	<p>plt.ylabel('Mean Error')</p>
  </div>
</div>

<img src = "images/knn-image.png" align="center" alt="knn image"><br><br>

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
          <button class="btn btn-lg"><a href="regression.php">Go back to data processing!</a></button>
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
          <?php if(isset($_SESSION['name'])){echo '<button class="btn btn-lg"><a href="Clustering_Quiz.php">Take quiz!</a></button>';}
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



<script type="text/javascript">
  $("#question1").on('click', function(e){
    e.preventDefault();
    $answer = $("#answer1").val();
    console.log('check');
    console.log($answer);
    if($answer=="lazy learning"){
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
</script>

  <?php include('footer.php') ?>
