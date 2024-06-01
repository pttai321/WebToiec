<?php
// file kết nối database
require_once '..\..\Database\connectDBtructiep.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Đường dẫn lưu file upload
    $target_dir = "uploads/";

    // Xử lý file hình ảnh
    $target_file_image = $target_dir . basename($_FILES["image_path"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file_image, PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["image_path"]["tmp_name"], $target_file_image);
    
    //$image_path = $_POST['image_path'];
    $audio_path = $_POST['audio_path'];
    $answer_a = $_POST['answer_a'];
    $answer_b = $_POST['answer_b'];
    $answer_c = $_POST['answer_c'];
    $answer_d = $_POST['answer_d'];

    $sql = "INSERT INTO questions_Part1 (image_path, audio_path, answer_a, answer_b, answer_c, answer_d) 
            VALUES ('$target_file_image', '$target_file_audio', '$answer_a', '$answer_b', '$answer_c', '$answer_d')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!-- HTML Form để thêm câu hỏi -->
<form method="post" action="" enctype="multipart/form-data">
    Image : <input type="file" name="image_path"><br>
    Audio : <input type="text" name="audio_path"><br>
    Answer A: <input type="text" name="answer_a"><br>
    Answer B: <input type="text" name="answer_b"><br>
    Answer C: <input type="text" name="answer_c"><br>
    Answer D: <input type="text" name="answer_d"><br>
    <input type="submit" value="Add Question">

</form>
