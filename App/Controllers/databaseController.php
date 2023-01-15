<?PHP
/*==========================*\
|   PDO Database connection  |
\*==========================*/

class DatabaseController
{

    public static function getConn()
    {

        include_once 'config/bdd.php';
        $nakamu = null;

        try {

            $nakamu = new PDO('mysql:host=' . $host . ';
                                port=' . $port . ';
                                dbname=' . $database, $user, $pass
            );

            $nakamu->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        } catch (Exception $e) {

            //require_once "views/database.error.view.php";
            echo 'impossible de se connecter a la bdd';

        }

        return $nakamu;

    }

}
