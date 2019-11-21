<?php
session_start();
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

        <h1 style="font-size: 40px">Classification</h1>
        <!-- <p>Just the right place to get started for Machine Learning!</p> -->
        <!-- <br> -->
        <h2 style="align-items: center">
          Quiz Time
        </h2>
      </div>


<!-- <form class="" action="/tutscorner/Classification_Quiz.php" method="POST"> -->

    <!-- <div class="question" style="width: 65%; height:100%; float: left; margin-left: 60px;"> -->
        <table>

            <!-- Question 1 -->
            <tr>
                <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question1">
                    Q1 - Which of the following models can perform tweet classification with regards to context mentioned above?
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button class="option ques1">Naive Bayes</button></td>
                <td><button class="option ques1">SVM</button></td>
            </tr>
            <tr>
                <td></td>
                <td><button style="margin-bottom: 50px;"  class="option ques1">Both of the above</button> </td>
                <td><button style="margin-bottom: 50px;" class="option ques1">None of the above</button></td>
            </tr>

            <!-- Question 2 -->
            <tr>
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question2">
                        Q2 - We should use Linear Regression to predict the winner of a football game
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques2">True</button></td>
                    <td><button class="option ques2">False</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques2">Depends on type of data</button></td>
                    <td><button style="margin-bottom: 50px;" class="option ques2">Not sure</button></td>
                </tr>

                <!-- Question 3 -->
                <tr>
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question3">
                        Q3 - In python's scikit-learn module which class is used to create logistic regression classifier?
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques3">GLM</button> </td>
                    <td><button class="option ques3">LogisticRegression</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques3">Logit</button> </td>
                    <td><button style="margin-bottom: 50px;" class="option ques3">LogReg</button></td>
                </tr>

                <!-- Question 4 -->
                <tr>
                    <a name = "Question4">
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question4">
                        Q4 - The SVM’s are less effective when:
                    </td>
                    </a>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques4">The data is linearly separable</button></td>
                    <td><button class="option ques4">The data is clean and ready to use</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques4">The data is noisy and contains overlapping points</button> </td>
                    <td><button style="margin-bottom: 50px;" class="option ques4">None of the above</button></td>
                </tr>

                <!-- Question 5 -->
                <tr>
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question5">
                        Q5 - Logistic Regression is a linear classifier
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques5">True</button></td>
                    <td><button class="option ques5">False</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques5">Not sure</button> </td>
                    <td><button style="margin-bottom: 50px;" class="option ques5">Depends on the dataset</button></td>
                </tr>

                <!-- Question 6 -->
                <tr>
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question6">
                        Q6 - Logistic Regression returns probabilities
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques6">True</button></td>
                    <td><button class="option ques6">False</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques6">Not sure</button> </td>
                    <td><button style="margin-bottom: 50px;" class="option ques6">Depends on the dataset</button></td>
                </tr>

                <!-- Question 7 -->
                <tr>
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question7">
                        Q7 - How can you avoid overfitting?
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques7">Under fitting</button></td>
                    <td><button class="option ques7">Cross Validation</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques7">Direct Validation</button> </td>
                    <td><button style="margin-bottom: 50px;" class="option ques7">None of the above</button></td>
                </tr>


                <!-- Question 8 -->
                <tr>
                        <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question8">
                        Q8 - To find the minimum or the maximum of a function, we set the gradient to zero because:
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques8">The value of the gradient at extrema of a function is always zero</button></td>
                    <td><button class="option ques8">Depends on the type of problem</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques8">Both A and B</button> </td>
                    <td><button style="margin-bottom: 50px;" class="option ques8">None of the above.</button></td>
                </tr>


                <!-- Question 9 -->
                <tr>
                    <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question9">
                        Q9 -The most widely used metrics and tools to assess a classification model are:
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="option ques9">Confusion matrix</button></td>
                    <td><button class="option ques9">Cost-sensitive accuracy</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button style="margin-bottom: 50px;" class="option ques9">Area under the ROC curve</button></td>
                    <td><button style="margin-bottom: 50px;" class="option ques9">All of the above</button></td>
                </tr>


                <!-- Question 10 -->
                <tr>
                        <td colspan="6" style="margin-bottom: 20px" class="statement" id="Question10">
                            Q10 - Which of the following is true about Naive Bayes ?
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="option ques10">Assumes that all the features in a dataset are equally important</button></td>
                        <td><button class="option ques10">Assumes that all the features in a dataset are independent</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button style="margin-bottom: 50px;" class="option ques10">All of the above</button></td>
                        <td><button style="margin-bottom: 50px;" class="option ques10">None of the above</button></td>
                    </tr>

        </table>
        <!-- <form class="" action="/Scoreboard.php" method="post"> -->
        <!-- <form class="" action="index.html" method="post">
          <input id="score" type="text" name="" value="">
        </form> -->
          <a href="/tutscorner/Scoreboard.php"><div style="padding-left: 380px; margin-bottom: 40px;"> <button id="submit_button">Submit</button></div></a>

        <!-- </form> -->

  <!-- </form> -->
  <div class="scorenow" style = "text-align:center; display:none;">
    <h2>You scored <span id='scorehere'></span> </h2>

  </div>


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
                <td id='score' style="font-size:20px;padding: 0px 0px 20px 20px; font-size: 25px; color: cornflowerblue">0/10</td>
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
    </div>
   </div>
</div>


    <script src="quiz.js"></script>
    <!-- <script type="text/javascript">
    // document.cookie = "score = " + score;
    // var score= 9;
    score = score;
  </script>-->

</body>
</html>
