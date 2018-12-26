<?php include_once('config/core.php');?>
<div class="container-fluid">
    <header>
        <div class="row">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="<?php echo $home_url; ?>">Online Examination</a>
                <ul class="navbar-nav ml-auto">
                    <?php 
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                    ?>    
                        <li class="nav-item">
                            <a class="nav-link bgr-eee" href="<?php echo $home_url; ?>logout.php">
                                <i class="fas fa-sign-out-alt"></i><span> Logout</span>
                            </a>
                        </li>
                        <!-- <div class="user-menu">
                            <a href="" class="nav-link"></a>
                            <div class="user-content">
                                <a href="logout.php">
                                    <i class="fas fa-sign-out-alt"></i><span> Logout</span>
                                </a>
                            </div>
                        </div> -->
                    <?php    
                    }else{
                    ?>
                        <li class="nav-item bgr-eee">
                            <a class="nav-link" href="<?php echo $home_url; ?>login.php">
                                <i class="fas fa-sign-in-alt"></i><span> Login</span>
                            </a>
                        </li>
                        <li class="nav-item bgr-eee">
                            <a class="nav-link" href="<?php echo $home_url; ?>register.php">
                                <i class="fas fa-user-plus"></i><span> Sign Up</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>

