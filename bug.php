```php
<?php
function double_array_sum(array $arr): int {
  $sum = 0;
  foreach ($arr as $val) {
    if (is_array($val)) {
      $sum += array_sum($val); // Recursive call for nested arrays
    } else if (is_numeric($val)) {
      $sum += $val;
    } else {
      // Handle non-numeric values appropriately
      // For this example, we'll throw an exception
      throw new InvalidArgumentException('Array elements must be numeric or arrays of numerics.');
    }
  }
  return $sum;
}

// Example Usage:
$arr1 = [1, 2, [3, 4], 5];
$sum1 = double_array_sum($arr1);
echo "Sum of array 1: " . $sum1 . "\n"; // Output: 15

$arr2 = [1, 2, [3, 'a'], 5];
$sum2 = double_array_sum($arr2); // Throws exception
echo "Sum of array 2: " . $sum2 . "\n";

?>
```