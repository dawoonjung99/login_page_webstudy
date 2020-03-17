<?PHP
$conn = mysqli_connect("localhost","root","123456","loginservice");
$id = $_POST["id"];
$sql = "DELETE FROM members where nickname='{$id}'";
$result = mysqli_query($conn, $sql);
echo '계정탈퇴가 완료되었습니다.<a href="main.php">돌아가기</a>';
?>
