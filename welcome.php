<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>PHP</title>
</head>

<body>

    <div class= "welcome-message">
        <h1>Welcome <?php echo $_POST["name"]; ?> <?php echo $_POST["lastname"]; ?>  !<br> </h1>
        <h2>Leuk dat je er bent!</h2>

        <h3>Wouw, mijn favoriete kleur is ook <?php echo $_POST["favcolor"]; ?> !</h3> 

        <?php echo '<body style="background-color: ' . $_POST['favcolor'] . '">'; ?>
    </div>



</body>
</html>