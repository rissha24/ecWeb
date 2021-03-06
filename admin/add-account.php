<?php

	session_start();
	require_once('../resources/php/session-admin.php');

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- additional chuchu -->
    <link rel="shortcut icon" type="image" href="../resources/images/ec-logo-only.png" />
    <link rel="stylesheet" href="../resources/css/main.css">
    <title>Add Account</title>
    
    </head>
    
   <body>
    <header class="new-navbar">
        <a href="home.php">
            <img class = "new-navbar-logo" src= "../resources/images/ec-logo-white.png" alt="" height="60px" width="140px" >
        </a>
        <a class ="new-navbar-btn-area" href="../resources/php/logout.php"><img src="../resources/images/logout.png" height="20px" width="20px" id="logout-icon">Log Out</a>
    </header>
    <div class="container">
        <div class = "manage-div">
            <span id="span-accounts">Add Accounts</span>
        </div>
        <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
            <tr>
                <th class="text-center">Accounts</th>
                <th class="text-center">Manager</th>
                <th class="text-center">Username</th>
                <th class="text-center">Email Address</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="pt-3-half" contenteditable="true"></td>
                <td class="pt-3-half" contenteditable="true"></td>
                <td class="pt-3-half" >20205</td>
                <td class="pt-3-half" contenteditable="true"></td>
                <td class="pt-3-half" contenteditable="true" id="admin-active-status"></td>
            </tr>
        </tbody>
        </table>
        <div class = "buttons-save-back">
         <button type="submit" onclick="window.location.href='home.php'"class="btn btn-success" id="save-new-acc"><img src="../resources/images/save.png" height="20px" width="20px" id="save-icon">Save</button>
         <button type="submit" onclick="window.location.href='home.php'"class="btn btn-success" id="back-new-acc">Back</button>
        </div>
    </div>
   </body>