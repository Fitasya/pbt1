<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="personal.css">
    <title>Aromatica Spa</title>
</head>

<body>
    <h1>Aromatica Spa Reservation</h1>
    <div class="papar">
        <?php
        if ($rad == 'Massage RM50') {
            $price = 50;
        ?>
            Service Selected: <br> <?php echo $rad; ?> <br><br>
            Add On: <br> <?php echo $op1 ?> <br> <?php echo $op2 ?> <br> <?php echo $op3; ?> <br><br>
            Total Price: RM<?php echo calcTotal($cb1, $cb2, $cb3, $price);
                        } else if ($rad == 'Facials RM70') {
                            $price = 70;
                            ?>
            Service Selected: <br> <?php echo $rad; ?> <br><br>
            Add On: <br> <?php echo $op4 ?> <br> <?php echo $op5 ?> <br> <?php echo $op6; ?> <br><br>
            Total Price: RM<?php echo calcTotal($cb4, $cb5, $cb6, $price);
                        } else if ($rad == 'Waxing & Threading RM40') {
                            $price = 40;
                            ?>
            Service Selected: <br> <?php echo $rad; ?> <br><br>
            Add On: <br> <?php echo $op7 ?> <br> <?php echo $op8 ?> <br> <?php echo $op9; ?> <br><br>
            Total Price: RM<?php echo calcTotal($cb7, $cb8, $cb9, $price);
                        } else if ($rad == 'Makeup RM60') {
                            $price = 60;
                            ?>
            Service Selected: <br> <?php echo $rad; ?> <br><br>
            Add On: <br> <?php echo $op10 ?> <br> <?php echo $op11 ?> <br> <?php echo $op12; ?> <br><br>
            Total Price: RM<?php echo calcTotal($cb10, $cb11, $cb12, $price);
                        } else {
                            ?>
            <script>
                alert('You must choose a service');
                window.location = 'index.php';
            </script>
        <?php
                        }
        ?>
    </div>
</body>

</html>