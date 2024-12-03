<?php

if(isset($_POST['form_submit'])) { # if submit button with name="form_submit" is pressed

    # get $_POST variables from form on index.php
    $fname = $_POST['fname']; # each of the $_POST variables refer to the "name" of the input element
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $file_name = $_FILES['pdf']['name'];
    $file_content = file_get_contents($_FILES['pdf']['tmp_name']);
    $tos = $_POST['ToS'];

    require "connection.inc.php"; # get access to the database through connection.inc.php
    require "functions.inc.php"; # get access to the functions through functions.inc.php

    submitData($conn, $fname, $lname, $email, $title, $file_name, $file_content, $tos);

} else if(isset($_POST['delete_user_submit'])) {

    require "connection.inc.php"; # get access to the database through connection.inc.php
    require "functions.inc.php"; # get access to the functions through functions.inc.php

    endSession($conn);

} else {
    header("location: ../sumbission.php");
    exit();
}


# simple_form_submit