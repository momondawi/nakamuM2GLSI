<?php
/**
 * 
 */
class LoginModel 
{
	
	public static function isUser($login,$password,$conn){
		$sql = $conn->prepare("SELECT * FROM user WHERE login = :login and password = :password LIMIT 1");
        $sql->bindValue(':login', $login, PDO::PARAM_STR);
        $sql->bindValue(':password', $password, PDO::PARAM_STR);
        $sql->execute();
        $row = $sql->rowCount();
        $sql->closeCursor();

        return $row;
	}
}
?>