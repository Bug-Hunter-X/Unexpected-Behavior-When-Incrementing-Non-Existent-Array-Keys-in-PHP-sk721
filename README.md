# PHP Array Increment Bug

This repository demonstrates an uncommon error in PHP related to incrementing array values when the key might not exist.  Incorrect handling can lead to unexpected behavior or errors.

The `bug.php` file shows the problematic code, while `bugSolution.php` provides a corrected version.

The issue stems from PHP's loose typing system. When you try to increment a non-existent array element, PHP implicitly converts the non-existent value to 0 before incrementing.  However, this implicit behavior can be misleading and lead to unexpected results if not explicitly handled.

The solution demonstrates the correct approach by checking for the existence of the key using `isset()` before incrementing the value. This prevents errors and ensures predictable behavior.

This example highlights the importance of careful type handling in PHP to avoid subtle bugs and maintain code robustness.