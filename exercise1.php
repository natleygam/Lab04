<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

$table = array();

for ($x = 0; $x <=100; $x++){
  $table[0][$x] = $x;
}

for ($y = 0; $y <=100; $y++){
  $table[$y][0] = $y;
}


for ($x = 1; $x <=100; $x++){
    for ($y = 1; $y <=100; $y++){
      $table[$y][$x] = $table[$y][0]*$table[0][$x];
    }
}
echo "<table>";
for ($x = 1; $x <=100; $x++){
  echo "<tr>";
    for ($y = 1; $y <=100; $y++){

    echo  "<td>".$table[$y][$x] . " </td>";
    }

    echo "</tr> ";
}
echo "</table>";
?>
