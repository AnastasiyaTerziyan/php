<?php

$person_type = htmlspecialchars($_POST['pt']);
$MAN = "Мужчина";
$WOMAN = "Женщина";
$forms = htmlspecialchars($_POST['forms']);
$title = 'Выбор товара';
$data = $_REQUEST;
$address = htmlspecialchars($_POST['address']);
$items = htmlspecialchars($_POST['items']);
$totalprice1 = htmlspecialchars($_POST['totalprice']);

function getTotalPrice($data) {
    $totalprice = 0;

    foreach ($data["item"] as $key => $value){
        $totalprice += ($value * $data["price"][$key]);
    }
    return $totalprice;
}

if ($person_type == NULL && $forms == NULL) {
    $HTML = '<html><title>' . $title . '</title><body>
                <form action="index.php" method="post">
            <h3>Выберите, для кого Вы хотите заказать товар?</h3>
            <input type="submit" name="pt" value="Мужчина">
            <input type="submit" name="pt" value="Женщина">
            <input type="hidden" name="forms" value="1">
            </form>
            </body></html>';
    print $HTML;
}

if ($forms == "1") {
    if ($person_type == $MAN) {
        include('form2.html');
    }
    if ($person_type == $WOMAN) {
        include('form1.html');
    }
}

if ($forms == "2") {
        include('form3.php');
        $data = $_REQUEST;
        unset($data["submit"], $data["pt"], $data["forms"]);
}

if ($forms == "3") {
        include('form4.php');        
}

?>
