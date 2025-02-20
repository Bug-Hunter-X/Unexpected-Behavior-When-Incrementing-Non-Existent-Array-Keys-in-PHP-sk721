```php
function incrementArrayValue(array &$arr, string $key): void {
  if (!isset($arr[$key])) {
    $arr[$key] = 0; // Initialize if key doesn't exist
  }
  $arr[$key]++;
}

$myArray = [];
incrementArrayValue($myArray, "count");
echo $myArray["count"]; // Outputs 1
incrementArrayValue($myArray, "count");
echo $myArray["count"]; // Outputs 2
```