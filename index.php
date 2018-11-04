<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <script src="js/main.js"></script>
    <script src='js/jquery-3.3.1.min.js'></script>
  </head>
<body background="./assets/background.png">

<div class="header">
  <h1>EXPONDENT</h1>
  <h5>ALWAYS READY TO ASSIST</h5>
  <h5>+44 741 834 3330</h5>
</div>

<div class="message">
  <h2>EMERGENCY SMS MESSAGE</h2>
  <form action="http://51.15.114.121:1880/form" class="broadcast_form" method="post">
    <p>This SMS message will be sent to the listed phone number. Please use responsibly.</p><br>
    <p></p><input type="text" name="message" placeholder="Message"><br>
    <p></p><input type="text" name="dest" placeholder="Phone Number"><br>
    <input class="button" type="submit" value="SEND">
  </form>
</div>

<div class="message">
  <h2>RESPONDERS SMS MESSAGE</h2>
  <form action="http://51.15.114.121:1880/allnum" class="broadcast_form" method="post">
    <p>This SMS message will be sent to all listed phone numbers of first respondents. Please use responsibly.</p><br>
    <p></p><input type="text" name="message" placeholder="Message"><br>
    <input class="button" type="submit" value="SEND">
  </form>
</div>

<div class="helpline">
  <?php
  $html = "<h2>HELPLINE MESSAGES</h2>";
  if ($handle = scandir("./entries/")) {
    foreach ($handle as $entry) {
      if ($entry != "." && $entry != "..") {
        $html .= "<div class='helpline_entry' id='$entry'>" +
          "<p>$entry</p>" +
          "<audio controls><source src='./entries/$entry' type='audio/mp3'>" +
          "</div>";
      }
    } $html .= "<p>All entries loaded from server</p>";
  } else {
    $html .= "<p>Error reading files from server</p>";
  } echo $html;
   ?>
</div>

<div class="footer">
  <label>Developed by Ben, Phoebe, Alistair and Jess for Hack The Midlands 2018</label>
</div>
</body>
</html>
