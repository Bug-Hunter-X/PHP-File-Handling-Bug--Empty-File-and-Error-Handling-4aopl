```php
$file = fopen("path/to/file.txt", "r");
if ($file === false) {
    $error = error_get_last();
    die("Error opening file: " . $error['message']);
} else {
    while (!feof($file)) {
        $line = fgets($file);
        if ($line !== false) {
            // Process the line
echo $line;
        } else {
            //handle read error
        }
    }
    fclose($file);
}
```