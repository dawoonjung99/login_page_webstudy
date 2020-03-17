<?php
$conn = mysqli_connect("localhost","root","123456","loginservice");
$id = $_POST["id"];
$pw = $_POST["pw"];
$query="SELECT nickname, pw FROM members WHERE nickname='{$id}' AND pw = '{$pw}'";

$result = mysqli_query($conn, $query);
if ($result->num_rows == 1) { //아이디 있다면
   echo "로그인 되셨습니다.";
   require_once('after.php');
}else{ //아이디 없다면
    echo '로그인에 실패하셨습니다. <a href="main.php">돌아가기</a>';
}
?>
