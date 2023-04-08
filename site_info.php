<?
$price = '299';           //Ціна
$product_id = '75';       //id товару
$product_name = 'sani';  //Назва товару
$count = '1';            //Кількість

$sale = '35';            //Знижка у відсотках
$old = floor(($price / (100 - $sale)) * 100);
