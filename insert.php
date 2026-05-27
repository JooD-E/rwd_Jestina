<?php
session_start();
?>
<meta charset="utf-8">

<?php
    $id=$_POST['userId'];
    $pass=$_POST['userPw'];
    $name = $_POST['userName'];
    $addr=$_POST['userAddr'];
    $hp=$_POST['userHp'];
    $email=$_POST['userEmail'];

    include "dbconn.php";

    mysqli_query($connect, 'set names utf8');

    $sql = "select * from jestina where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $exist_id =mysqli_num_rows($result);

    if($exist_id){
        echo("
            <script>
                window.alert('이미 존재하는 아이디입니다.');
                history.go(-1)
            </script>
        ");
        exit
    }else{
        $sql = "insert into jestina(userId, userPw,
                userAddr, userHp, userEmail)";
        $sql .="values('$id','$pass','$name', '$hp', '$email')";
        mysqli_query($connect, $sql);
    }
    mysqli_close($connect);
    echo "
        <script>
        location.href = 'rwd_jds.html';
        </script>
    ";
?>
