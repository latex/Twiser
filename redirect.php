<?php

session_start(); //iniciando sessao

require_once('lib/twitteroauth/twitteroauth.php'); //inclui lib
require_once('config.php');  //inclui comfiguracao


$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);// Instanciando objeto 


$request_token = $connection->getRequestToken(OAUTH_CALLBACK); // Busca o token


$_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];


switch ($connection->http_code) {
  
  case 200:
    //  URL de autorização
    $url = $connection->getAuthorizeURL($token);
    // Redirecionando
    header("Location: {$url}");
    break;
  default:
    
    echo 'Não foi possível conectar-se';
}
?>