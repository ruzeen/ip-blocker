<?php

function IP_Blocker() {

  $ip_config = array($_SERVER['HTTP_CLIENT_IP'], $_SERVER['HTTP_X_FORWARDED_FOR'], $_SERVER['HTTP_X_FORWARDED'], $_SERVER['HTTP_FORWARDED_FOR'], $_SERVER['HTTP_FORWARDED'], $_SERVER['REMOTE_ADDR'], $_SERVER['REMOTE_HOST']);

  $blocked_ips = file('blocked_ips');

  foreach ($ip_config as $guest_ip) {
    foreach ($blocked_ips as $bad_ip) {
        if ($guest_ip == $bad_ip) {
          header('Location: /blocked');
      }
    }
  }

}

IP_Blocker();

?>
