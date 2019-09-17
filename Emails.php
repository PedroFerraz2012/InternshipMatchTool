<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Internship Match Tool</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="AIT_icon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="Styles.css">
        


       
        <!--FullCalendar css-->
        <link href='Calendar/css/core/main.min.css' rel='stylesheet' />
        <link href='Calendar/css/daygrid/main.min.css' rel='stylesheet' />
        <!-- css bootstrap for modal-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- my css: custom.css -->
        <link rel="stylesheet" href="Calendar/css/custom.css">
        <!--FullCalendar js-->
        <script src='Calendar/js/core/main.min.js'></script>
        <script src='Calendar/js/interaction/main.min.js'></script>
        <script src='Calendar/js/daygrid/main.min.js'></script>
        <script src='Calendar/js/core/locales/en-au.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        
        <!-- js bootstrap for modal-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="Calendar/js/custom.js"></script>
    </head>

    <?php include('navigation.php'); ?>

        <div class="container-fluid text-center">
            <div class="row content">
                <div class="col-sm-2 sidenav">
                    <a class="text">
                        <div class="well1">
                            <p class="t2">Communication</p>
                        </div>
                    </a>

                </div>
                <div class="col-sm-10 text-left content">
                    <?php include('Calendar/index.php'); ?>
                </div>

            </div>
        </div>

        <footer class="container-fluid text-center">
            <p>By Pedro Ferraz 6008 and Jayme Schmid 6290</p>
        </footer>

    </body>

</html>