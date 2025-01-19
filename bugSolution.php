```php
<?php
function double_array_sum(array $arr): int {
  $sum = 0;
  foreach ($arr as $val) {
    if (is_array($val)) {
      $sum += double_array_sum($val); // Recursive call
    } elseif (is_numeric($val)) {
      $sum += $val;
    } else {
      //Improved error handling
      throw new InvalidArgumentException("Non-numeric value encountered: " . print_r($val, true));
    }
  }
  return $sum;
}

// Example Usage:
$arr1 = [1, 2, [3, 4], 5];
$sum1 = double_array_sum($arr1);
echo "Sum of array 1: " . $sum1 . "\n"; // Output: 15

$arr2 = [1, 2, [3, 'a'], 5];
try {
  $sum2 = double_array_sum($arr2); 
  echo "Sum of array 2: " . $sum2 . "\n";
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage() . "\n"; // Catches and handles the exception
}

?>
```