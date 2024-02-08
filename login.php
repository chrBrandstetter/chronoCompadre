<?php 
require("includes/common.inc.php");
require("includes/conn.inc.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <?php 
    $sql="SELECT * FROM tbl_user"; 

    $allUser = $conn->query($sql) or die ("Fehler in der Query:".$conn->error."");
        
        echo('<ul>');
        while($user = $allUser->fetch_object()){
            echo('<li>'); 
            echo('Testausgabe: Vorname: '.$user->Vorname.' und Nachname '.$user->Nachname.'');
            echo('</li>');
        }
        echo('</ul>');
    ?>
</body>
</html>