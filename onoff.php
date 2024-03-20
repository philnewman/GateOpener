<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<?php
if(isset($_POST["on"])) {
  $result=shell_exec('/var/www/html/on.py');
  echo $result;
}
if(isset($_POST["off"])) {
  $result=shell_exec('/var/www/html/off.py');
  echo $result;
}
$result=shell_exec('/var/www/html/status.py');
echo $result;
?>
<form method="POST" />
  <input type="submit" value="On" name="on" /><p>
  <input type="submit" value="Off" name="off" />
</form>
</body>
</html>
