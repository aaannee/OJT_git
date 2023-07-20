<?php
class search
{
        public static function connect()
        {
            try {
                $con = new PDO("mysql:host=localhost;dbname=searchDB", 'root', '');
                return $con;
            } catch (PDOException $error1) {
                echo 'Something wrong with your connection.' . $error1->getMessage();;
            } catch (Exception $error2) {
                echo 'Generic error.' . $error2->getMessage();
            }
         }
    public static function insertingUSer()
    {
        $user = search::connect()->prepare("INSERT INTO users(id,name,nickName,email,password) VALUES()");
        $user->bindValue('',);
        $user->bindValue('',);
        $user->bindValue('',);
        $user->bindValue('',);
        $user->execute();
    }
}
    
