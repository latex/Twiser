<?php
session_start();

require_once('lib/twitteroauth/twitteroauth.php');
require_once('config.php');
require_once "lib/db.php";
if (!isset($_SESSION['access_token']))
 
    header('Location: clean.php');

$access_token = $_SESSION['access_token'];

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
      
      <h1>Result</h1>

      <?php
     
      //$user = $connection->get('account/verify_credentials');
      //$pes = $connection->get('search/tweets',$para);

      $words = array("roubo","crime");

      $i = count($words);

   
      


      $pes = $connection->get("https://api.twitter.com/1.1/search/tweets.json?q=ROUBO");
      $o = count($pes->statuses);
      
      
      for($f=0;$f<$o;$f++)
      {
        $array = (array) $pes->statuses[$f]->text;

      //$e = count($array);
        echo($array[0])."<br><br>";
        save($array[0]);
      }
      
      
      
     
    
      ?>
      
      <p>
          <a href="clean.php">Sair</a>

      </p>

  </body>
</html>