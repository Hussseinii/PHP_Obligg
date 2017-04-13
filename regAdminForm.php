<?php
session_start();

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //feil handling
          $url = "http://". $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            if(strpos($url, 'error=empty') !== false){
                echo "Du må fill ut alle felter";
            } elseif(strpos($url, 'error=BrukeNavn') !== false){
                echo "Bruke navn exister fra får";
            }
        ?>
        
        <form action="" method="POST">
            <input type="text" name="fornavn" placeholder="Fornavn"/><br>
            <input type="text" name="etternavn" placeholder="Ettenavn"/> <br>
            <input type="text" name="brukenavn" placeholder="Brukenavn"/> <br>
            <input type="password" name="passord" placeholder="Passord"/> <br>
            <button type="submit" name="regadmin">REG ADMIN</button>
            
        </form>
       
        <?php
           $dbconn = new mysqli("localhost", "root", "", "skiVm");
           if(!$dbconn){
               die("Kyntting til database feilet: " . $dbconn->connect_error());
           }
        if(isset($_REQUEST["regadmin"])){
            
            $fnavn = $_REQUEST["fornavn"];
            $enavn = $_REQUEST["etternavn"];
            $bnavn = $_REQUEST["brukenavn"];
            $passord = $_REQUEST["passord"];
            
            //error handling
            if(empty($fnavn)){
                   header("Location: regAdminForm.php?error=empty");
                   exit();
            }  
              if(empty($enavn)){
                   header("Location: regAdminForm.php?error=empty");
                   exit();
            }  
              if(empty($bnavn)){
                   header("Location: regAdminForm.php?error=empty");
                   exit();
            }  
              if(empty($passord)){
                   header("Location: regAdminForm.php?error=empty");
                   exit();
            }  
            else
            {
                //her skjekke vi vis et bruker navn finnes fra frå
                $sql = "SELECT BrukeNavn FROM user WHERE BrukeNavn='$bnavn'";
                $result = $dbconn->query($sql);
                //$bnsjekke = mysqli_num_rows($result);
                $bnsjekke = $dbconn->num_rows($result);//does not work must fix it
                if($bnsjekke > 0){
                     header("Location: regAdminForm.php?error=BrukeNavn");
                   exit();
                }   
                else
                {
                   $password_encrypted = password_hash($passord, PASSWORD_DEFAULT);
                 $sql = "INSERT INTO user(Fornavn, Etternavn, BrukerNavn, Passord) "
                        . "VALUES('$fnavn', '$enavn', '$bnavn', '$password_encrypted')";
                $result = $dbconn->query($sql);

                header("Location: index.php");  
                }
             
            }
           
        }
        ?>
    </body>
</html>
