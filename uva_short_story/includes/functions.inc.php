<?php

function submitData($conn, $fname, $lname, $email, $title, $file_name, $file_content, $tos) {
    $sql = "INSERT INTO uva_short_story (f_name, l_name, email, title, file_name, file_content, tos) VALUES (?, ?, ?, ?, ?, ?, ?)"; # sql code that will run in the database. to secure the code, we will not enter the values until the statment is verified - for now we will add question marks
    $stmt = mysqli_stmt_init($conn); # initialize prepared statment
    if(!mysqli_stmt_prepare($stmt, $sql)) { # if prepared statement has an error
        header("location: ../submission.php?error=statementfailed"); # send user back to sign up page with an error message
        exit();
    }
    $terms = 'false';
    if($tos) {
        $terms = 'true';
    }

    mysqli_stmt_bind_param($stmt, "sssssss", $fname, $lname, $email, $title, $file_name, $file_content, $terms); # bind the (?, ?) to real values. the "ss" denotes that 2 strings are being binded
    mysqli_stmt_execute($stmt); # execute statment in database

    $id = mysqli_insert_id($conn);

    session_start(); # start session
    $_SESSION['id'] = $id;

    //header("location: ../submission.php?good=fileuploaded");
    header("location: ../form.php?good=fileuploaded");
    exit();
}

function getData($conn, $id) {
    $data_list = array(); # create array that holds all data from all rows

    $sql = "SELECT * FROM uva_short_story"; # sql function  that gets all data in row for all rows where id=?
    $stmt = mysqli_stmt_init($conn); # initialize prepared statment
    if(!mysqli_stmt_prepare($stmt, $sql)) { # if prepared statement has an error
        header("location: ../submission.php?error=statementfailed"); # send user back to sign up page with an error message
        exit();
    }
    mysqli_stmt_execute($stmt); # execute statment in database

    $result_data = mysqli_stmt_get_result($stmt); # get result data from the sql command

    while($row = mysqli_fetch_assoc($result_data)) { # while there is data in the database
        $data = array(); # create list for row data in the table
        array_push($data, $row['file_content']); # data[0] = name
        array_push($data, $row['file_name']); # data[1] = fruit
        array_push($data, $row['id']); # data[2] = fruit
        array_push($data, $row['title']); # data[3] = fruit
        array_push($data, $row['f_name']); # data[4] = fruit
        array_push($data, $row['l_name']); # data[5] = fruit
        array_push($data, $row['email']); # data[6] = fruit

        array_push($data_list, $data); # bind each row data array
    }
    return $data_list;
}

function endSession($conn) {
    # end session
    session_start();
    session_unset();
    session_destroy();

    header("location: ../submission.php");
    exit();
}