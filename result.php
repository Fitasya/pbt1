<?php
include('index.php');
include('function.php');
$rad = $_POST['rad'];
$total = 0;
$cb1 = '';
$cb2 = '';
$cb3 = '';
if (isset($_POST['cb1'])) {
    $cb1 = $_POST['cb1'];
    $op1 = 'Organic Foot Scrub Rm30';
} else {
    $cb1 = 0;
    $op1 = '';
}

if (isset($_POST['cb2'])) {
    $cb2 = $_POST['cb2'];
    $op2 = 'Cold Stone Facial Massage RM30';
} else {
    $cb2 = 0;
    $op2 = '';
}

if (isset($_POST['cb3'])) {
    $cb3 = $_POST['cb3'];
    $op3 = 'Scalp Massage with Organic Apricot Oil RM30';
} else {
    $cb3 = 0;
    $op3 = '';
}
if (isset($_POST['cb4'])) {
    $cb4 = $_POST['cb4'];
    $op4 = 'Lip & Eye Treatment Rm40';
} else {
    $cb4 = 0;
    $op4 = '';
}
if (isset($_POST['cb5'])) {
    $cb5 = $_POST['cb5'];
    $op5 = 'Lash Tinting RM20';
} else {
    $cb5 = 0;
    $op5 = '';
}
if (isset($_POST['cb6'])) {
    $cb6 = $_POST['cb6'];
    $op6 = 'Eyebrow Tinting RM20';
} else {
    $cb6 = 0;
    $op6 = '';
}
if (isset($_POST['cb7'])) {
    $cb7 = $_POST['cb7'];
    $op7 = 'Arm RM50';
} else {
    $cb7 = 0;
    $op7 = '';
}
if (isset($_POST['cb8'])) {
    $cb8 = $_POST['cb8'];
    $op8 = 'Back RM100';
} else {
    $cb8 = 0;
    $op8 = '';
}
if (isset($_POST['cb9'])) {
    $cb9 = $_POST['cb9'];
    $op9 = 'Legs RM60';
} else {
    $cb9 = 0;
    $op9 = '';
}
if (isset($_POST['cb10'])) {
    $cb10 = $_POST['cb10'];
    $op10 = 'Lash Tint Rm20';
} else {
    $cb10 = 0;
    $op10 = '';
}
if (isset($_POST['cb11'])) {
    $cb11 = $_POST['cb11'];
    $op11 = 'Eyebrow Tint RM20';
} else {
    $cb11 = 0;
    $op11 = '';
}
if (isset($_POST['cb12'])) {
    $cb12 = $_POST['cb12'];
    $op12 = 'Last & Eyebrow Tint RM35';
} else {
    $cb12 = 0;
    $op12 = '';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aromatica Spa</title>
</head>

<body>
    <h1>Aromatica Spa Reservation</h1>
    <div>
        <?php
        if ($rad == 'Massage RM50') {
            $price = 50;
            echo "Service Selected: " . $rad . "<br>";
            echo "Add On: " . $op1 . "<br>" . $op2 . "<br>" . $op3 . "<br>";
            echo "Total: RM" . calcTotal($rad, $cb1, $cb2, $cb3, $price);
            
        } else if ($rad == 'Facials RM70') {
            $price = 70;
            echo "Service Selected: " . $rad . "<br>";
            echo "Add On: " . $op4 . "<br>" . $op5 . "<br>" . $op6 . "<br>";
            echo "Total: RM" .  calcTotal($rad, $cb4, $cb5, $cb6, $price);
        } else if ($rad == 'Waxing & Threading RM40') {
            $price = 40;
            echo "Service Selected: " . $rad . "<br>";
            echo "Add On: " . $op7 . "<br>" . $op8 . "<br>" . $op9 . "<br>";
            echo "Total: RM" .  calcTotal($rad, $cb7, $cb8, $cb9, $price);
        } else if ($rad == 'Makeup RM60') {
            $price = 60;
            echo "Service Selected: " . $rad . "<br>";
            echo "Add On: " . $op10 . "<br>" . $op11 . "<br>" . $op12 . "<br>";
            echo "Total: RM" .  calcTotal($rad, $cb10, $cb11, $cb12, $price);
        }

        ?>

    </div>


</body>

</html>