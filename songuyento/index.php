<?php
function is_nguyento($number)
{
    for ($i = $number - 1; $i > 1; $i--) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
echo "số nguyên tố từ 1 đến 100" . " " . "<br>";
for ($i = 2; $i < 100; $i++) {
    if (is_nguyento($i)) {
        echo $i . " ";
    }
}
