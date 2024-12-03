<?php

# @author: Ryan Levy
# @version: February 25, 2023
# @title: uva_short_story

session_start();

if(isset($_SESSION['id'])) {
    header("location: form.php");
    exit();
} else {
    header("location: form.php"); # send user to form page
    exit();
}