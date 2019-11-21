<?php
  if(!isset($_SESSION)) 
    {
        session_start();
    }

  $name = $_SESSION['name']??"guest";

  if(isset($_POST['logout'])){
   unset($_SESSION['name']);
   echo 'success';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="styles/quiz.css">
<link rel="stylesheet" href="styles/Feedback.css">
<link rel="stylesheet" href="styles/theory2.css">
<link rel="stylesheet" href="styles/about.css">
<link rel="stylesheet" href="styles/login.css">
<link rel="stylesheet" href="styles/styles.css">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=5l7xq1wUqNoJsySOCZAxKxXu0-Annr8ag05neHN4lAnL4aMT7-EJnt1wls9P8zDLSODibcvmxeVTi9aj9InSonGObPuIjZX0rw3hRzDW3a44JZ_bbv_OXYKZS7aZadqFqap5WPZVcFWRPNUow5EirmYL_xF5ledxHAAb7dkXT1pE0pET5_2uQvX4r4B2FOeSAQ4xH9vUw9sx1jDdUhfTHY3xtTNKpQydwNHycccK72bUL-BvztlXU5tQNUeZhONtjpqaim4eBG5RwZOnaDl6sjAyvXhG2UXgVFarNcX55GHOPLSb2RCTdnsD-4ZtbSJ3n7MINdXmyaBl2SR7LGV0tcwO_T7LW33C3RQCwGtXC3qLZ39zI_lhzi80-TxQ7qmm_V4x4HA-RIlsvw0OUKw8n7478-DY7pDc_LeuNRRJnXBsEfaGYQALIXUD3bHL5ybLzz2jGduXr2LjQpAtr8kLyqJ7Qqa7HjT45s9CGIZtaMmy5xVXYY7lv6zVFNKwlhZeigA9x7nsHKQU2YXkzfxvSfGMFzTGZzRwT4QEq4rv6y7yC5qT71-iPsCEiSzJhsM4QjQceWEiREqWAyEZggLHgSGE4dmaMG_Z4etd0zkN3nsfi3BxhW1aqChv8d19o3DaE2hb0JT8fIrPI8PI_uiU13ZeSUBwJl29DOcII9UghfEHmUMCAnFlwU9sdxlW5A5v2bEpgJTfSsKgNKbxfi5MiaqR6vOQ1-EdfnEr6n8ftQV8dAQidx_QxK8jNAMf5Z2PExxgPvgpBRKxSC4Aj7Of3gikrXeAX-PB1f93XILX7inW7O5N1QLsDS00roYZwN0jYQroTRGhMmnUQ9BlixrZUeZx0k0ukUZBLGKhZcSLcJtQY5fsVAXfbaw8xJ9vsI6AtRMc7km8jgV4gAe6bd9QaUptil5x0LhMevfUTmuJCDZpc8krmVtRbpv_mQd3AIT7FTSpoME2VRIbvi7ppbPETt97bmJxcGqUY0T2HlqV9qNxsZzO97ZrCYb2YdN4B9XBtUzig-AzlHZ9hAvNxDwITuRSOJQIKk9nVWugx8MqPUckBb9AUGULNpvbEGgduEerFtPDD64HylrzB7P2ZoD3JIKwfp1sl8cQYKwL6vy0jNWy2icrlo44VZ3BCzjam8w2JcFPX8cFyYXpsjup990jLMeQ-4xfAdCVq8n3DgRSxoumUjqx9pPpiY-MU7F_mQNQbE9sifPEjwiqeT7rTEf2_A" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://ff.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9tYWlsLWF0dGFjaG1lbnQuZ29vZ2xldXNlcmNvbnRlbnQuY29tL2F0dGFjaG1lbnQvdS8wP3VpPTImaWs9ZTg2OTVjMDYxNCZhdHRpZD0wLjQmcGVybW1zZ2lkPW1zZy1mOjE2NTAwMTc1OTg3NDIzODk4NzQmdGg9MTZlNjBhNDM4ZTJlZTQ3MiZ2aWV3PWF0dCZkaXNwPXNhZmUmcmVhbGF0dGlkPWZfazJ3NGY2aXE0JnNhZGRiYXQ9QU5HamRKLXNXM0IzWTFLS1BiU0VpMHUwLXI2SnVzZVM4NmNXYzJTdE9hNE5ZaVZ1WEtqdHhBT1paRm1jZkhkYkRvT3pkWmpfNG9mYVllalMtU2pGVkhBbDZEZXhxaDliUkNlTlZYWlhsWDlCZFZ3UjJJemRSMEFidTlGNVA1V3hsU3hIcElfYXJNTTVsZV8wRFlGRFlWaDcwZUdxVEUyUmU1cnhPUlRjb3JMbnlGbTNRckpaUHpWV2ctSjFFTWlyLTRiZWUwaXFRazNIbDhUcV82b1plVWZSQW9FZEdRdllSamxqYjZKUjJVTlpIdHpzSkFuUnotaXJaWDlpUjFackdmb0NXTjZYcWlHck9vOUNjbjUtR3EzVGFXRGJYWThVRTkxQ0I0djN0bnRjZEp1ZGxvS3hwQ1RNY1ZId2UxdGVQUm1OLXNoMXBnZ3cyTEE2clVZa3lmRTRjX2czUFJBa1pReUhjR0U4NFFaNmstYXdOSzNxVFFIaVBkaFFHM2RfRm9UZDlrbjNaSW9KUHlxdDZackRlamN4RGgwS1FfMS1IYk8zR1RldjFpdFdsZFc2RE04R21MQ25HanF4VjZYOEdGQTl5STZ4SmhMVDFsR2lMRHplVHF5M0dZaFFFQzFyazVJdzJsTWpXSzFVYTRPa1NjR1REaVB4cHR0MW5HTHV4UWxVQTQxME1XWkZ1T0tiLXpEVFljbUVXemJCU2VReVpEQkEydWIySk5vSzVpUndkRG9CMWg3SEIxSEZ5d0U3QjNIeFFxSUZIZGZib3MxdzhGMFJUOFBrQlppancyTVMxakg3MDByOUdMa1M0ZGZmLUZsWlA2Vjk3dWE0MEMwUHQxNUdVc2wxR0h0VDBiRElwUFdSeVY4LVlOeEJzSWhYS1plOVJCRUlCUUZfdHNkamRqSFgydm1EREs0aTFVRQ"/><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style media="screen">
  .card .details h2 span {
    color: #fff;
}
.card, .card:hover{
  background-color: #0f3c3d;
}
</style>


</head>
<body>


    <div id="navbar" class="navbar" style="margin-bottom:0px;">
      <a id='navbarNavAltMarkup' href="index.php">Home</a>
      <a href="Scoreboard.php">Scoreboard</a>
      <a href="feedback.php">Feedback</a>
      <a href="datapreproc.php">Data Processing</a>
      <a href="regression.php">Regression</a>
      <a href="classification.php">Classification</a>
      <a href="clustering.php">Clustering</a>

      <a href="#" id='welcomeperson' class="right">Hey <?php echo $name; ?>!</a>
      <?php if(isset($_SESSION['name'])){echo '<a id="logoutbutton" href="" class="right">Logout</a>';} ?>
      <!-- <a href="" class="right">Logout</a> -->
      <?php if(!isset($_SESSION['name'])){
      echo '<a href="login.php" class="right nologin">Login</a>';} ?>
      '<a href="aboutPage.php" class="right">About</a>'
    </div>

    <div class="header"  style="background-image:url('images/education.jpg');">
      <div class="slideanim">
        <h1>TutsCorner</h1>
        <h3>Just the right place to get started for Machine Learning!</h3>
      </div>
    </div>

<script type="text/javascript">
  $('#logoutbutton').on('click',function(e){
    e.preventDefault();
    $.ajax({
      type:"POST",
      url:'/tutscorner/index.php',
      data:{logout:'logout'},
      success: function(data){
        console.log('Logout successful');
        $('#welcomeperson').hide();
        $('.nologin').show();
        $('#logoutbutton').hide();
        window.location.href = "/tutscorner/";

      }
    });

  });
</script>
