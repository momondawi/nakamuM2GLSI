<?php
class LoginController{
    

    

    public static function show($conn){
        if (isset($_POST['submit'])) {
            $login=$_POST['login'];
            $password=$_POST['password'];
            if (!empty($login) && !empty($password)) {
                self::doLogin($login,$password,$conn);
            }else{
                echo "fix yourself";
            }
            
        }
        require_once "Views/login.php";

    }
    public static function doLogin($login,$password,$conn)
    {
      if (LoginModel::isUser($login,$password,$conn) > 0) {
          echo "marche";
      }else{
        echo "ca marche paas";
      }
    }
}
?>