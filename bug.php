```php
<?php
function increment(&$var) {
  $var++;
}

$number = 10;
increment($number);
echo $number; // Outputs 11

$array = [1, 2, 3];
increment($array); //This will cause a warning
echo $array[0]; //Outputs 1
?>
```