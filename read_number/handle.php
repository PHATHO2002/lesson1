
<?php
function readNumlessten($number)
{
    switch ($number) {
        case 1:
            return "one";

        case 2:
            return "two";

        case 3:
            return "three";

        case 4:
            return "four";

        case 5:
            return "five";

        case 6:
            return "six";

        case 7:
            return "seven";

        case 8:
            return "eight";

        case 9:
            return "nine";
    }
}
function readNumten($number)
{
    switch ($number) {
        case 10:
            return "ten";
        case 11:
            return "eleven";
        case 12:
            return "tiwce";
        case 13:
            return "thirteen";
        case 14:
            return "fourteen";
        case 15:
            return "fifteen";
        case 16:
            return "sixteen";
        case 17:
            return "seventeen";
        case 18:
            return "eighteen";
        case 19:
            return "nineteen";
    }
}

function readTwoNum($number)
{
    $text = "";
    $numberArr = str_split($number);
    switch ($numberArr[0]) {
        case 2:
            if ($number % 10 == 0) {

                $text = "tewnty";
                break;
            } else {
                $text = "tewnty" . " " .  readNumlessten($numberArr[1]);
                break;
            }

        case 3:
            if ($number % 10 == 0) {

                $text = "thirty";
                break;
            } else {
                $text = "thirty" . " " .  readNumlessten($numberArr[1]);
                break;
            }

        case 4:
            if ($number % 10 == 0) {

                $text = "fourty";
                break;
            } else {
                $text = "fourty" . " " .  readNumlessten($numberArr[1]);
                break;
            }

        case 5:
            if ($number % 10 == 0) {

                $text = "fifty";
                break;
            } else {
                $text = "fifty" . " " .  readNumlessten($numberArr[1]);
                break;
            }

        case 6:
            if ($number % 10 == 0) {

                $text = "sixty";
                break;
            } else {
                $text = "sixty" . " " .  readNumlessten($numberArr[1]);
                break;
            }

        case 7:
            if ($number % 10 == 0) {

                $text = "seventy";
                break;
            } else {
                $text = "seventy" . " " .  readNumlessten($numberArr[1]);
                break;
            }

        case 8:
            if ($number % 10 == 0) {

                $text = "eighty";
                break;
            } else {
                $text = "eighty" . " " .  readNumlessten($numberArr[1]);
                break;
            }

        case 9:
            if ($number % 10 == 0) {

                $text = "ninety";
                break;
            } else {
                $text = "ninety" . " " .  readNumlessten($numberArr[1]);
                break;
            }
    }
    return $text;
}
function readThreeNum($number)
{
    $text = "";
    $hundred = readNumlessten(floor($number / 100));
    if ($number % 100 == 0) {
        $text = $hundred . ' hundred';
        return $text;
    } else {
        $number2 = $number % 100;
        if ($number2 < 10) {
            $text = $hundred .  ' hundred' . ' and ' . readNumlessten($number2);
            return  $text;
        } else if ($number2 >= 10 && $number2 < 20) {
            $text = $hundred .  ' hundred' . ' and ' . readNumten($number2);
            return  $text;
        } else {
            $text = $hundred .  ' hundred' . ' and ' . readTwoNum($number2);
            return  $text;
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["number"])) {
        $number = intval($_POST["number"]);

        if (is_int($number) &&   $number > 0) {
            if ($number < 10) {
                echo   readNumlessten($number);
            } else if ($number >= 10 && $number < 20) {
                echo   readNumten($number);
            } else if ($number >= 20 && $number <= 99) {
                echo readTwoNum($number);
            } else if ($number >= 100 && $number <= 999) {
                echo readThreeNum($number);
            } else {
                echo 'phải là số có 3 chữ số';
            }
        } else {
            echo "so phai la so nguyen khong am";
        }
    } else {
        echo "Thiếu dữ liệu cần thiết.";
    }
}
