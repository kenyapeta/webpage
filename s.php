<?php
// Logs the ip address of guests/members of your site.

// add the full path to the log file
$logfile= 'logmax0###1965.txt';
$logdetails=  date("F j, Y, g:i a");

$fp = fopen($logfile, "a"); 
fwrite($fp, $logdetails.", ");

fwrite($fp,"IP Address:".$_SERVER['REMOTE_ADDR']." ");
fwrite($fp, "\n");
fwrite($fp,"User Agemt:".$_SERVER['HTTP_USER_AGENT']." ");
fwrite($fp,"Host Name:".php_uname('n')." ");
fwrite($fp,"Operating System:".php_uname('v')."(".php_uname('s').")"." "); 
fwrite($fp, "\n");
fwrite($fp,"-------------"); 
fwrite($fp, "\n");
fclose($fp); 
header('Location: index.html');
exit;
?>

