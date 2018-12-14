<?php

    function create_table($sql, $columns)
    {
        $rows = filter_search($sql);

        echo "<table class='table table-hover'>";
        echo "<thead>";
        echo "<tr>";
        foreach($columns as $column) {
            echo "<th scope='col'>".$column."</th>";
        }
        echo "</tr>";
        echo "</thead>";

        echo "<tbody>";
        if (count($rows) !== 0) {
            foreach($rows as $row) {
                echo "<tr>";
                foreach($columns as $column) {
                    echo "<td>".$row[$column]."</td>";
                }
                echo "</tr>";
            }
        }
        else {
            echo "<tr>";
            echo "<td colspan='".count($columns)."'>No matches based on filter</td>";
            echo "</tr>";
        }
        echo "</tbody>";

        echo "</table>";

        return $rows;
    }

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

    function create_drop_down($options, $getKey, $useKey=False)
    {
        foreach($options as $key => $option) {
            $getKeyCheck = (string)$option;
            if ($useKey)
                $getKeyCheck = $key;

            echo "<option ".($useKey ? 'value="'.$key.'" ' : '')
            .(isset($_GET[$getKey]) && !empty($_GET[$getKey]) && $_GET[$getKey] == $getKeyCheck ? 'selected' : '')
            .">".$option."</option>";
        }
    }

    function create_yes_no($getKey)
    {
        echo "<option value=''".((isset($_GET[$getKey]) && !empty($_GET[$getKey]) && $_GET[$getKey] == '') ? ' selected' : '').">Any</option>";
        echo "<option value='1'".((isset($_GET[$getKey]) && !empty($_GET[$getKey]) && $_GET[$getKey] == '1') ? ' selected' : '').">Yes</option>";
        echo "<option value='0'".(($_GET[$getKey] == '0') ? ' selected' : '').">No</option>";
    }

    function create_csv_tag($rows, $columnName)
    {
        $emails = '';
        if (count($rows) !== 0){
            foreach($rows as $row) {
                //Check to see if the email will validate
                $row[$columnName] = str_replace(' ', '', $row[$columnName]);
                if (filter_var($row[$columnName], FILTER_VALIDATE_EMAIL)) {
                    //If it does validate we will add it to the string
                    $emails .= $row[$columnName].', ';
                }
            }
            //Now remove the last comma from the string
            $emails = substr($emails, 0, -2);
        }

        echo '<div id="csv-emails" hidden>'.$emails.'</div>';
    }

 ?>
