# PHP File Handling Bug: Empty File and Incorrect Error Handling

This repository demonstrates a common bug in PHP file handling that can lead to unexpected behavior when dealing with empty files or file opening errors. The `bug.php` file contains the problematic code, while `bugSolution.php` provides a corrected version.

## Bug Description
The original code fails to properly handle potential errors during file opening and may prematurely terminate processing of an empty file.  The error handling is also insufficient.

## Solution
The solution uses `fopen()` with error checking and detailed error reporting. It uses `fgets` in a loop to safely process each line and handles empty files gracefully.