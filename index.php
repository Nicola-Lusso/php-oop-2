<?php
  include 'user.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $user_1->nome . '  ' . $user_1->cognome . ' -  ' . $user_1->follower; ?></h3>
    <ul>
        <li><?php echo 'eta: ' .$user_1->eta; ?></li>
        <li><?php echo 'stelle: ' .$user_1->stelle; ?></li>
    </ul>

    <h3><?php echo $user_2->nome  . '  ' . $user_2->cognome . ' - ' . $user_2->follower; ?></h3>
    <ul>
        <li><?php echo'eta: ' . $user_2->eta; ?></li>
        <li><?php echo 'stelle: ' .$user_2->stelle; ?></li>
    </ul>

    <h3><?php echo $user_3->nome  . '  ' . $user_3->cognome . ' - ' . $user_3->follower; ?></h3>
    <ul>
        <li><?php echo 'eta: ' .$user_3->eta; ?></li>
        <li><?php echo 'stelle: ' .$user_3->stelle; ?></li>
    </ul>
    
</body>
</html>