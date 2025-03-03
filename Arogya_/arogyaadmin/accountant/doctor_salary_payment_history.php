<?php

session_start();
include '../DB.php';

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Arogya</title>
        <!-- Meta Tags -->
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
        <!-- //Meta Tags -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Style-sheets -->
        <!-- Bootstrap Css -->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Bootstrap Css -->
        <!-- Common Css -->
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!--// Common Css -->
        <!-- Nav Css -->
        <link rel="stylesheet" href="../css/style4.css">
        <!--// Nav Css -->
        <!-- Fontawesome Css -->
        <link href="../css/fontawesome-all.css" rel="stylesheet">
        <!--// Fontawesome Css -->
        <!--// Style-sheets -->


    </head>
	
<!-------- Start Body -------->	

    <body>
	
<!------- Sidebar Holder ------->
	
        <div class="wrapper">				<!------- Sidebar Holder ------->
            <nav id="sidebar">				<!------- start nav ------->
                <div class="sidebar-header">		<!------- Sidebar Header ------->
				
                    <h1>
                        <a href="#">Arogya</a>		<!------- Sidebar Name ------->
                    </h1>
					
                    <span>M</span>			<!------- Sidebar Span  ------->
					
                </div>
				
                <div class="profile-bg"></div>
				
<!------- include tree_accountant ------->
				
                <?php
				
                include_once '../_tree_accountant.php';
				
                ?>
				
            </nav>

<!----- Include top bar ------>

            <div id="content">
         
                <?php 
				
				include_once '../_top_bar.php';
				
				?>
             


<!-------------------------------------------------------------  Start Page Content  -------------------------------------------------------->
			 
                <div class="blank-page-content">
				
                    <h3>Doctor Salary payment history</h3>     <!---- Header of the page ---->
					
                    <hr>
					
<!----- Create table ----->	
	
                    <table border="1" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Month</th>
                                <th>Salary</th>
                                <th>DateTime</th>
                            </tr>
                        </thead>
						
	<!----- table Body ----->		
	
                        <tbody>



                            <?php
                            $sql = "SELECT hms_doctor_salary.*,CONCAT(hms_doctor.first_name,' ',hms_doctor.last_name) AS doc_name FROM hms_doctor_salary 
INNER JOIN hms_doctor
ON hms_doctor_salary.doctor_id = hms_doctor.id
";
                            
                            $data = getData($sql);
                            if ($data != null) {
                                foreach ($data as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value['salary_month']?></td>
                                        <td><?= $value['salary_amount']?></td>
                                        <td><?= $value['doc_name']?></td>
                                        <td><?= $value['created_date']?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
							
                        </tbody>
						
	<!----- close table Body ----->		
	
                    </table>
					
<!----- End table ----->

                </div>

<!------------------------------------------------------------- End Page Content  -------------------------------------------------------->               



<!-- Copyright Footer -->

                <?php include '../_footer.php'; ?>
				
<!--// Copyright Footer -->

            </div>
        </div>


<!-- Required common Js -->

        <script src='../js/jquery-2.2.3.min.js'></script>
		
<!-- //Required common Js -->


<!-- Sidebar-nav Js -->


        <script>
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
		
		
<!--// Sidebar-nav Js -->



<!-- dropdown nav -->


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
		

<!-- //dropdown nav -->




<!-- Js for bootstrap working-->


        <script src="../js/bootstrap.min.js"></script>
		
		
<!-- //Js for bootstrap working -->




        <link href="../css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
		
		
    </body>
	
	
<!-------- End Body -------->


</html>