<div id="top_login">
<?php
    if(!$_SESSION['userid']){
?>

<div class="login-box">
    <a href="login_form.php">로그인</a>
    <a href="member_conditions.html">회원가입</a>
</div>

<?
    }
    else{
?>

<? $_SESSION['userid'] ?>

<a href="logout.php">로그아웃</a>
<a href="member_form_modify.php">정보수정</a>
<a href="member_delete.php">회원탈퇴</a>

<?
    }
?>

</div>