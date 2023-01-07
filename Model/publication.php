<?php
// require('Model/database.php');
$user = 'root';
$pwd= 'azerty';
try{
    $conn = new PDO ('mysql:host=localhost;dbname=nakamu_DB',$user,$pwd);
}
catch(PDOException $e){
    print "Erreur :". $e->getMessage();
    exit();
}

if(isset($_POST['insert'])){
    $post = $_POST['publication'];
    $id_user = '1';
    $req="insert into post (content_post, created_at, id_user) values(:post, :date, :id_user)";
    $res=$conn->prepare($req);
    $res->bindValue(':post', $post, PDO::PARAM_STR);
    $res->bindValue(':date', time(), PDO::PARAM_INT);
    $res->bindValue(':id_user', $id_user, PDO::PARAM_STR);
    $exec=$res->execute();
    header('location:index.php');
}

$select_request="select content_post, created_at from post order by id_post desc";
$select_result=$conn->query($select_request);
