<?php
$conn = mysqli_connect("localhost","root","123456","loginservice");
$id = $_POST["id"];
$pw = $_POST["pw"];
$tpw = $_POST["tpw"];
$sql = "INSERT INTO members (nickname, pw) VALUES('$id','$pw')";
$query="SELECT nickname FROM members WHERE nickname='{$id}'";
$result = mysqli_query($conn, $query);
if($result->num_rows == 1){
  echo '이미 존재하는 아이디입니다. <a href="signup.php">돌아가기</a>';
}else{
  if($pw != $tpw){
    echo '비밀번호가 일치하지 않습니다. <a href="signup.php">돌아가기</a>';
  }else{
   mysqli_query($conn, $sql);
   echo '가입이 완료되었습니다';
?>
<?php
   require('after.php');
 }
}?>
