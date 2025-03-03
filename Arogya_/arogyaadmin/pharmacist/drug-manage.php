   
<?php
session_start();
include '../DB.php';
//echo 'r';
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
                include_once '../_tree_pharmacist.php';
                ?>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                <!-- top-bar -->
                <?php include_once '../_top_bar.php'; ?>
                <!--// top-bar -->

                <!-- main-heading -->
                <!--// main-heading -->
                <!-- Page Content -->
                <div class="blank-page-content">
                    <h4>  Manage Drugs </h4>
                    <hr>
                    <?php
                    if (isset($_POST['btnAdd'])) {
                        $sql = "INSERT INTO `hms_drug`
            (`drug_name`,
             `qty`,
             `unit`,
             `unit_price`,
             `date_expiry`)
VALUES ('" . $_POST['drug_name'] . "',
        '" . $_POST['qty'] . "',
        '" . $_POST['unit'] . "',
        '" . $_POST['unit_price'] . "',
        '" . $_POST['date_expiry'] . "');";

                        setData($sql, TRUE);
                    }


                    if (isset($_POST['btnUpdate'])) {
                        $sql = "UPDATE `hms_drug`
SET 
  `drug_name` = '" . $_POST['drug_name'] . "',
  `qty` = '" . $_POST['qty'] . "',
  `unit` = '" . $_POST['unit'] . "',
  `unit_price` = '" . $_POST['unit_price'] . "',
  `date_expiry` = '" . $_POST['date_expiry'] . "'
WHERE `id` = '" . $_POST['id'] . "';";

                        setData($sql, TRUE);
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-6">


<?php $arrUnit = array('l','ml','g','mg','kg','boxes','cards','bundles','bottles')?>


                            <?php
                            if (isset($_GET['id'])) {
                                //update part
                                ?>
                                <form class="form-horizontal" action="drug-manage.php" method="post">
                                    <span class="mando-msg">* fields are mandatory</span>
                                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
                                    <div class="form-group">
                                        <label for="text" class="control-label col-xs-4">Drug Name <span class="mando-msg">*</span></label> 
                                        <div class="col-xs-8">
                                            <input id="text1" name="drug_name" required="" type="text" value="<?= $_GET['drug_name'] ?>" /> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="text1" class="control-label col-xs-4">QTY<span class="mando-msg">*</span></label> 
                                        <div class="col-xs-8">
                                            <input id="text1" name="qty" type="number"  value="<?= $_GET['qty'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class="control-label col-xs-4"></label> 
                                        <div class="col-xs-8">
                                          
                                          <select id="select" name="unit" class="select form-control">
                                                <option value="">--select unit--</option>
                                                <?php 
                                                
                                                foreach ($arrUnit as $value) {
                                                    ?>  <option <?php if($value == $_GET['unit'] ){echo 'selected=""';}?> value="<?= $value?>"><?= $value?></option>
 <?php                           
                                                                                }?>
                                                
                                            </select>
                                          
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="text2" class="control-label col-xs-4">Unit Price<span class="mando-msg">*</span></label> 
                                        <div class="col-xs-8">
                                            <input id="text2" name="unit_price" type="number" required=""  value="<?= $_GET['unit_price'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="text3" class="control-label col-xs-4">Expiry Date<span class="mando-msg">*</span></label> 
                                        <div class="col-xs-8">
                                            <input id="text3" name="date_expiry" min="<?= $_SESSION['today']?>" type="date" required="" value="<?= $_GET['date_expiry'] ?>" class="form-control">
                                        </div>
                                    </div> 
                                    
                                    <div class="form-group row">
                                        <div class="col-xs-offset-4 col-xs-8">
                                            <button name="btnUpdate" type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            
                                <?php
                            } else {
                                //insert part   
                                ?>
                                <form class="form-horizontal" action="drug-manage.php" method="post">
                                    <span class="mando-msg">* fields are mandatory</span>
                                    <div class="form-group">
                                        <label for="text" class="control-label col-xs-4">Drug Name<span class="mando-msg">*</span></label> 
                                        <div class="col-xs-8">
                                            <input id="text" name="drug_name" required="" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="text1" class="control-label col-xs-4">QTY <span class="mando-msg">* </label> 
                                        <div class="col-xs-8">
                                            <input id="text1" name="qty" type="number" required="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class="control-label col-xs-4"></label> 
                                        <div class="col-xs-8">
                                             <select id="select" name="unit" class="select form-control">
                                                <option value="">--select unit--</option>
                                                <?php 
                                                
                                                foreach ($arrUnit as $value) {
                                                    ?>  <option value="<?= $value?>"><?= $value?></option>
 <?php                           
                                                                                }?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="text2" class="control-label col-xs-4">Unit Price<span class="mando-msg">*</span></label> 
                                        <div class="col-xs-8">
                                            <input id="text2" name="unit_price" type="number" required="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="text3" class="control-label col-xs-4">Expiry Date<span class="mando-msg">*</span></label> 
                                        <div class="col-xs-8">
                                            <input id="text3" name="date_expiry" min="<?= $_SESSION['today']?>" type="date" required="" value="<?= $_GET['date_expiry'] ?>" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-xs-offset-4 col-xs-8">
                                            <button name="btnAdd" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>

                        </div>
                        <div class="col-md-6">
                           
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

</html>