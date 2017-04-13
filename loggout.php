<?php
session_start();
session_destroy();
header("Location: admin.php")
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
        <form action="regAdminForm.php">
            <button>LOG OUT</button>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
