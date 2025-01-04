<div class="header wow zoomIn">
    <div class="container">
        <div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
            <ul>
                                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+94 (0)51 2343 239</li>
				<li><a href="rmic.arogya@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>rmic.arogya@gmail.com</a></li>
            </ul>
        </div>
        <div class="header_right">
            <div class="login">
                <ul>
                    <li><a href="profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?= $_SESSION['userbean']['first_name']?> <?= $_SESSION['userbean']['last_name']?></a></li>
                    <li><a href="logout.php" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Logout</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>