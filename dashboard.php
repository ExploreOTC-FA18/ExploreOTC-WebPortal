<?php
    include('Validation/validate_session.php');
    include('DB/conn.php');

    //Let's get some of the data that will be displayed on the screen.
    $registrationCount = get_row_num('Registration');
    $qrScansCount = get_row_num('QR_Scan_Results');
    $surveysCount = get_row_num('SurveyResults');
 ?>

<!-- https://learn.getgrav.org/user/pages/05.admin-panel/09.faq/faq_2.png -->
<!-- http://ionicons.com/ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ExploreOTC Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
</head>
<body>
    <div style="width: 100vw">
        <div style="height: 100vh">
            <section class="side-nav" id="sideNav">
                <div class="title-button">
                    ExploreOTC
                </div>
                <div class="menu-functions">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.php">
                                <ion-item>
                                    <ion-icon class="icon" name="speedometer">&nbsp;&nbsp</ion-icon>
                                    <span class="icon-text">Dashboard</span>
                                </ion-item>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registration.php">
                                <ion-item>
                                    <ion-icon class="icon" name="person">&nbsp;&nbsp</ion-icon>
                                    <span class="icon-text">Registration</span>
                                </ion-item>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="qr_scans.php">
                                <ion-item>
                                    <ion-icon class="icon" name="qr-scanner">&nbsp;&nbsp</ion-icon>
                                    <span class="icon-text">QR Code</span>
                                </ion-item>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="survey.php">
                                <ion-item>
                                    <ion-icon class="icon" name="clipboard">&nbsp;&nbsp</ion-icon>
                                    <span class="icon-text">Survey</span>
                                </ion-item>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <nav class="main-nav navbar navbar-expand-sm" id="mainNav">
                <div class="container">
                    <a class="navbar-brand" href="#"></a>
                    <div>
                        <a href="index.php" class="float-right">
                            <ion-item>
                                <ion-icon class="icon" name="log-out"></ion-icon>
                                <span class="icon-text">Log Out</span>
                            </ion-item>
                        </a>
                    </div>
                </div>
            </nav>
            <section class="main-content" id="mainContent">
                <div class="d-block">
                    <div class="content-title-bar d-inline-block">
                        <h4 class="content-title">Dashboard</h4>
                    </div>
                    <div class="content-path d-inline-block">
                        <p class="path">Home > Dashboard</p>
                    </div>
                </div>
                <div class="card-deck mt-4">
                    <div class="card card-blue">
                        <div class="card-body">
                            <div class="card-body-body">
                                <br><h4 class="card-title"><?php echo $registrationCount; ?></h4>
                            </div>
                            <div class="card-body-icon">
                                <ion-icon name="person"></ion-icon>
                            </div>
                        </div>
                        <a href="registration.php">
                            <div class="card-footer">
                                <p>Students Registered</p>
                                <ion-icon name="arrow-dropright" class="card-footer-icon" size="large"></ion-icon>
                            </div>
                        </a>
                    </div>
                    <div class="card card-orange">
                        <div class="card-body">
                            <div class="card-body-body">
                                <br><h4 class="card-title"><?php echo $qrScansCount; ?></h4>
                            </div>
                            <div class="card-body-icon">
                                <ion-icon name="qr-scanner"></ion-icon>
                            </div>
                        </div>
                        <a href="qr_scans.php">
                            <div class="card-footer">
                                <p>QR Scans</p>
                                <ion-icon name="arrow-dropright" class="card-footer-icon" size="large"></ion-icon>
                            </div>
                        </a>
                    </div>
                    <div class="card card-red">
                        <div class="card-body">
                            <div class="card-body-body">
								<br><h4 class="card-title"><?php echo $surveysCount; ?></h4>
                            </div>
                            <div class="card-body-icon">
                                <ion-icon name="clipboard"></ion-icon>
                            </div>
                        </div>
                        <a href="survey.php">
                            <div class="card-footer">
                                <p>Surveys Completed</p>
                                <ion-icon name="arrow-dropright" class="card-footer-icon" size="large"></ion-icon>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.4.7/dist/ionicons.js"></script>
    <script src="JS/MainContentResize.js"></script>
</body>
</html>
