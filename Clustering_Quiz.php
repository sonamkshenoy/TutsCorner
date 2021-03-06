<?php
if(!isset($_SESSION))
  {
      session_start();
  }
$name = $_SESSION['name']??"guest";
include("config/db_connect.php");


if(isset($_POST['score'])){

  $score = $_POST['score'];

   // $quiz1scorevalue = rand(1,10)??8;
   $sql = "UPDATE allentries SET quiz1score='$score' WHERE name='$name'";
   if(mysqli_query($conn, $sql)){
     // echo "Hey $name! You have signed up successfully!";
   }
   else{
     // echo "Please try again!". mysqli_error($conn);
   }
   echo $_POST['score'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="styles/quiz.css">
    <script
    			  src="https://code.jquery.com/jquery-3.4.1.min.js"
    			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    			  crossorigin="anonymous"></script>
</head>

<body style="font-family: Calibri">

    <div class="header" style="padding: 40px; margin-bottom: 20px; text-align:center; background:#48464d; color:white">
      <a href="/tutscorner/Scoreboard.php"><button style="text-align:center;" class='option'>Go to scoreboard</button>  </a>

        <h1 style="font-size: 40px">Clustering</h1>
        <!-- <p>Just the right place to get started for Machine Learning!</p> -->
        <!-- <br> -->
        <h2 style="align-items: center">
            <div class = "round-div" style="display: inline-block; background-color: white; color: black ; width: 300px; padding: 10px 10px 10px 10px">Quiz Time</div>
        </h2>
    </div>

    <div class="question" style="width: 65%; height:100%; float: left; margin-left: 60px;">
        <table>

            <!-- Question 1 -->
            <tr>
                <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question1">
                    Q1 - Can decision trees be used for performing clustering?
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button style="margin-bottom: 50px;" class="option ques1">True</button></td>
                <td><button style="margin-bottom: 50px;" class="option ques1">False</button></td>
            </tr>

            <!-- Question 2 -->
            <tr>
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question2">
                        Q2 - What is the minimum no. of variables/ features required to perform clustering?
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques2">Zero</button></td>
                    <td><button class="option ques2">One</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques2">Two</button></td>
                    <td><button style="margin-bottom: 50px;" class="option ques2">Three</button></td>
                </tr>

                <!-- Question 3 -->
                <tr>
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question3">
                        Q3 - For two runs of K-Mean clustering is it expected to get same clustering results?
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;"  class="option ques3">Yes</button> </td>
                    <td><button style="margin-bottom: 50px;" class="option ques3">No</button></td>
                </tr>

                <!-- Question 4 -->
                <tr>
                    <a name = "Question4">
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question4">
                        Q4 - Is it possible that Assignment of observations to clusters does not change between successive iterations in K-Means

                    </td>
                    </a>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques4">Yes</button></td>
                    <td><button class="option ques4">No</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques4">Can't say</button> </td>
                    <td><button style="margin-bottom: 50px;" class="option ques4">None of the above</button></td>
                </tr>

                <!-- Question 5 -->
                <tr>
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question5">
                        Q5 - Which of the following algorithm is most sensitive to outliers?
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques5">K-means clustering algorithm</button></td>
                    <td><button class="option ques5">K-medians clustering algorithm</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques5">K-modes clustering algorithm</button> </td>
                    <td><button style="margin-bottom: 50px;" class="option ques5">K-medoids clustering algorithm</button></td>
                </tr>

                <!-- Question 6 -->
                <tr>
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question6">
                        Q6 - In which of the following cases will K-Means clustering fail to give good results?
                        <br>1.	Data points with outliers
                        <br>2.	Data points with different densities
                        <br>3.	Data points with round shapes
                        <br>4.	Data points with non-convex shapes

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques6">1 and 2.</button></td>
                    <td><button class="option ques6">2 and 3</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques6">2 and 4</button> </td>
                    <td><button style="margin-bottom: 50px;" class="option ques6">1,2 and 4</button></td>
                </tr>

                <!-- Question 7 -->
                <tr>
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question7">
                        Q7 - Which of the following is/are valid iterative strategy for treating missing values before clustering analysis?
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques7">Imputation with mean</button></td>
                    <td><button class="option ques7">Nearest Neighbor assignment</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques7">Imputation with Expectation Maximization algorithm</button> </td>
                    <td><button style="margin-bottom: 50px;" class="option ques7">All of the above</button></td>
                </tr>


                <!-- Question 8 -->
                <tr>
                        <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question8">
                        Q8 - Assume, you want to cluster 7 observations into 3 clusters using K-Means clustering algorithm. After first iteration clusters, C1, C2, C3 has following observations:
                        <br>C1: {(2,2), (4,4), (6,6)}
                        <br>C2: {(0,4), (4,0)}
                        <br>C3: {(5,5), (9,9)}
                        <br>What will be the Manhattan distance for observation (9, 9) from cluster centroid C1. In second iteration.

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques8">10</button></td>
                    <td><button class="option ques8">5*sqrt(2)</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques8">13*sqrt(2)</button> </td>
                    <td><button style="margin-bottom: 50px;" class="option ques8">None of the above.</button></td>
                </tr>


                <!-- Question 9 -->
                <tr>
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question9">
                        Q9 - If two variables V1 and V2, are used for clustering. Which of the following are true for K means clustering with k =3?
                        <br>1.	If V1 and V2 has a correlation of 1, the cluster centroids will be in a straight line
                        <br>2.	If V1 and V2 has a correlation of 0, the cluster centroids will be in straight line

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques9">1 only</button></td>
                    <td><button class="option ques9">2 only</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques9">1 and 2</button></td>
                    <td><button style="margin-bottom: 50px;" class="option ques9">None of the above</button></td>
                </tr>


                <!-- Question 10 -->
                <tr>
                        <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question10">
                            Q10 - Feature scaling is an important step before applying K-Mean algorithm. What is reason behind this?
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="option ques10">In distance calculation it will give the same weights for all features</button></td>
                        <td><button class="option ques10">You always get the same clusters. If you use or don’t use feature scaling</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button style="margin-bottom: 50px;" class="option ques10">In Manhattan distance it is an important step but in Euclidian it is not</button></td>
                        <td><button style="margin-bottom: 50px;" class="option ques10">None of the above</button></td>
                    </tr>

        </table>
        <button style="padding-left: 20px; margin-left: 380px; margin-bottom: 40px;" class='option' id="submit_button">Submit</button>

    <!-- Side Scoreboard -->
    <div class="fixit" style=" float: right; align-items: center; margin-top: 40px; position: fixed">
    <div class = "fixed">
        <div class="marks" style="padding-right: 35px ;">
        <table style="display: inline">
            <tr>
                <td colspan="3" style="align-content: center; font-size: 25px;padding: 20px 0px 20px 60px">SCORE</td>
            </tr>
            <tr>
                <td></td>
                <td id='scoretotal' style="font-size:20px;padding: 0px 0px 20px 20px; font-size: 25px; color: cornflowerblue">0/10</td>
                <td></td>
            </tr>
            <tr>
                <td><a href="#Question1"><button class = "qno" id="q1">1</button></a></td>
                <td><a href="#Question2"><button class = "qno" id="q2">2</button></a></td>
                <td><a href="#Question3"><button class = "qno" id="q3">3</button></a></td>
            </tr>
            <tr>
                <td><a href="#Question4"><button class = "qno" id="q4">4</button></a></td>
                <td><a href="#Question5"><button class = "qno" id="q5">5</button></a></td>
                <td><a href="#Question6"><button class = "qno" id="q6">6</button></a></td>
            </tr>
            <tr>
                <td><a href="#Question7"><button class = "qno" id="q7">7</button></a></td>
                <td><a href="#Question8"><button class = "qno" id="q8">8</button></a></td>
                <td><a href="#Question9"><button class = "qno" id="q9">9</button></a></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="#Question10"><button class="qno" id="q10">10</button></a></td>
            </tr>
        </table>
    </div>    </div>
</div>
    <script src="quiz2.js"></script>
</body>
</html>
