<?php

function IP_Blocker() {

  $ip_config = $_SERVER['REMOTE_ADDR'];

  $blocked_ips = file('blocked_ips.txt');
  
  foreach ($blocked_ips as $bad_ip) {
      if ($ip_config == $bad_ip) {
        header('Location: blocked');
      }
  }

}

IP_Blocker();

?>
