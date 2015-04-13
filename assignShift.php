<?php
/**
 * Created by PhpStorm.
 * User: shanky
 * Date: 4/12/15
 * Time: 17:01
 */
?>

<?php

    define('DB_NAME', 'OnCampusResourceManagement');
    define('DB_USER', 'root');
    define('DB_PASSWORD','8oMqGZaNZB');
    define('DB_HOST', 'localhost');



        #Connect to Database
        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

        #Check connection
        if (mysqli_connect_errno()) {
            echo 'Database connection error: ' . mysqli_connect_error();
            exit();
        }

        #Query the database to get the user details.
        $result = mysqli_query($con, "SELECT * FROM assignShift");

        #If no data was returned, check for any SQL errors
        if (!$result) {
            echo 'Could not run query: ' . mysqli_error($con);
            exit;
        }

/*
        while( $row = mysqli_fetch_array($result) ){

            echo json_encode($row['employee_id']);
        }
*/
/*
        #Get the first row of the results
        $row = mysqli_fetch_row($result);

        #Build the result array (Assign keys to the values)
        $result_data = array(
            'employee_id' => $row[0],
            'employee_name' => $row[1],
            'shift_date' => $row[2],
            'start_time' => $row[3],
            'end_time' => $row[4],
        );

        #Output the JSON data
        echo json_encode($result_data);
*/
        while($obj = mysqli_fetch_object($result)) {
            $var[] = $obj;
        }

        echo json_encode($var);

?>