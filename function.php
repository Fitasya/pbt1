<?php
function calcTotal($rad, $cb1, $cb2, $cb3, $price)
{
    $total = $price + $cb1 + $cb2 + $cb3;
    return $total;
}
