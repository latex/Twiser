<?php

session_start();
require_once('lib/twitteroauth/twitteroauth.php');
require_once('config.php');

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);

$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);

$_SESSION['access_token'] = $access_token;

unset($_SESSION['oauth_token']);
unset($_SESSION['oauth_token_secret']);

if (200 == $connection->http_code)
    header('Location: search.php');
else
    header('Location: clean.php');
?>