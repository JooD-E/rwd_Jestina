<?
           session_start();
?>
<meta charset="utf-8">
<?
 

   include "dbconn.php";
   mysqli_query($connect,'set names utf8');  

 $id=$_POST['userId'];
 $hp=$_POST['userHp'];
  
    
 $sql ="select * from jestina where id='$id'  AND hp='$hp'";

 $result = mysqli_query( $connect,$sql);
$num_match = mysqli_fetch_array($result);

if(!empty($num_match)){
  echo "<script>alert('회원님의 비밀번호는 $num_match[pass]입니다. 로그인해주세요*^^*'); location.href='rwd_jds_login.php';</script>";
 }

 else{
  echo $hp."<script>
              alert('비밀번호 찾기 실패!');
              location.href='pw_screen.php';
           </script>";
 }
   mysqli_close($connect);

?>