<!--
Design: IT17049146  H.A.D.A. Perera
Function Administrator
-->
<?php session_start();
 include '../DB.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arogya</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="keywords" content="" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/style4.css">
        <link href="../css/fontawesome-all.css" rel="stylesheet">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Appointments');
        data.addRows([
          ['January', 2100],
          ['February', 1250],
          ['March', 1025],
          ['April', 1960],
          ['May', 750],
           ['June', 845],
            ['July', 920],
             ['August', 835],
              ['September', 748],
               ['October', 1400],
                ['November', 1320],
                 ['December', 2455]
        ]);

        var piechart_options = {title:'Patients Appointments Report 2017',
                       width:550,
                       height:400};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Patients Appointments Report 2017',
                       width:600,
                       height:400,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);
      }
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Month', 'Doctor Salary ', 'Employee Salary', 'Hospital Cost', 'Vehicle Cost', 'Medicine Cost', 'Average'],
         ['2017/01',  1680000,      1350000,         560000,           25000,           650000,      853000],
         ['2017/02',  1000000,      1200000,        520000,             22000,          600000,      668400],
         ['2017/03',  820000,      990650,        525000,             14000,           520000,      573000],
         ['2017/04',  1568000,      1480000,        690000,             28000,           925000,      938200],
         ['2017/05',  600000,      850000,         465000,             12000,          750000,      550000],
         ['2017/06',  676000,      900000,         495000,             11500,           525000,      521500],
         ['2017/07',  736000,      1205500,        510000,             16000,          360000,      575500],
         ['2017/08',  668000,      850000,        540000,             14500,           450000,      504500],
         ['2017/09',  598000,      800000,        565000,             13000,           425000,      480500],
         ['2017/10',  1120000,      1250000,      580000,             19000,          650000,      723800],
         ['2017/11',  1056000,      1680000,        650000,             22000,           700000,      821000],
         ['2017/12',  1964000,      2250000,         680000,            30500,          825000,      1149500]
      ]);

    var options = {
      title : 'Monthly Hospital Cost - 2017',
      vAxis: {title: 'Cost R.s.'},
      hAxis: {title: 'Month'},
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };
    
    

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
    </script>
    
    <style>
body {
  
  font-weight: 100;
  height: 100%;
  width: 100%;
  background: 
    /* top, transparent red, faked with gradient */ 
    linear-gradient( 
      rgba(200, 247, 197, 0.4),
      rgba(129, 207, 224, 0.8)
    ),
    linear-gradient( 
      rgba(130, 130, 130, 0.5),
      rgba(130, 130, 115, 0.6)
    ),
    
    radial-gradient(ellipse closest-side at center, rgba(255, 255, 255, 0.9) 50%, rgba(0, 0, 0, 0.4) 100%),
    /* bottom, image */
    url(http://www.thisisstar.com/images/100UI/002/black_marble.jpg) no-repeat center center;
  background-size: cover;
  background-attachment: fixed;
  background-blend-mode: multiply,normal,normal,normal;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    </head>

    <body>
        <div class="wrapper">

            <nav id="sidebar">
                <div class="sidebar-header">
                    <h1>
                        <a href="#">Arogya</a>
                    </h1>
                    <span>M</span>
                </div>
                <div class="profile-bg"></div>

                <?php
                include_once '../_tree_admin.php';
                ?>
            </nav>
            
            <div id="content">
 
                <?php include_once '../_top_bar.php'; ?>

                
                
                
                <div class="blank-page-content">
                    
                    
                    <!-- pie-chart -->
    <script src='js/amcharts.js'></script>
    <script>
        var chart;
        var legend;

        var chartData = [{
                country: "Lithuania",
                value: 260
            },
            {
                country: "Ireland",
                value: 201
            },
            {
                country: "Germany",
                value: 65
            },
            {
                country: "Australia",
                value: 39
            },
            {
                country: "UK",
                value: 19
            },
            {
                country: "Latvia",
                value: 10
            }
        ];

        AmCharts.ready(function () {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 20;
            chart.angle = 30;

            // WRITE
            chart.write("chartdiv");
        });
    </script>
    <!--// pie-chart -->
                    
                    
      <table class="columns">
      <tr>
          <td><div id="piechart_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>
        
      </tr>
      <table>
          <br>
      </table>
      
       </table>
                    
                    <table>
                        <tr>
                            <td>
                                <div id="chart_div" style="width: 950px; height: 500px;"></div>
                            </td>
                        </tr>
                    </table>
                    
                    <br>
                    <br>
                    
                     </div>
                        <div class="col-md-4">
                            <div class="col-xs-offset-4 col-xs-8">
                                        <button onClick="window.print()" type="submit" class="btn btn-primary">Print Report</button>
                                    </div>
                        </div>
                    <br>
                   
                <?php include '../_footer.php'; ?>
            </div>
            </div>
        <script src='../js/jquery-2.2.3.min.js'></script>
     
        <script>
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>
     
        <script src="../js/bootstrap.min.js"></script>

    </body>

</html>