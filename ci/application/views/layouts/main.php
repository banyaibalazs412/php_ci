<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>
            <?php 
                if(isset($title))
                {                
                    echo $title;                    
                }
                else
                {
                    echo 'Movie Page';
                }
            ?>
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/style.css">
        <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!--Navbar-->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url();?>">Movie Rating Page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>movies/show">Movies</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>users/show">Users</a>
                    </li>
                    <li class="nav-item dropdown">                                
                </ul>
            </div>
        </div>
        </nav>
        <!--Navbar END-->
        <div class="wrap_div h-100">
        <?php 
            $this->load->view($main);
        ?>
        </div>
    </body>
</html>