<!--
Design: IT17049146  H.A.D.A. Perera
Function Administrator
-->

<?php
session_start();
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
                    
                  
                    
                    <?php
                        if (isset($_POST['btnDocReg'])) {
                            $sql = "INSERT INTO hms_doctor
            (`first_name`,`last_name`,`nic`,`pword`,`email`,`telephone`,`degree`,`specialist_id`,
             `doc_fee`,`slmc_no`,`status_code`,`category`,`created_user`)
VALUES ('" . $_POST['first_name'] . "',
        '" . $_POST['last_name'] . "',
        '" . $_POST['nic'] . "',
        PASSWORD('" . $_POST['nic'] . "'),
        '" . $_POST['email'] . "',
        '" . $_POST['telephone'] . "',
        '" . $_POST['degree'] . "',
        '" . $_POST['specialist_id'] . "',
        '" . $_POST['doc_fee'] . "',
        '" . $_POST['slmc_no'] . "',
        'ACTIVE',
        '" . $_POST['opd'] . "',
        '" . $_SESSION['userbean']['id'] . "');";
//                            echo $sql;
                            setData($sql, TRUE);
                        }
                        
                        ?>
                    
                    
                    <div class="row">

                        
                          

                        <div class="col-md-8">
                            <div class="panel panel-primary">
                                 <div class="panel-heading ">Doctor Registration</div>
                                <div class="panel-body">
                                       <form class="form-horizontal"  action="<?php $_SERVER['SERVER_NAME'] ?>/<?= $_SESSION['sitename'] ?>/admin/doctor-registration.php" method="post" >
                                <span class="mando-msg">* fields are mandatory</span>
                                <div class="form-group">
                                    <label for="first_name" class="control-label col-xs-4">First Name <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input required="" id="first_name"  name="first_name" value="MRS.RUVINI" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="control-label col-xs-4">Last Name <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input required="" id="last_name" name="last_name" value="ABEYGUNARATNE" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nic" class="control-label col-xs-4">NIC <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input required="" id="nic" name="nic" value="824800160V" type="text" class="form-control">
                                        Default password will be same as the NIC address
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nic" class="control-label col-xs-4"></label> 
                                    <div class="col-xs-4">
                                        <span class="mando-msg">*</span><input id="email" name="email"  required="" value="ruvini_abey@gmail.com" type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-xs-3">
                                        <span class="mando-msg">*</span> <input id="telephone" required="" name="telephone" value="011 2260932" type="text" class="form-control" placeholder="Telephone">
                                    </div>
                                    <div class="col-xs-1">
                                        <input type="checkbox" name="opd" value="OPD"> OPD
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="degree" class="control-label col-xs-4">Degree <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input  required="" id="degree" name="degree" value="MBBS, MD, PHD" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="specialist_id" class="control-label col-xs-4">Specialist</label> 
                                    <div class="col-xs-8">
                                        <select id="specialist_id"  name="specialist_id" class="select form-control">
                                            <option value="0">--select--</option>
                                            <?php
                                            $sql = "SELECT * FROM hms_specialist";
                                            $data = getData($sql);
                                            foreach ($data as $value) {
                                                ?> 
                                                <option value="<?php echo $value['id'] ?>"><?php echo $value['specialist'] ?></option> <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slmc_no" class="control-label col-xs-4">SLMCS No <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="slmc_no" required="" name="slmc_no" value="04581" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="doc_fee" class="control-label col-xs-4">Doctor Fee <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="doc_fee" name="doc_fee" required="" type="number" value="3000" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-xs-offset-4 col-xs-8">
                                        <button name="btnDocReg" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                                </div>
                            </div>
                         

                        </div>
                       
                    </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="panel panel-warning">
                        <div class="panel-heading ">Doctor List</div>
                        <div class="panel-body">
                            <table id="example" class="display table-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>NIC</th>
                                <th>User Role</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Date Created</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = " SELECT * FROM hms_doctor ";
                            $resultx = getData($sql);
                            if ($resultx != FALSE) {
                                while ($row = mysqli_fetch_assoc($resultx)) {
                                    ?>
                                    <tr>
                                        <td><?= $row['first_name'] ?></td>
                                        <td><?= $row['last_name'] ?></td>
                                        <td><?= $row['nic'] ?></td>
                                        <td><?= $row['user_role'] ?></td>
                                        <td><?= $row['telephone'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['status_code'] ?></td>
                                        <td><?= $row['created_date'] ?></td>
                                        <td></td>
                                        <!--<td><a class="btn btn-success btn-sm" href="<?php //$_SERVER['SERVER_NAME'] ?>/<?php // $_SESSION['sitename'] ?>/admin/doctor-registration-update.php?id=<?php //  $row['id'] ?>">update</a></td>-->
                                    </tr>

                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                        </div>
                    </div>
                    


                </div>

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


        <link href="../css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        
        
        
    </body>
    
    

</html>