<?php
phpinfo();
$admin="aaaaaaaaaaaadmin";
$adminpass="i_want_to_getI00_inMyT3st";
function check($auth) {
    global $admin,$adminpass;
    $auth = str_replace('Basic ', '', $auth);
    $auth = base64_decode($auth);
    echo $auth;
    list($username, $password) = explode(':', $auth);
    echo $username."<br>".$password;
    if($username===$admin && $password===$adminpass) {
        return 1;
    }else{
        return 2;
    }
}

//$au='Basic YWFhYWFhYWFhYWFhZG1pbjppX3dhbnRfdG9fZ2V0STAwX2luTXlUM3N0';
//echo check($au);
$file = $_GET ["syc"];
if(preg_match("/config|create|filter|download|phar|log|sess|-c|-d|%|data/i",$file)){
    echo 'yes!';
}
