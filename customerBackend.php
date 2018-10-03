<?php
//access the global array called $_POST to get the values from the text fields
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
  $user = $_POST["username"];
  $pword = $_POST["pword"];
  $apple = $_POST["apples"];
  $pears = $_POST["pears"];
  $peach = $_POST["peaches"];
  $ship = $_POST["ship"];
  if($ship=="7day"){
    $shipm = 0;
  }
  else if($ship=="overnight"){
    $shipm = 50;
  }
  else if($ship=="3day"){
    $shipm = 5;
  }

  $total = $shipm + $apple*0.99 + $pears*1.00 + $peach*2.00;
  $print = false;
  for($i=0;$i<strlen($user);$i=$i+1){
    if($user[$i]=='@'){
      $print=true;

      break;
    }
  }
  if($print==true){
    $print=false;
    for($j=$i;$j<strlen($user);$j=$j+1){
      if($user[$j]=='.'){

        $print=true;
        break;
      }
    }
  }
 if(is_numeric($apple)==false||is_numeric($peach)==false||is_numeric($pears)==false|| empty($user||$pword||$apple||$pears||$peach||$ship)||$print==false)
 {
   echo "<br><h1>Invalid input</h1><br>";
   //echo "<script type='text/javascript' src='exercise3'></script>";
   //echo "<script>window.location = 'https://people.eecs.ku.edu/~n662l546/exercise3.htm'</script>";
 }
 else if($print==true)
  {
  echo "Welcome ".$user.", <br><br>Your total is: " .$total. "<br><br>";
  echo "Here is your receipt: <br><br>";
  echo '<div background-color: lightgrey; width: 300px; border: 25px solid green; padding: 25px;margin: 25px>';
  echo " Item | Quantity | Cost Per Item | Subtotal <br>";
  echo "Apples | ".$apple ." | $0.99 | $". ($apple*0.99) ."<br>";
  echo "Pears | ".$pears ." | $1.00 | $". $pears ."<br>";
  echo "Peaches | ".$peach ." | $2.00 | $". ($peach*2) ."<br>";
  echo "Shipping | ". $ship ." | $".$shipm."<br>";
  echo "Total   $".$total;
  echo '</div>';

  }

?>
