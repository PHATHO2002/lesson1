<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["pr_description"]) && isset($_POST["pr_price"]) && isset($_POST["pr_dc_pc"])) {

        $price = floatval($_POST["pr_price"]);
        $discountPer = floatval($_POST["pr_dc_pc"]);

        if (!$price > 0) {
            echo "giá phải lớn hơn 0";
            exit();
        }
        if (!($discountPer >= 0 && $discountPer <= 100)) {
            echo "chiết khấu phải >=0 và <=100";
            exit();
        }
        $discountAmount = $price * $discountPer * 0.01;

        $discountPrice = $price - $discountAmount;
        echo "giảm giá :" .  $discountAmount . "tổng tiền:" . $discountPrice;
    } else {
        echo "Thiếu dữ liệu cần thiết.";
    }
} else {
    echo "Chỉ chấp nhận phương thức POST.";
}
