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
            <!-- Sidebar Holder -->
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
                    <h4>Purchasing Items Request</h4>
                    <hr>

                    <?php
                    if (isset($_POST['btnAdd'])) {
                        $sql = "INSERT INTO `hms_purchase`
            (`purchasing_item`,
             `qty`,
             `created_user`)
VALUES ('" . $_POST['purchasing_item'] . "',
        '" . $_POST['qty'] . "',
        '" . $_SESSION['userbean']['id'] . "');";
                      //  echo $sql;
                        setData($sql, TRUE);
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-4">
                            
                           
                            
                            <form class="form-horizontal" action="purchasing-item-request.php" method="post">
                                <span class="mando-msg">* fields are mandatory</span>
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">Item Name<span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="purchasing_item" required="" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Qty" class="control-label col-xs-4">Qty <span class="mando-msg">*</span></label> 
                                    <div class="col-xs-8">
                                        <input id="Qty" name="qty" type="number" required="" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-xs-offset-4 col-xs-8">
                                        <button name="btnAdd" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                           
                        </div>
                        
                          
                            <div class="panel panel-warning">
                                <h3>My Purchase Request</h3>
                        <div class="panel-heading ">Item List</div>
                        <div class="panel-body">

                           <table id="example" class="display table-responsive" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Qty</th>
                                        <th>Status</th>
                                        <th>Comment</th>
                                        <th>Amount</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM hms_purchase WHERE created_user ='" . $_SESSION['userbean']['id'] . "'";
                                    $data = getData($sql);
                                    if ($data != null) {
                                        foreach ($data as $value) {
                                            ?>
                                            <tr>
                                                <td><?= $value['purchasing_item']?></td>
                                                <td><?= $value['qty']?></td>
                                                <td><?= $value['status_code']?></td>
                                                <td><?=$value['comment']?></td>
                                                <td><?= $value['amount']?></td>
                                                <td><?=$value['created_date']?></td>
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

                <!--// Page Content -->

                <!-- Copyright -->
                <?php include '../_footer.php'; ?>
                <!--// Copyright -->
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