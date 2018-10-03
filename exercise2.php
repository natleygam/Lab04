<?php
//access the global array called $_POST to get the values from the text fields
$australia = $_POST["Australia"];
$mexico = $_POST["Mexico"];
$caribbean = $_POST["Caribbean"];
$biggest = $_POST["Biggest"];
$asia = $_POST["Asia"];
$counter = 0;

if($australia=="Canberra")
{
  $counter++;
}
if($mexico=="Enrique Pena Nieto")
{
  $counter++;

}
if($caribbean=="Cayman Islands")
{
  $counter++;

}
if($biggest=="Russia")
{
  $counter++;

}
if($asia=="Macau")
{
  $counter++;
}
if($counter==5){
  echo "Congratulations! <br> You have obtained the highest score!<br>";
}
echo "Your Score is: ". $counter. " out of 5";

$percent = ($counter/5)*100;

echo " = ".$percent."% <br><br>What is the capital of Australia?<br>You answered: ". $australia;

echo "<br> Correct Answer: Canberra <br><br>

Who is the president of Mexico?<br>  You answered: ". $mexico;

echo "<br> Correct Answer: Enrique Pena Nieto <br><br>

Which of the following is an island in the Caribbean?<br> You answered " .$caribbean;
echo "<br> Correct Answer: Cayman Islands<br><br>

Which is the biggest country?<br> You answered: " .$biggest;

echo " <br>Correct Answer: Russia <br> <br>Which of the following countries is in Asia?<br> You answered: " .$asia;
echo "<br>Correct Answer: Macau";
?>
