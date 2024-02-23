<?php
function truncate_title($title) {
  if (strlen($title) <= 50) {
    return $title;
  } else {
    return substr($title, 0, 47) . "...";
  }
}

// Example usage
$title = "This is a very long article title that needs to be truncated";
$truncated_title = truncate_title($title);

echo "Original title: $title";
echo "<br>";
echo "Truncated title: $truncated_title";
?>
