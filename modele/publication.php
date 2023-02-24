<?php

$user = 'root';
$pwd= 'root';
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=nakamu_DB',$user,$pwd);
}
catch(PDOException $e){
    print "Erreur :". $e->getMessage();
    exit();
}

if(isset($_POST['insert'])){
    $img_name= $_FILES['imageChoisi']['name'];
    $img_type= $_FILES['imageChoisi']['type'];
    $img_tmp= $_FILES['imageChoisi']['tmp_name'];

    $newName= rand();
    $dossier = 'assets/';
    $extension= explode("/", $img_type)[1];
    $AllowedExtensions= array('image/jpeg', 'image/png', 'image/gif') ;
    $extension1=strrchr($file_name,'.');
    $extension1=substr($Extension1,1);
    $extension1=strtolower($Extension1);

    if(!empty($_POST['publication']) && empty($img_tmp)){
        $post = $_POST['publication'];
        $id_user = '1';
        $req="insert into post (content_post, created_at, id_user) values(:post, :date, :id_user)";
        $res=$bdd->prepare($req);
        $res->bindValue(':post', $post, PDO::PARAM_STR);
        $res->bindValue(':date', time(), PDO::PARAM_INT);
        $res->bindValue(':id_user', $id_user, PDO::PARAM_STR);
        $exec=$res->execute();
        header('location:index.php');
    }
    else if (empty($_POST['publication']) && !empty($img_tmp)){
        if(!is_uploaded_file($img_tmp)){
            print "Erreur";
        }
        else{
            if(in_array($img_type, $AllowedExtensions)){
                if(move_uploaded_file($img_tmp, $dossier.$newName.".".$extension)){
                    $post = $_POST['publication'];
                    $id_user = '1';
                    $img_insert = $dossier.$newName.".".$extension;

                    $req="insert into post (content_post, created_at, id_user, img) values(:post, :date, :id_user ,:img_insert)";
                    $res=$bdd->prepare($req);
                    $res->bindValue(':post', $post, PDO::PARAM_STR);
                    $res->bindValue(':date', time(), PDO::PARAM_INT);
                    $res->bindValue(':id_user', $id_user, PDO::PARAM_STR);
                    $res->bindValue(':img_insert', $img_insert, PDO::PARAM_STR);
                    $exec=$res->execute();
                    header('location:index.php');
                }
            }
            else{
                print 'Ce n\'est pas une image';
            }
        }
    }
    else if (empty($_POST['publication']) && empty($img_tmp)){
        header('location:index.php');
    }
    
}

$select_request="select content_post, created_at, img, id_user from post order by id_post desc";
$select_result=$bdd->query($select_request);
