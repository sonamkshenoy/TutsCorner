<?php include("header.php") ?>

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
                <tr>
                  <td>1.</td>
                  <td> Jenson </td>
                  <td> 20 </td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Flynn</td>
                  <td> 17</td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td> Walker</td>
                  <td> 12</td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Ashley</td>
                  <td>9</td>
                </tr>
                <tr>
                  <td>5.</td>
                  <td>Justin</td>
                  <td>3</td>
                </tr>
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
                { label: "Jenson", y: 20 },
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
