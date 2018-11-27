<!-- https://learn.getgrav.org/user/pages/05.admin-panel/09.faq/faq_2.png -->
<!-- http://ionicons.com/ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ExploreOTC Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" href="Styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
</head>
<body>
    <div style="width: 100vw">
        <div style="height: 100vh">
            <section class="side-nav">
                <div class="title-button">
                    ExploreOTC 
                </div>
                <div class="menu-functions">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">
                                <i class="ion-speedometer">&nbsp;&nbsp</i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="ion-clipboard">&nbsp;&nbsp</i>
                                Registration
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ion-filing">&nbsp;&nbsp</i>
                                QR Code 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ion-person-stalker">&nbsp;&nbsp</i>
                                Survey
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <nav class="main-nav navbar navbar-expand-sm">
                <div class="container">
                    <a class="navbar-brand" href="#"></a>
                    <div>
                        <a href="#"><i class="ion-gear-b"></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#"><i class="ion-log-out"></i></a>
                    </div>
                </div>
            </nav>
            <section class="main-content">
                <div class="content-title-bar">
                    <h4 class="content-title">Registration</h4>
                </div>
                <div class="content-path">
                    <i class="ion-speedometer">&nbsp;&nbsp</i>
                    <p class="path">Home > Registration</p>
                </div>
					<form action="">
						<div class="form-group"
							<div class="dropdown">
								<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">School Name  
								<span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li>All</li>
									<li>Ash Grove High School</li>
									<li>Bolivar High School</li>
									<li>Central High School</li>
									<li>Clever High School</li>
									<li>Dayspring Christian School</li>
									<li>Everton High School</li>
									<li>Fair Grove High School</li>
									<li>Fordland High School</li>
									<li>Glendale High School</li>
									<li>Gloria Deo Academy</li>
									<li>Hillcrest High School</li>
									<li>Kickapoo High School</li>
									<li>Logan-Rogersville High School</li>
									<li>Marion C. Early High School</li>
									<li>Marshfield High School</li>
									<li>Nixa High School</li>
									<li>Parkview High School</li>
									<li>Pleasant Hope High School</li>
									<li>Reeds Spring High School</li>
									<li>Republic High School</li>
									<li>Seymour High School</li>
									<li>Sparta High School</li>
									<li>Strafford High School</li>
									<li>Study Alternative Center</li>
									<li>Walnut Grove High School</li>
									<li>Willard High School</li>
								</ul>
							</div>
						<div class="form-group">
							<label for="firstName">First Name:</label>
							<input type="firstName" class="form-control" id="firstName">
						</div>
						<div class="form-group">
							<label for="lastName">Last Name:</label>
							<input type="lastName" class="form-control" id="lastName">
						</div>
						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" id="email">
						</div>
						<div class="form-group">
							<label for="phoneNumber">Phone Number:</label>
							<input type="phoneNumber" class="form-control" id="phoneNumber">
						</div>
						<div class="form-group">
							<div class="dropdown">
								<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Initial OTC Rating  
								<span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li>1</li>
									<li>2</li>
									<li>3</li>
									<li>4</li>
									<li>5</li>
								</ul>
							</div>
						</div>
						<button type="submit" class="btn btn-default">Filter</button>
					</form>
				</div>
                <a href="#">
                    <div class="card-footer">
						<p></p>
                        <i class="ion-arrow-right-b"></i>
                    </div>
                </a>
            </section>
        </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
