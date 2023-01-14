<?php
//    include('Model/database.php');
    
    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
        $id_user = '1';
        $sql = "INSERT INTO comments (comment, created_at, id_user, id_post) VALUES (:comment, :created_at, :id_user, :id_post)";
        if($stmt = $conn->prepare($sql)) {
            $stmt->bindValue(":comment", $post, PDO::PARAM_STR);
            $stmt->bindValue(":created_at", time(), PDO::PARAM_STR);
            $stmt->bindValue(":id_user", $id_user, PDO::PARAM_STR);
            $stmt->bindValue(":id_post", $param_id_post, PDO::PARAM_STR);
            
            $param_comment = $_POST["comment"];
            $param_created_at = time();
            // $param_id_user = $_SESSION["id"];
            $param_id_post = $_POST["id_post"];
            
            if($stmt->execute()) {
                header("location: index.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }
    }

?>