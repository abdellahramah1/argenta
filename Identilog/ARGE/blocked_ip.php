<?php
// Path to the text file containing blocked IPs
$blocked_ips_file = 'blocked_ips.txt';

// Check if 'ip' parameter is provided in the query string
if (isset($_GET['ip'])) {
    $new_ip = trim($_GET['ip']); // Get the IP from the query string and trim whitespace

    // Validate the IP address
    if (filter_var($new_ip, FILTER_VALIDATE_IP)) {
        // Check if the file exists and the IP is not already in the file
        if (file_exists($blocked_ips_file)) {
            $blocked_ips = file($blocked_ips_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            if (!in_array($new_ip, $blocked_ips)) {
                // Append the IP to the file
                file_put_contents($blocked_ips_file, $new_ip . PHP_EOL, FILE_APPEND);
                $message = "IP address $new_ip has been added to the block list.";
            } else {
                $message = "IP address $new_ip is already in the block list.";
            }
        } else {
            // Create the file and add the IP if it doesn't exist
            file_put_contents($blocked_ips_file, $new_ip . PHP_EOL);
            $message = "IP address $new_ip has been added to the block list.";
        }
    } else {
        $message = "Invalid IP address.";
    }
} else {
    $message = "No IP address provided.";
}
?>