# PHP Nested Array Summation with Robust Error Handling

This repository demonstrates a common error in PHP when recursively summing elements of a nested array and provides a solution with improved error handling.

The `bug.php` file showcases a function that attempts to sum elements within a potentially nested array but lacks robustness in handling non-numeric values. The `bugSolution.php` file presents an enhanced version that gracefully addresses various potential issues like non-numeric values or invalid input types.

## Bug Description:
The initial implementation uses a recursive approach for summing elements but it can throw exceptions when encountering non-numeric values inside nested arrays.  The handling of potential errors is not comprehensive.

## Solution:
The improved solution includes more comprehensive type checking using `is_numeric()` and `is_array()` functions to identify and handle non-numeric or non-array elements effectively. If invalid data is encountered, a more informative exception is thrown, improving error reporting and debugging. 