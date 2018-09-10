<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/fatal_error.php';

$customer = new \App\Magento\Customer\Main();
var_dump($customer->getOneCustomer());
var_dump($customer->getOneCustomer());