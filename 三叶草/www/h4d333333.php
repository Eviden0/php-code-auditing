<?php
error_reporting(0);
if(!isset($_POST['user'])){
    $user="stranger";
}else{
    $user=$_POST['user'];
}

if (isset($_GET['location'])) {
    $location=$_GET['location'];
    $client=new SoapClient(null,array(
        "location"=>$location,
        "uri"=>"hahaha",
        "login"=>"guest",
        "password"=>"gueeeeest!!!!",
        "user_agent"=>$user."'s Chrome"));

    $client->calculator();

    echo file_get_contents("result");
}else{
    echo "Please give me a location";
}
