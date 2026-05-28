<?php
session_start();

if(!isset($_SESSION['userid'])) {
    echo "
    <script>
        alert('잘못된 접근입니다.');
        history.go(-1);
    </script>
    ";
    exit;
}

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action === 'delete') {
    
    include "dbconn.php";
    mysqli_query($connect, 'set names utf8');

    $sql = "delete from jestina where id='$_SESSION[userid]'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);

    unset($_SESSION['userid']);
    session_destroy();

    echo("
        <script>
            alert('[탈퇴성공] 정상적으로 회원에서 탈퇴하셨습니다.');
            location.href = 'rwd_jds.html';
        </script>
    ");
    exit;
    }
    echo "
    <script>
        
        if (confirm('정말로 탈퇴하시겠습니까?\\n삭제된 정보는 복구할 수 없습니다.')) {
            location.href = 'member_delete.php?action=delete';
        } else {
            history.go(-1);
        }
    </script>
    ";
?>