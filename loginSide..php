<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SKI VM</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      
    </head>
    <body>
      
        <form action="" method="POST">
            <input type="text" name="brukenavn" placeholder="Brukenavn"/>
            <input type="password" name="passord" placeholder="Passord"/>
            <input type="submit" name="logginn"/>
        </form>
        <?php
      
           $dbconn = new mysqli("localhost", "root", "", "skiVm");
           if(!$dbconn){
               die("Kyntting til database feilet: " . $dbconn->connect_error());
           }
           if(isset($_REQUEST["logginn"])){
            
            $bnavn = $_REQUEST["brukenavn"];
            $passord =$_REQUEST["passord"];
          //  $bnavn = $_SESSION($_REQUEST["brukenavn"]);
           // $passord = $_SESSION($_REQUEST["passord"]);
            
            $sql = "SELECT * FROM user WHERE BrukeNavn='$bnavn' AND Passord='$passord'";
            $result = $dbconn->query($sql);
           // $row = $result->fetch_object();
           // $row = $result->fetch_assoc();
            if($row = $dbconn->affected_rows>0){
                
                echo "Logget inn";
            }            
            else {
                  echo "Brukenavn eller passord feilet <br>";
                $_SESSION['UserId'] = $row['UserId'];
            }
           // header("Location: index.php");
//            if($dbconn->affected_rows>0){
//                echo "Du er logget inn";
//                $_SESSION["UserId"] = $dbconn["UserId"]; 
//            }           
//            else
//            {
//                echo 'Du er ikke logget inn';
//               //$_SESSION['UserId'] = $result['UserId'];
//            }
        }
        //hvis logget inn vis iden till den som er logget inn
        if(isset($_SESSION['UserId'])){
            
            echo $_SESSION['UserId'];
        }       
        else{
           echo "You are not logged in!";
        }
        ?>
          <script src="jquery/jquery-3.2.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
