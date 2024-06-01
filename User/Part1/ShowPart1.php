<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do Task 1</title>
</head>
<body>
<?php
// Kết nối đến cơ sở dữ liệu
require_once '..\..\Database\connectDBtructiep.php';
$sql="Select * from questions_Part1";
$result= mysqli_query($conn,$sql);
// Kiểm tra kết quả truy vấn và in ra câu hỏi
        $row = mysqli_fetch_assoc($result);
        $id = $row["ID_Part1"];

        $image_path = $row["image_path"];

        $answer_a = $row["answer_a"];
        $answer_b = $row["answer_b"];
        $answer_c = $row["answer_c"];
        $answer_d = $row["answer_d"];
        //show lên
        echo "<p>Question ID: $id</p>";
        echo "<p>$image_path</p>";
        echo "<img src='../../".$row['image_path']."' width='300' alt='Image'>";
        echo "<p>$answer_a</p>";
        echo "<p>$answer_b</p>";
        echo "<p>$answer_c</p>";
        echo "<p>$answer_d</p>";
?>

</body>
</html>