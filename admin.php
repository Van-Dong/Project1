<?php
    session_start();
    if(!isset($_SESSION['account']) || $_SESSION['account'] != "admin"){
        header('location:login.php');
    }

?>
<a href = "logout.php">
    <button type="submit" name="logout">Logout</button>
</a>
<h1> Day la trang ADMIN </h1>