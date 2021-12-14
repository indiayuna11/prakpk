<?php

error_reporting(0);
session_start();
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user =='sindi'AND $pass == '12345') {
        session_start();
        $_SESSION['berhasil']= true;
        header("Location: index.php");
    } else {
        $salah="<p style='color:red;'>username dan password salah</p>";
    } 
}
if (isset($_SESSION['berhasil'])){
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>form login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="formlogin">
            <div class="foto"><img src=""><h1>silahkan login</h1></div>
            <?php echo $salah; ?>
            <form action="" method="post">
                <input type="text" placeholder="username" name="username"><br>
                <br>
                <input type="text" placeholder="password" name="password"><br>
                <br>
                <button type="submit" name="login">SUBMIT</button>
                <br>
            </form>
            <br>
            <div class="lupa">
                <a href="#"><span>lupa password ?</span></a>
                <a href="#"><span>belum punya akun ?</span></a>
            </div>
        </div>
    </div>
</body>
</html>
