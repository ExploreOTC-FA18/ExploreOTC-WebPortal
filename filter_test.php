<?php
    include('DB/conn.php');

    function get_input_data($field_name) {
        if (isset($_GET[$field_name]) && !empty($_GET[$field_name])) {
            echo $_GET[$field_name] == 'on' ? 'checked' : $_GET[$field_name];
        } else {
            echo '';
        }
    }

    function has_key($key) {
        return (isset($_GET[$key]) && !empty($_GET[$key]));
    }

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <form action="filter_test.php" method="get">
        <div class="form-group">
            <label for="UserEmail">Email</label>
            <input type="email" id="UserEmail" class="form-text" placeholder="Email..." name="UserEmail" value="<?php get_input_data('UserEmail'); ?>">
        </div>

        <select name="Program" id="Program" class="form-control">
            <option value="">All Departments</option>
            <?php
                $options = [
                    "ABR" => "Auto Collision Repair", "AGR" => "Agriculture",
                    "AUM" => "Automotive Technology", "AVI" => "Aviation",
                    "CIS" => "Computer Information Science", "CST" => "Construction Technology",
                    "CUL" => "Culinary Arts", "DDT" => "Drafting and Design Technology",
                    "DSL" => "Diesel Technology", "ECD" => "Early Childhood Development",
                    "EDS" => "Electrical Trades Technology", "ELC" => "Electricity",
                    "EMP" => "Electronic Media Production", "FST" => "Fire Science Technology",
                    "GDT" => "Graphics Design Technology", "HRA" => "Heating, Refrigeration, and Air Conditioning",
                    "HSC" => "Health Sciences", "HSM" => "Hospitatlity Management",
                    "IST" => "Industrial Systems Technology", "MFG" => "Manufacturing Technology",
                    "MTT" => "Machine Tool Technology", "NET" => "Networking Technology",
                    "WLD" => "Welding Technology"
                ];

                foreach($options as $key => $value) {
                    echo '<option value="'.$key.'"'
                        .(isset($_GET['Program']) && !empty($_GET['Program']) && $_GET['Program'] == $key ? 'selected' : '')
                        .'>'.$value.'</option>';
                }
             ?>
        </select>

        <div class="form-group">
            <input type="checkbox" class="form-check-input" id="Call" name="Call" <?php get_input_data('Call'); ?>>
            <label for="Call" class="form-check-label">Call</label>
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-check-input" id="Email" name="Email" <?php get_input_data('Email'); ?>>
            <label for="Email" class="form-check-label">Email</label>
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-check-input" id="Shadow" name="Shadow" <?php get_input_data('Shadow'); ?>>
            <label for="Shadow" class="form-check-label">Shadow</label>
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-check-input" id="Tour" name="Tour" <?php get_input_data('Tour'); ?>>
            <label for="Tour" class="form-check-label">Tour</label>
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-check-input" id="Visit" name="Visit" <?php get_input_data('Visit'); ?>>
            <label for="Visit" class="form-check-label">Visit</label>
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    <div class="mt-5">
        <?php
            $rows = filter_search("SELECT UserEmail, Program, Call, Email, Shadow, Tour, Visit FROM QR_Scan_Results");
            if (count($rows) !== 0) {
                echo "<br>";
                foreach($rows as $row) {
                    echo $row['UserEmail']."<br>";
                }
            }
        ?>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
