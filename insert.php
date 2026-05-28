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

    // 1. 아이디 중복 체크할 때 형님 DB 컬럼명이 'id'인지 'userId'인지 꼭 확인해야 합니다!
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
        // 2. 가입 처리 쿼리
        // ★ 만약 에러가 난다면 여기 괄호 안에 적힌 이름들이 DB 테이블 컬럼명과 달라서 그렇습니다.
        $sql = "insert into jestina(id, pass, name, addr, hp, email) ";
        $sql .= "values('$id', '$pass', '$name', '$addr', '$hp', '$email')";
        
        // [★ 핵심 치트키] 쿼리가 실패하면 왜 실패했는지 에러 메시지를 화면에 박아버립니다.
        $insert_result = mysqli_query($connect, $sql);
        
        if(!$insert_result) {
            echo "<div style='color:red; font-weight:bold; padding:20px; border:2px solid red;'>";
            echo "<h3>❌ DB 저장 실패! 에러 내용:</h3>";
            echo mysqli_error($connect); // SQL 에러 메시지 출력
            echo "<br><br><b>형님이 작성하신 SQL문:</b> " . $sql;
            echo "</div>";
            exit; // 에러가 났으므로 메인으로 넘어가지 않고 멈춥니다.
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