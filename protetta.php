<html>
<head>

</head>
<body>
    <?php
        include_once "connection.php";
    ?>
    <?php   if ( isset($_SESSION["loggedIN"]) && $_SESSION["loggedIN"] === TRUE) { ?>
           <h1>STAI DENTRO!</h1>
           <a href="logout.php"> Esci dal sistema</a>
    <?php } else { ?>
        <h1>Non hai diritto ad accedere a questa pagina!</h1>
        <a href="index.php"> Vai alla login</a>
        
    <?php } ?>
    

    
</body>

</html>