<?php
include("connection.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];

    $sql = "SELECT id FROM účty WHERE meno = '$myusername' and heslo = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        $_SESSION['login_user'] = $myusername;
        header("location: administracia.php");
    }else {
        $error = "Vaše meno alebo heslo niesú správne";
    }
}
?>
<html>

<head>
    <title>Skupina2 prihlásenie</title>
</head>

<body bgcolor="#FFFFFF">

    <div align="center">
        <div style="width:300px; border: solid 1px #333333; " align="left">
            <div style="background-color:#333333; color:#FFFFFF; padding:3px;">
                <b>Prihlásenie</b>
            </div>

            <div style="margin:30px">

                <form action="" method="post">
                    <label>Meno  :</label>
                    <input type="text" name="username" class="box" />
                    <br />
                    <br />
                    <label>Heslo  :</label>
                    <input type="password" name="password" class="box" />
                    <br />
                    <br />
                    <input type="submit" />
                    <br />
                </form>

                <div style="font-size:11px; color:#cc0000; margin-top:10px">
                    <?php if(isset($error))echo $error; ?>
                </div>

            </div>
        </div>

    </div>
    <h3><center><a href="index.php">Späť na hlavnú stránku</a></center></h3>
</body>
</html>