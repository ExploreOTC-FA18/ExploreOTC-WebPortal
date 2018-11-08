<?php
    session_start();
    session_destroy();

    //TODO
    //Include the session validation incase a user is trying to just enter
    //  without logging in. This will need to go into every php page
    //include "Validation/validate_session.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Styles/db_portal.css" type="text/css">
    <script src="login.js" charset="utf-8"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="login">
        <div class="center">
            <h3>Login</h3>
            <form action="Validation/login_validation.php" method="post">
                <?php if (array_key_exists("login", $_GET) && $_GET["login"] == "false"): ?>
                    <p style="color:red;">Username or password is invalid</p>
                <?php endif; ?>
                <div class="form-group">
                    <label for="inputUserName">Username:</label>
                    <input type="text" class="form-control" id="inputUserName" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password:</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" onclick="SubmitClicked">Submit</button>
            </form>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
