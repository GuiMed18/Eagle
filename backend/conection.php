<?php

$user ="guilhe266828";
$pass ="filial140,";

require_once("../_libs/phpseclib/SSH.php");
   
	
    $save = new Net_SSH2("172.20.169.253");
    $db = new Net_SSH2("172.20.169.195");  
    $saveweb = new Net_SSH2("172.20.169.196");
    $tpl = new Net_SSH2("172.20.171.125");
    $bck = new Net_SSH2("172.20.169.198");


    if (!$save->login($user, $pass)) {        
     echo "Erro ao conectar com o srvsave";
    }
    if (!$db->login($user, $pass)) {        
        echo "Erro ao conectar com o db";
       }
    if (!$saveweb->login($user, $pass)) {
        echo "Erro ao conectar com o srvapp";
    }

    if (!$tpl->login($user, $pass)) {
        echo "Erro ao conectar com o srvtpl";
    }

    if (!$bck->login($user, $pass)) {
        echo "Erro ao conectar com o bck";
    }
    

?>