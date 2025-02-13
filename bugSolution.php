```php
<?php
function increment(&$var) {
  if (is_int($var)) {
    $var++;
  } else {
    //Handle non-integer values appropriately
    trigger_error('Cannot increment non-integer value', E_USER_WARNING);
  }
}

$number = 10;
increment($number);
echo $number; // Outputs 11

$array = [1, 2, 3];
//increment($array); //This will now trigger a warning

//Instead handle the array explicitly
$array[0]++;
echo $array[0]; // Outputs 2
?>
```