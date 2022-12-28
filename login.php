<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"]  == "POST"){
        //filter and sanitize
        $account = test_input($_POST["account"]);
        $password = test_input($_POST["pass"]);

        //compare account in database

        //if exist account --> create session
        $_SESSION["account"] = $account;
        
    }
    if(isset($_SESSION["account"])){
        if($account == "admin") header("location:admin.php");
        else header("location:user.php");
    }

    function test_input($data){
        $data = trim($data); //delete space, tab, /n
        $data = stripslashes($data); // delete \
        $data = htmlspecialchars($data); // chuyển các ký tự đặc biệt thành thực thể html
        return $data;
    }

?>
<!DOCTYPE html>
<head>

</head>
<body>
<!-- <form action="/user.php" method="post">  -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="account">Account: </label>
    <input type="text" id="account" name="account"></br></br>
    <label for="password">Password: </label>
    <input type="password" id="pass" name="pass"></br></br>
    <input type="submit" name="login" value="SUBMIT">
    <!-- <input type="submit" name="login as admin" formaction="/admin.php" value="SUBMIT AS ADMIN" method="POST"> -->
</form>
</body>