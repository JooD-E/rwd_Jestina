<?
    session_start();
?>

<meta charset="utf-8">

<?php
    $userid=$_POST['userId'];
    $pass = $_POST['userPw'];
    $name = $_POST['userName'];
    $hp = $_POST['userHp'];
    $addr = $_POST['userAddr'];
    $email = $_POST['userEmail'];

    include "dbconn.php";
    mysqli_query($connect, 'set names utf8');

    $sql = "update jestina set pass='$pass', name='$name', hp='$hp', addr='$addr', email='$email' where id='$_SESSION[userid]'";

    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);

    echo "
        <script>
            location.href = 'rwd_jds_login.php';
        </script>
        ";
?>