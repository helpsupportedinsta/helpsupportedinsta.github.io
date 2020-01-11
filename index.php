<?
require "config.php";
require "functions.php";

$path = URL_AUTH ."?"."client_id=". CLIENT_ID ."&redirect_uri=". REDIRECT ."&response_type=code";
?>

<a href="<? echo $path;?>">Facebook</a>