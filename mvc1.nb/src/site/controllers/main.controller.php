<?php

class main {

    public function __construct() {

    }

    public function action_main_form0() {
        $data = ['gender' => $gender];
        $gender = '';
        return ['view' => 'forms/form0', 'data' => $data];
    }

    public function action_main_form1() {
        $pt = htmlspecialchars($_POST['pt']);
        $data = ['gender' => $pt];
        if ($pt == 'Мужчина') {
            return ['view' => 'forms/form2', 'data' => $data];
        } else {
            return ['view' => 'forms/form1', 'data' => $data];
        }
    }

    public function action_main_form3() {
       $data = $_REQUEST;
        $personType = $data["pt"];
        $totalPrice = getTotalPrice($data); 
        unset($data["submit"], $data["pt"]);
        $items = '';   
        
        foreach ($data["item"] as $key => $value) {
            if ($value != null || $value != '') {
                $items .= $key . ' в количестве: ' . $value . ', ' . ' по цене ' . $data["price"][$key];
            }
        }

        $notices = [];

        if (!strlen($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $notices['email'] = 'Проверьте email';
        }
        if (!strlen($data['fio'])) {
            $notices['fio'] = 'Проверьте ФИО';
        }
        if (!strlen($data['address'])) {
            $notices['address'] = 'Проверьте адрес';
        }
        if (!strlen($items)) {
            $notices['items'] = 'Вы ничего не заказали';
        }
        if (!strlen($totalPrice)) {
            $notices['totalPrice'] = 'Итоговая цена пуста, ошибка';
        }

        $orderArray = array(
            'email' => $data["email"],
            'fio' => $data["fio"],
            'address' => $data["address"],
            'items' => $items,
            'totalprice' => $totalPrice
            );

        if (!count($notices)) {
            $order = fill_entity(get_order_schema(), $orderArray);
            add_order($order);
        }    


        return ['view' => 'forms/form3', 'data' => [
        'data' => $data,
        'personType' => $personType,
        'price' => $totalPrice,
        'notices' => $notices
        ]];
    }
    
    

    public function action_main_form4() {
        $totalPrice = htmlspecialchars($_POST['totalprice']);
        $pt = htmlspecialchars($_POST['pt']);
        $address = htmlspecialchars($_POST['address']);
        $items = htmlspecialchars($_POST['items']);
        return ['view' => 'forms/form4', 'data' => [
                'personType' => $pt,
                'price' => $totalPrice,
                'address' => $address,
                'items' => $items
        ]];
    }

}
