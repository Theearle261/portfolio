<?php
// (A) USER AGENT


include('session.php');
$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
 
// (B) MOBILE TABLE DESKTOP
$isMob = is_numeric(strpos($ua, "mobile"));
$isTab = is_numeric(strpos($ua, "tablet"));
$isDesk = !$isMob && !$isTab;
echo $isDesk
  ? "<script>window.location = 'Cart_PC.php?id=$deviceId'</script>"
  : "<script>window.location = 'Cart_Mobile.php?id=$deviceId'</script>";