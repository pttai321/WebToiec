<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Kết nối đến cơ sở dữ liệu
require_once '..\Database\connectDBtructiep.php';
$sql="Select * from questions";
$result= mysqli_query($conn,$sql);
// Kiểm tra kết quả truy vấn và in ra câu hỏi
        $row = mysqli_fetch_assoc($result);
        $id = $row["ID_q"];
        $question = $row["question_text"];
        echo "<p>Question ID: $id</p>";
        echo "<p>$question</p>";
?>

</body>
</html>