<?php
// enhanced-system-info.php

// Ensure the script is running in the console
if (php_sapi_name() !== 'cli') {
    die("This script can only be run from the console.\n");
}

echo "=== Enhanced System Information ===\n\n";

// Current Date and Time
echo "Current Date and Time: " . date('Y-m-d H:i:s') . "\n";

// PHP Version
echo "PHP Version: " . phpversion() . "\n";

// Memory Usage by PHP Script
$memoryUsage = memory_get_usage();
echo "PHP Memory Usage: " . number_format($memoryUsage / 1024, 2) . " KB\n";

// Operating System
echo "Operating System: " . PHP_OS . "\n";

// Current Directory
echo "Current Directory: " . getcwd() . "\n";

// CPU Information
echo "CPU Info: ";
exec('cat /proc/cpuinfo | grep "model name" | uniq', $cpuInfo);
echo $cpuInfo[0] ?? "Unavailable\n";

// Total RAM (Linux Systems)
echo "Total RAM: ";
exec('free -m | grep Mem', $memoryInfo);
if (!empty($memoryInfo[0])) {
    $memoryData = preg_split('/\s+/', $memoryInfo[0]);
    echo $memoryData[1] . " MB\n"; // Total memory
} else {
    echo "Unavailable\n";
}

// Disk Usage
echo "Disk Usage: ";
if (function_exists('disk_free_space') && function_exists('disk_total_space')) {
    $freeSpace = disk_free_space("/");
    $totalSpace = disk_total_space("/");
    if ($freeSpace !== false && $totalSpace !== false) {
        echo number_format($freeSpace / (1024 * 1024), 2) . " MB free out of " . number_format($totalSpace / (1024 * 1024), 2) . " MB total\n";
    } else {
        echo "Unavailable\n";
    }
} else {
    echo "Unavailable\n";
}

// Uptime (Linux Systems)
echo "Uptime: ";
exec('uptime -p', $uptime);
echo $uptime[0] ?? "Unavailable\n";

echo "\n=== End of System Information ===\n";