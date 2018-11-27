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

 ?>
