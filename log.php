<?php
  // Get the user data from Cloudflare's trace endpoint
  $userData = file_get_contents('https://www.cloudflare.com/cdn-cgi/trace');

  // Add a timestamp to the user data
  $userData .= "\nTimestamp: " . date("Y-m-d H:i:s") . "\n\n";

  // Append the user data to the log file
  $logFile = fopen("log.txt", "a") or die("Unable to open file!");
  fwrite($logFile, $userData);
  fclose($logFile);

  // Echo back the appended data for debugging purposes
  echo $userData;
?>
