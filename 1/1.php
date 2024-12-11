<?php 


// Get data from file

$data = file_get_contents("./data.txt");

$lines = explode("\n", $data);

$leftArray = [];
$rightArray = [];

// echo print_r($lines);

echo "\n";
foreach($lines as $line) {
  $line = explode(" ", $line); 
  $line = array_filter($line);
  echo print_r($line);
  $left = $line[0];
  $right = array_pop($line);

  $leftArray[] = $left;
  $rightArray[] = $right;
}

 echo print_r($leftArray);
 echo print_r($rightArray);

sort($leftArray, SORT_NUMERIC);
sort($rightArray, SORT_NUMERIC);

$result = [];
  $test = [];
$counter = 1;
foreach($leftArray as $i => $leftValue) {
  $rightValue = $rightArray[$i];

echo "\n Left value :   ";
  echo $leftValue;
echo "right value :   ";
  echo $rightValue;
echo "\n";
  $test[] = [$leftValue, $rightValue, $i];
  $result[] = abs($leftValue - $rightValue);

  $counter++;
if ($counter > 15) {
     // echo print_r($test);
     // exit();
  }

};

echo print_r($result);

$sommes = array_sum($result);

echo "\n Sommes \n ";
echo $sommes;

echo "\n Sommes \n ";
?>
