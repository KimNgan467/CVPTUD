<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Kết nối thành công";

//Đọc dữ liệu
$sql = "SELECT * FROM personal_info";
$result = $conn->query ($sql);

if ($result->num_rows >0){
    while ($row = $result->fetch_assoc()) {
        echo "Họ tên: " . $row["name"] . "- Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Không có dữ liệu";
}

//Đóng kết nối
$conn->close();
?>