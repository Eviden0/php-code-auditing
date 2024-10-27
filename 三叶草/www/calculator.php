<?php
$admin="aaaaaaaaaaaadmin";
$adminpass="i_want_to_getI00_inMyT3st";

function check($auth) {
    global $admin,$adminpass;
    $auth = str_replace('Basic ', '', $auth);
    $auth = base64_decode($auth);
    list($username, $password) = explode(':', $auth);
    echo $username."<br>".$password;
    if($username===$admin && $password===$adminpass) {
        return 1;
    }else{
        return 2;
    }
}
if($_SERVER['REMOTE_ADDR']!=="127.0.0.1"){
    exit("Hacker");
}
$expression = $_POST['expression'];
$auth=$_SERVER['HTTP_AUTHORIZATION'];
if(isset($auth)){
    if (check($auth)===2) {
        if(!preg_match('/^[0-9+\-*\/]+$/', $expression)) {
            die("Invalid expression");
        }else{
            $result=eval("return $expression;");
            file_put_contents("result",$result);
        }
    }else{
        $result=eval("return $expression;");
        file_put_contents("result",$result);
    }
}else{
    exit("Hacker");
}
