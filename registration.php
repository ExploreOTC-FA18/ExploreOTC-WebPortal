<?php
    include('Validation/validate_session.php');
    include('DB/conn.php');
    include('Helpers/FilterPage.php');
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
        <div style="height: 100vh" id="height">
            <section class="side-nav">
                <div class="title-button">
                    ExploreOTC
                </div>
                <div class="menu-functions">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">
                                <ion-item>
                                    <ion-icon class="icon" name="speedometer">&nbsp;&nbsp</ion-icon>
                                    <span class="icon-text">Dashboard</span>
                                </ion-item>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="registration.php">
                                <ion-item>
                                    <ion-icon class="icon" name="person">&nbsp;&nbsp</ion-icon>
                                    <span class="icon-text">Registration</span>
                                </ion-item>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <ion-item>
                                    <ion-icon class="icon" name="qr-scanner">&nbsp;&nbsp</ion-icon>
                                    <span class="icon-text">QR Code</span>
                                </ion-item>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
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
                    <button class="filter-btn" data-toggle="collapse" data-target="#filter">
                        <ion-item>
                            <ion-icon class="icon" name="funnel"></ion-icon>
                            <span class="ion-text">&nbsp;&nbspFilter</span>
                        </ion-item>
                    </button>
                    <div>
                        <a href="index.php">
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
                        <h4 class="content-title">Registration</h4>
                    </div>
                    <div class="content-path d-inline-block">
                        <span class="path">Home > Registration</span>
                    </div>
                </div>

                <div class="collapse" id="filter">
					<form action="registration.php" method="get">
                        <div class="d-block">
    						<div class="form-group d-inline-block">
								<label for="schoolDrop">School</label>
								<select class="form-control" id="schoolDrop" name="School">
									<option value="">Any</option>
                                    <?php
                                        $options = ['Ash Grove', 'Bolivar', 'Central', 'Clever', 'Dayspring Christian',
                                                    'Everton', 'Fair Grove', 'Fordland', 'Glendale', 'Gloria Deo',
                                                    'Hillcrest', 'Kickapoo', 'Logan-Rogersville', 'Marion C. Early',
                                                    'Marshfield', 'Nixa', 'Parkview', 'Pleasant Hope', 'Reeds Spring',
                                                    'Republic', 'Seymour', 'Sparta', 'Strafford', 'Study Alternative Center',
                                                    'Walnut Grove', 'Willard'];

                                        foreach($options as $key => $option) {
                                            echo "<option "
                                            .(isset($_GET['School']) && !empty($_GET['School']) && $_GET['School'] == $option ? 'selected' : '')
                                            .">".$option."</option>";
                                        }
                                     ?>
								</select>
                            </div>
                            <div class="form-group d-inline-block">
								<label for="ratingDrop">Rating</label>
								<select class="form-control" id="ratingDrop" name="Perception">
                                    <option value="">Any</option>
                                    <?php
                                        $options = [0.5, 1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5];
                                        foreach($options as $option) {
                                            echo "<option "
                                            .(isset($_GET['Perception']) && !empty($_GET['Perception']) && $_GET['Perception'] == (string)$option ? 'selected' : '')
                                            .">".$option."</option>";
                                        }
                                    ?>
								</select>
    						</div>
                        </div>
                        <div class="d-block">
    						<div class="form-group d-inline-block">
    							<label for="firstName">First Name:</label>
    							<input type="firstName" class="form-control" id="firstName" name="FirstName" value="<?php get_input_data('FirstName'); ?>">
    						</div>
    						<div class="form-group d-inline-block">
    							<label for="lastName">Last Name:</label>
    							<input type="lastName" class="form-control" id="lastName" name="LastName" value="<?php get_input_data('LastName'); ?>">
    						</div>
    						<div class="form-group d-inline-block">
    							<label for="email">Email address:</label>
    							<input type="email" class="form-control" id="email" name="UserEmail" value="<?php get_input_data('UserEmail'); ?>">
    						</div>
    						<div class="form-group d-inline-block">
    							<label for="phoneNumber">Phone Number:</label>
    							<input type="phoneNumber" class="form-control" id="phoneNumber" name="PhoneNo" value="<?php get_input_data('PhoneNo'); ?>">
    						</div>
                        </div>
						<button type="submit" class="btn btn-success">Filter</button>
                    </form>
				</div>

                <div class="scroll mt-4">
                    <?php
                        create_table("SELECT FirstName, LastName, UserEmail, PhoneNo, School, Perception FROM Registration",
                                    ["FirstName", "LastName", "UserEmail", "PhoneNo", "School", "Perception"]);
                    ?>
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
