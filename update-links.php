<?php
// Script to remove .php extensions from all href attributes in PHP files

// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

// Files to exclude
$exclude_files = ['update-links.php'];

// Get all PHP files in the current directory
$php_files = glob("*.php");

// Add PHP files in core directory
$core_files = glob("core/*.php");
$php_files = array_merge($php_files, $core_files);

echo "Starting to update links in " . count($php_files) . " PHP files...\n";

$total_replacements = 0;

foreach ($php_files as $file) {
    // Skip excluded files
    if (in_array(basename($file), $exclude_files)) {
        echo "Skipping {$file}\n";
        continue;
    }
    
    // Read file content
    $content = file_get_contents($file);
    
    // Replace .php in href attributes
    $pattern = '/href="([^"]+)\.php([#"])/';
    $replacement = 'href="$1$2';
    
    // Perform replacement
    $new_content = preg_replace($pattern, $replacement, $content, -1, $count);
    
    if ($count > 0) {
        // Write updated content back to file
        file_put_contents($file, $new_content);
        echo "Updated {$count} links in {$file}\n";
        $total_replacements += $count;
    } else {
        echo "No links found in {$file}\n";
    }
}

echo "Completed! Total links updated: {$total_replacements}\n"; 