<!DOCTYPE html>
<html>
<head>
  <title>Page Views Counter</title>
</head>
<body>
 <h1>HRITHIK N R - 4JK20IS020</h1>
  <?php
  print "<h3>REFRESH PAGE</h3>";
  $name = "counter.txt";
  $file = fopen($name, "r");
  $hits = fscanf($file, "%d");
  fclose($file);
  $hits[0]++;
  $file = fopen($name, "w");
  fprintf($file, "%d", $hits[0]);
  fclose($file);
  print "Total number of views: ".$hits[0];
  ?>
</body>
</html>S