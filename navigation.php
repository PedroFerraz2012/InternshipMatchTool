<body>
      <div class="jumbotron">
            <div class="container text-center">
              <div class="col-sm-2 "></div>

                <div class="col-sm-6 text-center">
                    <h2 class="headingTxt">AIT Internship Match Tool</h2>
                </div>

                <div class="col-sm-4 text-right headerTxt">
                  <h4 class="h4txt"> Powered by <b>Pineapple</b> Solutions ©
                    <img class="img14" src="./images/Pineapple_Solutions_logo.svg" alt="PineapleSolutiosLogo">
                  </h4>
                </div>
              </div>
            </div>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid text-center">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="Home.php">
                        <img class="img13" src="./images/AIT_logo.svg" alt="aitlogo">
                    </a>
                </div>

                <div class="collapse navbar-collapse " id="myNavbar">
                  <div class="col-sm-10 text-center">

                        <ul class="nav navbar-nav">


                            <li class="li12">
                                <a class="ac" href="Companies.php" style="color:white;">
                                    <div class="svgfilter">
                                        <svg class="svgpos" width="50" height="50">
                                            <?php echo file_get_contents("./images/university-solid.svg"); ?>
                                        </svg>
                                    </div>
                                    <div class="page-link-text">Companies</div>
                                </a>
                            </li>



                            <li class="li12">
                                <a style="color:white;" href="Students.php">
                                    <div class="svgfilter">
                                        <svg class="svgpos" width="50" height="50">
                                            <?php echo file_get_contents("./images/user-graduate-solid.svg"); ?>
                                        </svg>
                                    </div>
                                    <div class="page-link-text">Students</div>
                                </a>
                            </li>

                            <li class="li12">
                                <a style="color:white;" href="Enrollments.php">
                                    <div class="svgfilter">
                                        <svg class="svgpos" width="50" height="50">
                                            <?php echo file_get_contents("./images/hat-wizard-solid.svg"); ?>
                                        </svg>
                                    </div>
                                    <div class="page-link-text">Teck Stack/Assets</div>
                                </a>
                            </li>

                            <li class="li12">
                                <a href="StudentMatch.php" style="color:white;">
                                    <div class="svgfilter">
                                        <svg class="svgpos" width="50" height="50">
                                            <?php echo file_get_contents("./images/match_tool.svg"); ?>
                                        </svg>
                                    </div>
                                    <div class="page-link-text">Match Tool</div>
                                </a>
                            </li>

                            <li class="li12">
                                <a href="Emails.php" style="color:white;">
                                    <div class="svgfilter">
                                        <svg class="svgpos" width="50" height="50">
                                            <path class="sv12" />
                                            <?php echo file_get_contents("./images/comment-dots-solid.svg"); ?>
                                        </svg>
                                    </div>
                                    <div class="page-link-text">Communication</div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>