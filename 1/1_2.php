<?php 

// Get data from file

$data = file_get_contents("./data_2.txt");

$lines = explode("\n", $data);

$leftArray = [];
$rightArray = [];

foreach($lines as $line) {

  $line = explode(" ", $line); 
  $line = array_filter($line);

  $left = $line[0];
  $right = array_pop($line);

  $leftArray[] = $left;
  $rightArray[] = $right;

}

$rightCount = array_count_values($rightArray);


echo print_r($rightCount);

$result = [];
foreach($leftArray as $leftValue) {
  if (isset($rightCount[$leftValue])) {
    $occurenceInRight = $rightCount[$leftValue];
    $result[] = $leftValue * $occurenceInRight;
  }
}

echo "\n sommes \n " ;
echo array_sum($result);

echo "\n sommes \n " ;
?>
