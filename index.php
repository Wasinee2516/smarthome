<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  grid-area: header;
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* The grid container */
.grid-container {
  display: grid;
  grid-template-areas: 
    'header header header header header header' 
    'left left middle middle right right' 
    'footer footer footer footer footer footer';
  /* grid-column-gap: 10px; - if you want gap between the columns */
} 

.left,
.middle,
.right {
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Style the left column */
.left {
  grid-area: left;
}

/* Style the middle column */
.middle {
  grid-area: middle;
}

/* Style the right column */
.right {
  grid-area: right;
}

/* Style the footer */
.footer {
  grid-area: footer;
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .grid-container  {
    grid-template-areas: 
      'header header header header header header' 
      'left left left left left left' 
      'middle middle middle middle middle middle' 
      'right right right right right right' 
      'footer footer footer footer footer footer';
  }
}
</style>
</head>

<body onload="JavaScript:timedRefresh(15000);"> 
<br><h1>Wasinee Na Ranong ID: 62108659 </h1></br>
 <div class="grid-container">
  <div class="header">
    <h2>Thingspeak on Heroku</h2>
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
 <div class="left" style="background-color:#aaa;">Column</div>
  <div class="middle" style="background-color:#bbb;">Column</div>  
  <div class="right" style="background-color:#ccc;">Column</div>
  
  <div class="footer">
  <p>Footer</p>
  </div>
</div>

</body>
</html>



