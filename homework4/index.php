<?php

require_once ('autoloader.php');

try {
    $dollar = new App\Currency('USD');
    $euro = new App\Currency('EUR');

    $JohnMoney = new App\Money(5000, $dollar);
    $RobertMoney = new App\Money(3000, $euro);
    $KarlMoney = new App\Money(5000, $dollar);
    $JohnMonthlyIncome = new App\Money(1500, $dollar);
}
catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

if ($JohnMoney->equals($KarlMoney))
    echo 'They have the same currencies and amounts';
else
    echo "They have different currencies or amount";

try {
    $JohnMoney->add($JohnMonthlyIncome);
    echo $JohnMoney->getAmount();
}
catch (InvalidArgumentException $e) {
        echo $e->getMessage();
}
