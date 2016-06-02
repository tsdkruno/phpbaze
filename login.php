<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Automobili</title>
    <link href="css/template.css" rel="stylesheet">
</head>

<body>
<h1>
    Prijava
</h1>

<p>

    <?php

    if (isset($_GET['login'])) {
        echo('<span class="crveno">Krivo korisnicko ime ili lozinka</span>');
    }

    ?>

<form action="login_check.php" method="post">
    Korisnicko ime:<br>
    <input type="text" name="username"><br>
    Lozinka:<br>
    <input type="text" name="password"><br>
    <input type="submit" value="Prijava">
</form>
</p>

</body>
</html>