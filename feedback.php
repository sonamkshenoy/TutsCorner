<?php
include("header.php");
$name = $_SESSION['name']??"guest";
include("config/db_connect.php");

if(isset($_POST['submit'])){
  $feedback = $_POST['feedback'];
  $sql = "UPDATE allentries SET feedback='$feedback' WHERE name='$name'";



  if(mysqli_query($conn, $sql)){
    // echo "Hey $name! You have signed up successfully!";
  }
  else{
    // echo "Please try again!". mysqli_error($conn);

  }}

    mysqli_close($conn);

?>

<body>

    <script>

    function alert_thanks() {
      alert("Thank you for the feedback!!");
    }
    function highlight1() {
        var element = document.getElementById("emo1");
        element.style.border="solid 3px rgb(241, 173, 47)";
        document.getElementById("emo2").style.border="white";
        document.getElementById("emo3").style.border="white";
        document.getElementById("emo4").style.border="white";
        document.getElementById("emo5").style.border="white";
      }
    function highlight2() {
      var element = document.getElementById("emo2");
      element.style.border="solid 3px rgb(241, 173, 47)";
      document.getElementById("emo1").style.border="white";
      document.getElementById("emo3").style.border="white";
      document.getElementById("emo4").style.border="white";
      document.getElementById("emo5").style.border="white";
    }
    function highlight3() {
      var element = document.getElementById("emo3");
      element.style.border="solid 3px rgb(241, 173, 47)";
      document.getElementById("emo1").style.border="white";
      document.getElementById("emo2").style.border="white";
      document.getElementById("emo4").style.border="white";
      document.getElementById("emo5").style.border="white";
    }
    function highlight4() {
      var element = document.getElementById("emo4");
      element.style.border="solid 3px rgb(241, 173, 47)";
      document.getElementById("emo1").style.border="white";
      document.getElementById("emo3").style.border="white";
      document.getElementById("emo2").style.border="white";
      document.getElementById("emo5").style.border="white";
    }
    function highlight5() {
      var element = document.getElementById("emo5");
      element.style.border="solid 3px rgb(241, 173, 47)";
      document.getElementById("emo1").style.border="white";
      document.getElementById("emo3").style.border="white";
      document.getElementById("emo4").style.border="white";
      document.getElementById("emo2").style.border="white";
    }
    </script>



      <div style="margin: 20px; height:1000px;background-color:white;font-size:24px;color: black; display: block" class="margin">

        <!-- <form action="form_submit.php" method="POST"> -->
        <form action="/tutscorner/feedback.php" method="POST">
        <table>
            <tr>
                <!-- <td style="padding: 5px 5px"> <br>First name <span style="color: red">*</span></td> -->
                <!-- <td> <br><input type="text" class="form-control z-depth-1" id="exampleFormControlTextarea6" style="color: black; font-size: 15px;padding: 5px 5px" name="FirstName" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" autofocus required></td> -->
            </tr>
            <tr><td colspan="2" style="padding: 45px 0px 10px">How would you rate our teaching <span style="color: red">*</span></td></tr>
            <tr>
              <td colspan="2">
              <div class="line_img">
                <img class="rates" id="emo1" onclick="highlight1()" width="60px" height="60px" src="images/Grin.png">
                <img class="rates" id="emo2" onclick="highlight2()" width="60px" height="60px" src="images/Smiley.png">
                <img class="rates" id="emo3" onclick="highlight3()" width="60px" height="60px" src="images/Neutral.png">
                <img class="rates" id="emo4" onclick="highlight4()" width="60px" height="60px" src="images/Dissappointed.png">
                <img class="rates" id="emo5" onclick="highlight5()" width="60px" height="60px" src="images/Angry.png">

              </div>
            </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 20px 0px 15px"> Your reviews </td></tr>
            <tr>
                <td colspan="2"><textarea class="form-control z-depth-1" name='feedback' id="exampleFormControlTextarea6" rows="3" cols="40"style="color: black;font-size: 15px" placeholder="Enter your reviews here"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 18px 0px 15px;" >Any suggestions </td></tr>
            <tr>
                <td colspan="2"><textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" cols="40"style="color: black;font-size: 15px" placeholder="Enter your suggestions here"></textarea></td>
            </tr>
            <tr><td style="padding: 25px"  colspan="2">
                <!-- <button type="button" class="button" onclick=alert_thanks()>Send</button> -->
                <input type="submit" name='submit' value='submit' class="button">
              </td></tr>
        </table>
    </form>
  </div>
 <?php include("footer.php") ?>
