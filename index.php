<?php

  include("node.php");
  include("board.php");
  include("walker.php");

  $walker = new Walker();
  $walker->initialiseLocation($stairWay);

  // handle i/o which we're using cookies because PHP.
  $cookie_name = 'graph_game_cookie';
  $reload = '';

  if(!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name,'start,', time() + (86400 * 30), '/'); // 86400 = 1 day
      $reload = "document.location.href='".strtok($_SERVER["REQUEST_URI"],'?')."' ";
  }

  if( isset($_GET['action']) ) {

    if($_GET['action']=='clear') {
      unset($_COOKIE[$cookie_name]);
      //empty value and expiration one hour before
      setcookie($cookie_name, '', time() - 3600);
    }

    if($_GET['action']=='submit') {
      setcookie($cookie_name, $_COOKIE[$cookie_name].$_GET['token'].',', time() + (86400 * 30), '/');
      $reload = "document.location.href='".strtok($_SERVER["REQUEST_URI"],'?')."' ";
    }

  }

  $commands =  explode ( "," , $_COOKIE[$cookie_name] );
  foreach ($commands as $command) {
    $walker->takeCommand($command);
  }
?>
<html>
<head>
  <title>PHP cookie graph game</title>
</head>
<script>
  <?php echo $reload; ?>
</script>
<body>
  You are in the: <b><?php echo $walker->whereAreYou(); ?></b><br /><br />
  Number of commands: <?php echo count($commands)-1; ?><br /><br />

  Commands are now: <?php if(isset($_COOKIE[$cookie_name])) {echo $_COOKIE[$cookie_name];} ?> <br /><br />
  <form>
    <input type="text"   name="token" />
    <input type="submit" name="action" value="submit"/>
    <input type="submit" name="action" value="clear" onclick="clearcookie();" />
  </form>
  <script>
    function clearcookie(e) {
      document.cookie.split(";").forEach(function(c) { 
        document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); 
      });
    }
  </script>
</body>
</html>