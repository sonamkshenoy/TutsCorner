<?php include("header.php");

  include("config/db_connect.php");

  $sql = "SELECT name, quiz1score, quiz2score FROM allentries ORDER BY quiz1score+quiz2score DESC";
  // Dont make syntax errors in sql query, e.g. adding extra comma, double quotes etc.
  $result = mysqli_query($conn,$sql);
  $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($conn);
  // print_r($students);
  $rank=1;

?>

    <div class="container">
      <div class="row">
        <div class="col--md--6">
          <div id="chartContainer" style="margin: 30px;float:left; height: 350px; width: 350px;"></div>
        </div>
        <div class="col--md--6">
          <div id="table" style="margin: 70px 30px 0px 280px; float: right">
              <table class="roundedTable" style="align-items: center;">
                <tr>
                  <th> Rank </th>
                  <th> Name </th>
                  <th> Score </th>
                </tr>
                <?php foreach ($students as $student) { ?>
                  <tr>
                    <td><?php echo $rank ?>.</td>
                    <td> <?php echo $student['name']; ?> </td>
                    <td> <?php echo $student['quiz1score']+$student['quiz2score']; ?> </td>
                  </tr>
                <?php $rank=$rank+1; } ?>
                </table>
              </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>

    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>





    <script>
        window.onload = function ()
        {

        var options =
        {
            animationEnabled: true,
            title: {
              text: "Top Scores"
            },
            axisY: {
              title: "Marks",
              includeZero: false
            },
            data: [{
              type: "column",
              yValueFormatString: "#,##0.0#"%"",
              dataPoints:
              [
                { label: "Ashley", y: 9 },
                { label: "Flynn", y: 17 },
                { label: "<?php echo $students[0]['name'];  ?>", y: <?php echo $students[0]['quiz1score']+$students[0]['quiz2score']; ?> },
                { label: "Walker", y: 12 },
                { label: "Justin", y: 3 }

              ]
            }]
        };
        $("#chartContainer").CanvasJSChart(options);

        }
        </script>

      <script>

      <?php include("footer.php") ?>
