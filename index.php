<html>
<head>
    <title>Accesso al sistenma</title>
</head>
<?php
    include_once "connection.php";
    $rowcount = -1;
    if(isset($_POST["email"]) && isset($_POST["passwd"])) {
      $eml = $_POST["email"];
      $pwd = $_POST["passwd"];  

      $query = "SELECT * FROM users WHERE email = '$eml' AND passwd = MD5('$pwd') AND abilitato = true ";
      $result = mysqli_query($conn, $query);

      $rowcount = mysqli_num_rows($result);
      if($rowcount == 1){
        $_SESSION["loggedIN"] = TRUE;
        $_SESSION["email"] = $eml;
        
      }

  }

?>

<body>
    <center>
        <form method="POST" >
            <h2>Benvenuto</h2>
            <p>Inserisci le tue credenziali per accedere al nosto <br/>
                fantastisco sistema seper interattivo autoattivante</p>
            <input placeholder="Email" type="text" name="email" size="20" /> <br/>
            <input placeholder="Password" type="password" name="passwd" size="20" /> <br/><br/><br/>
            <button type="submit">Accedi al sistema</button>

            <?php
                if($rowcount == 0){
                    echo "<p>Username e/o password errate</p>";
                }else if($rowcount == 1){
                    echo "<p>Benvenuto nel nostro sito</p>";
                }

            ?><br/>
            <a href="protetta.php"> Vai alla pagina protetta</a>

        </form>
    </center>






</body>
</html>




