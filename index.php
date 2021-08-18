<!DOCTYPE html>
<html lang="en">
<head>
<title>Workshop_62108659</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 25px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>

<body onload="JavaScript:timedRefresh(15000);"> 
<br><h1>Wasinee Na Ranong ID: 62108659 </h1></br>
 <div class="grid-container">
  <div class="header">
    <h3>Thingspeak on Heroku</h3>
  </div>
<iframe src="https://thingspeak.com/channels/1458415/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="260"></iframe>
<iframe src="https://thingspeak.com/channels/1458415/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="260"></iframe>
<iframe src="https://thingspeak.com/channels/1458415/maps/channel_show" width="450" height="260"></iframe>
<?php
 $Temperature = file_get_contents('https://api.thingspeak.com/channels/1458415/fields/1/last.txt');
 $Humidity = file_get_contents('https://api.thingspeak.com/channels/1458415/fields/2/last.txt');
?>
<script type="text/JavaScript">
function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}
</script>
 <br> </br>  
 <br> <?php echo "Humidity is = ".$Temperature ?> </br> 
 <br> <?php echo " Temperature is = ".$Humidity ?> </br>
  <div class="footer">
  <p>Workshop</p>
  </div>
</div>

</body>
</html>



