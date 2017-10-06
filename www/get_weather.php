<?php
  if(isset($_GET["city"])) echo file_get_contents("http://weather.livedoor.com/forecast/webservice/json/v1?city=" . $_GET["city"]);
?>

