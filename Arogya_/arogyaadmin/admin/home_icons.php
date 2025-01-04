<!--
Design: IT17049146  H.A.D.A. Perera
Function Administrator
-->
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

<hr>
<h2 style="text-align: left">Administrator</h2>
<hr>
        <table border="0" style="width: 100%;padding: 5px">
            <tbody>
                <tr style="text-align: center">
                    <td>
                        <a href="<?php $_SERVER['SERVER_NAME'] ?>/<?= $_SESSION['sitename'] ?>/admin/user-registration.php">
                            <i class="fas fa-users  fa-5x  tile-icon"></i>
                        </a>
                    </td>
           
                    <td>
                        
                        <a href="<?php $_SERVER['SERVER_NAME'] ?>/<?= $_SESSION['sitename'] ?>/admin/doctor-registration.php">
                            <i class="fas fa-user-md fa-5x  tile-icon"></i>
                        </a>
                    </td>
                    <td>
                        <a href="<?php $_SERVER['SERVER_NAME'] ?>/<?= $_SESSION['sitename'] ?>/admin/patient-registration.php">
                            <i class="fas fa-user fa-5x  tile-icon"></i>
                        </a>
                    </td>
                    
                   
                </tr>
            <br>
                <tr style="text-align: center">
                    <td>User Registration</td>
                    <td>Doctor Registration</td>
                    <td>Patient Registration</td>
                   
                </tr>
            </tbody>
        </table>

<br>
<br>
<br>


<table border="0" style="width: 100%;padding: 5px">
            <tbody>
                <tr style="text-align: center">
                    <td>
                        <a href="<?php $_SERVER['SERVER_NAME'] ?>/<?= $_SESSION['sitename'] ?>/admin/purchasing-item-request.php">
                            <i class="fas fa-tags fa-4x  tile-icon"></i>
                        </a>
                    </td>
                    
                    <td>
                        <a href="<?php $_SERVER['SERVER_NAME'] ?>/<?= $_SESSION['sitename'] ?>/admin/report-patient-registration.php">
                            <i class="fas fa-file-alt fa-4x  tile-icon"></i>
                        </a>
                    </td>
                    
                    <td>
                        <a href="<?php $_SERVER['SERVER_NAME'] ?>/<?= $_SESSION['sitename'] ?>/admin/report-progress.php">
                        <i class="fas fa-poll fa-5x  tile-icon"></i>
                        </a>
                    </td>
                    
                    
            
                <tr style="text-align: center">
                    
                    <td>Item Purchase</td>
                    <td>Reports</td>
                    <td>Past Reports</td>
                </tr>
            </tbody>
        </table>
    
    

