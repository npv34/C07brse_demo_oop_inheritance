<?php

include_once "./src/User.php";
include_once "./src/Customer.php";



$customer = new Customer(1, "Thao Nguyen", "thaonguyen@gmail.com", "090909090", "Hue");

echo $customer->getInfo();