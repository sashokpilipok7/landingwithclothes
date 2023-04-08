<?php
//***************** Страница с завершением заказа ******************
session_start();
include 'config/upsell/crm.php';
if (isset($_POST['name']) and isset($_POST['phone'])) {
    session_start();
    $_SESSION['name'] = htmlspecialchars($_POST['name']);
    $_SESSION['phone'] = htmlspecialchars($_POST['phone']);
    $_SESSION['product_name'] = htmlspecialchars($_POST['product_name']);
}
$name = $_SESSION['name'];
$product_name = $_POST['product_name'];
if(isset($_REQUEST['count'])){
    $count = $_REQUEST['count'];
}
else{
    $count = 1;
};

echo $count;

if($_REQUEST['comment'] == upsell){
    $name = $_SESSION['name'].'_UP'.$_POST['product_id'];
    $product_name = $_POST['product_name'].'_UPSELL';
}
$namefaile = basename($_SERVER['SCRIPT_FILENAME']);
$domen = $_SERVER['SERVER_NAME'].str_replace("/$namefaile", "","{$_SERVER['SCRIPT_NAME']}");



// формируем массив с товарами в заказе (если товар один - оставляйте только первый элемент массива)
$products_list = array(
    0 => array(
        'product_id' => $_REQUEST['product_id'],    //код товара (из каталога CRM)
        'price'      => $_REQUEST['product_price'], //цена товара 1
        'count'      => $count,                     //количество товара 1
    )
);

$products = urlencode(serialize($products_list));
$sender = urlencode(serialize($_SERVER));
// параметры запроса
$data = array(
    'key'             => $crmapi, //Ваш секретный токен
    'order_id'        => number_format(round(microtime(true)*10),0,'.',''), //идентификатор (код) заказа (*автоматически*)
    'country'         => 'UA',                         // Географическое направление заказа
    'office'          => '1',                          // Офис (id в CRM)
    'products'        => $products,                    // массив с товарами в заказе
    'bayer_name'      => $name,            // покупатель (Ф.И.О)
    'phone'           => $_SESSION['phone'],           // телефон
    'email'           => $_REQUEST['email'],           // электронка
    'comment'         => $_REQUEST['comment'],    // комментарий
    'delivery'        => $_REQUEST['delivery'],        // способ доставки (id в CRM)
    'delivery_adress' => $_REQUEST['delivery_adress'], // адрес доставки
    'payment'         => '',                           // вариант оплаты (id в CRM)
    'sender'          => $sender,
    'utm_source'      => $_SESSION['utms']['utm_source'],  // utm_source
    'utm_medium'      => $_SESSION['utms']['utm_medium'],  // utm_medium
    'utm_term'        => $_SESSION['utms']['utm_term'],    // utm_term
    'utm_content'     => $_SESSION['utms']['utm_content'], // utm_content
    'utm_campaign'    => $_SESSION['utms']['utm_campaign'],// utm_campaign
    'additional_1'    => $domen,                               // Дополнительное поле 1
    'additional_2'    => '',                               // Дополнительное поле 2
    'additional_3'    => '',                               // Дополнительное поле 3
    'additional_4'    => ''                                // Дополнительное поле 4
);

// запрос
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,  $crmcurl);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl);
//var_dump(json_decode($upsell));
//$upsell – ответ сервера в формате JSON


    /*----- Резервная копия заказа на электронный адрес (если заказ не поступил в CRM) -----*/
// Отправка заказа на почту test@mail.com
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .= 'To: <' . $addressat . '>, ' . "\r\n";
    $headers .= 'From: <' . $domen. '>, ' . "\r\n";
    $subject2 = "Новая заявка " . $product_name . " "; // ----------------------------------------- название товара
    $message2 = "
<br>Имя: " . $_SESSION['name'] . "
<br>Телефон: " . $_SESSION['phone'] . "
<br>IP-адрес посетителя: " . @$_SERVER['REMOTE_ADDR'] . "
";
    $mail = mail($addressat, $subject2, $message2, $headers);

header("Location: upsell.php");
