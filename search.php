<?php
session_start();


// php-twient Application
define('APP_CONSUMER_KEY', 'HiEPXelZpNGarMEnYDlooA');
define('APP_CONSUMER_SECRET', 'x5po5wZXk61yadUdbSaW0kHKil3rTjFPFFBmznidw');

// @php-twient: http://twitter.com/php_twient
define('USER_TOKEN', '18312050-CBkOEgRrlcmT0wBhZNTUVeU76YKPoaDSgIJe7GQha');
define('USER_SECRET', 'UEuIAN26BgM5Jp04AF6Xjn7E5ovIYiBIkiuF6BaeO9HoL');



require_once 'Twient/Twitter.php';
//require_once('lib/Twient/Twitter/V1dot1.php');
//require_once('config.php');

use Twient\Twitter as Twitter;

try {
    $twitter = new Twitter();
    $twitter->oAuth(
        APP_CONSUMER_KEY,
        APP_CONSUMER_SECRET,
        USER_TOKEN,
        USER_SECRET
    );
    $results = $twitter->call('search/tweets');
} catch (Exception $e) {
    echo $e . PHP_EOL;
}
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
      #Configure abaixo o seu login e senha do Twitter
     
      $tw->call('search/tweets',$array);

print_r($tw);
    
      ?>
      
      <p>
          <a href="clean.php">Sair</a>

      </p>

  </body>
</html>