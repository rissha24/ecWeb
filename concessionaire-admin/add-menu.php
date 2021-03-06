<?php

	session_start();
	require_once('../resources/php/session-ca.php');

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
    <title>Menu</title>
    
    </head>
    
   <body>
   <header class="new-navbar">
        <a href="home.php">
            <img class = "new-navbar-logo" src= "../resources/images/ec-logo-white.png" alt="" height="60px" width="140px" >
        </a>
        <nav>
            <ul class="new-nav-area">
                <li><a href="home.php">Home</a></li>
                <li><a href="accounts.php">Accounts</a></li>
                <li><a href="transaction.php">Transactions</a></li>
                <li><a class="new-navbar-apage" href="menu.php">Menu</a></li>
            </ul>
        </nav>
        <a class ="new-navbar-btn-area" href="../resources/php/logout.php"><img src="../resources/images/logout.png" height="20px" width="20px" id="logout-icon">Log Out</a>
    </header>

    <div class="container">
             
              <h3 style = "text-align:center;">Add Menu</h3>
                <table class="table table-bordered table-responsive-md table-striped text-center" style ="margin-left: 10%; width: 80%;">
                <thead  class = "header" style = "background-color:#00364D; color: white;">
                  <tr>
                    <th class="text-center">Category</th>
                    <th class="text-center">Item</th>
                    <th class="text-center">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pt-3-half" contenteditable="true"></td>
                    <td class="pt-3-half" contenteditable="true"></td>
                    <td class="pt-3-half" contenteditable="true"></td>
                  </tr>
                </tbody>
              </table>
               <button type="submit" onclick="window.location.href='menu.php'"class="btn btn-success" id="save-new-menu-btn"><img src="../resources/images/save.png" height="20px" width="20px" id="save-icon">Save</button>
       </div>
    </body>
</html>