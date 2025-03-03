<?php
session_start();
include './DB.php';
if (!isset($_SESSION['userbean'])) {
    header("Location:index.php");
}

$_SESSION['menu_flag'] = 'home';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Arogya</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="arogya" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/numscroller-1.0.js"></script>

        <!-- //js -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- fonts -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->

        <!--start-date-piker-->
        <script src="js/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker,#datepicker1").datepicker();
            });
        </script>
        <!--/End-date-piker-->
        <script src="js/responsiveslides.min.js"></script>
        <!--animate-->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->



       <!--calander-->
  <link href='css/fullcalendar.min.css' rel='stylesheet' />
        <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <script src='lib/moment.min.js'></script>
        <script src='lib/jquery.min.js'></script>
        <script src='js/fullcalendar.min.js'></script>

        <?php
        $sql = "SELECT id,appointment_date,status_code FROM hms_doctor_appointment
 WHERE patient_id = '" . $_SESSION['userbean']['id'] . "' ";
        $data = getData($sql);
        ?>

        <script>
            $(document).ready(function () {

                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,basicWeek,basicDay'
                    },
                    defaultDate: '<?= $_SESSION['today'] ?>',
                    navLinks: true, // can      click day/week names to navigate views
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: [
<?php
if ($data != null)
    foreach ($data as $value) {
        ?>
                                {
                                    id: 999,
                                    title: '[<?= $value['id']; ?>] <?= $value['status_code']; ?>',
                                    start: '<?= $value['appointment_date']; ?>'
                                },<?php } ?>
                    ]
                });

            });

        </script>
        <!--calander-->



    </head>
    <body>
        <!-- //header -->
        <?php
        if (isset($_SESSION['userbean'])) {
            include './_header_top.php';
            include './_header.php';
        } else {
            include './_top_pre_login.php';
            include './_header_pre_login.php';
        }
        ?>
        <!-- content -->
        <div class="content" style="min-height: 450px">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <table border="0" style="width: 100%">
                            <thead>
                                <tr style="text-align: center">
                                    <th style="text-align: center"><a href="doctor-search.php?flag=finddoctor">
                                            <i class="fas fa-user-md fa-5x  tile-icon"></i> 
                                        </a>
                                    </th>
                                    <th style="text-align: center"><a href="opd-appointment-list.php">
                                            <i class="fas  fa-calendar-alt fa-5x  tile-icon"></i>
                                        </a></th>
                                    <th style="text-align: center"> <a href="my-appointment.php?flag=myappointment">
                                            <i class="far fa-calendar-alt fa-5x  tile-icon"></i>
                                        </a> </th>
                                    <th style="text-align: center"> <a href="lab-test.php?flag=labtest">
                                            <i class="fas fa-vials  fa-5x  tile-icon"></i>
                                        </a></th>
                                    <th style="text-align: center"> <a href="feedback.php?flag=feedback">
                                            <i class="fas fa-comments  fa-5x  tile-icon"></i>
                                        </a></th>
                                    <th style="text-align: center"> <a href="report-appointment.php">
                                            <i class="fas fa-file-alt fa-5x  tile-icon"></i>
                                     <th style="text-align: center"> <a href="charts.php">
                                              <i class="fas fa-chart-line fa-5x  tile-icon"></i>
                                        </a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="text-align: center">
                                    <td >Search Doctor</td>
                                    <td>OPD Appointments</td>
                                    <td>Clinic Appointment</td>
                                    <td>Lab Test</td>
                                    <td>Feedback</td>
                                    <td>Reports</td>
                                    <td>Chart</td>
                                    
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

<br>

 <div id='calendar'></div>
<!--                        calender print here-->


                    </div>
                    <div class="col-md-1">
                    </div>
                </div>




                <div class="clearfix"></div>
            </div>
        </div>



        <!-- //conte nt -->

        <!-- contact -->
        <?php include './_footer.php'; ?>
        <!-- //contact -->
        <!-- login -->
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <div class="modal-body modal-spa">
                        <div class="login-grids">

                            <div class="login-right">
                                <h3>Sign in with your account</h3>
                                <form action="#" method="post">
                                    <div class="sign-in">
                                        <h4>Email :</h4>
                                        <input type="text" name="Type here" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Type here';
                                                }" required="">	
                                    </div>
                                    <div class="sign-in">
                                        <h4>Password :</h4>
                                        <input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Password';
                                                }" required="">
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="single-bottom">
                                        <input type="checkbox"  id="brand" value="">
                                        <label for="brand"><span></span>Remember Me.</label>
                                    </div>
                                    <div class="sign-in">
                                        <input type="submit" value="SIGNIN" >
                                    </div>
                                </form>
                            </div>

                            <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login -->
        <!-- login -->
        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <div class="modal-body modal-spa">
                        <div class="login-grids">
                            <div class="login-bottom">
                                <h3>Sign up for free</h3>
                                <form action="#" method="post">
                                    <div class="sign-up">
                                        <h4>Email :</h4>
                                        <input type="text" name="Type here" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Type here';
                                                }" required="">	
                                    </div>
                                    <div class="sign-up">
                                        <h4>Password :</h4>
                                        <input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Password';
                                                }" required="">

                                    </div>
                                    <div class="sign-up">
                                        <h4>Re-type Password :</h4>
                                        <input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Password';
                                                }" required="">

                                    </div>
                                    <div class="sign-up">
                                        <input type="submit" value="REGISTER NOW" >
                                    </div>

                                </form>
                            </div>
                            <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>

