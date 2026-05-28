<?php
// session_start();
?>
<meta charset="utf-8">

<?php
    // $id=$_POST['userId'];
    // $pass=$_POST['userPw'];
    // $name = $_POST['userName'];
    // $addr=$_POST['userAddr'];
    // $hp=$_POST['userHp'];
    // $email=$_POST['userEmail'];

    // include "dbconn.php";

    // mysqli_query($connect, 'set names utf8');

    // $sql = "select * from jestina where id = '$id'";
    // $result = mysqli_query($connect, $sql);
    // $exist_id =mysqli_num_rows($result);

    // if($exist_id){
    //     echo("
    //         <script>
    //             window.alert('이미 존재하는 아이디입니다.');
    //             history.go(-1)
    //         </script>
    //     ");
    //     exit;
    // }else{
    //     $sql = "insert into jestina(id, userPw, userName, userAddr, userHp, userEmail) ";
    //     $sql .= "values('$id', '$pass', '$name', '$addr', '$hp', '$email')";
    //     mysqli_query($connect, $sql);
    // }
    // mysqli_close($connect);
    // echo "
    //     <script>
    //     location.href = 'rwd_jds.html';
    //     </script>
    // ";
?>


<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
</head>
<body>

<?php
    $id = $_POST['userId'];
    $pass = $_POST['userPw'];
    $name = $_POST['userName'];
    $addr = $_POST['userAddr'];
    $hp = $_POST['userHp'];
    $email = $_POST['userEmail'];

    include "dbconn.php";
    mysqli_query($connect, 'set names utf8');

    $sql = "select * from jestina where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $exist_id = mysqli_num_rows($result);

    if($exist_id){
        echo("
            <script>
                window.alert('이미 존재하는 아이디입니다.');
                history.go(-1);
            </script>
        ");
        exit;
    } else {
        $sql = "insert into jestina(id, pass, name, addr, hp, email) ";
        $sql .= "values('$id', '$pass', '$name', '$addr', '$hp', '$email')";
        
        $insert_result = mysqli_query($connect, $sql);
        
        if(!$insert_result) {
            echo "<div style='color:red; font-weight:bold; padding:20px; border:2px solid red;'>";
            echo "<h3>❌ DB 저장 실패! 에러 내용:</h3>";
            echo mysqli_error($connect);
            echo "<br><br>" . $sql;
            echo "</div>";
            exit;
        }
    }
    
    mysqli_close($connect);
    
    echo "
        <script>
            window.alert('회원가입이 완료되었습니다!');
            location.href = 'rwd_jds.html';
        </script>
    ";
?>

</body>
</html>