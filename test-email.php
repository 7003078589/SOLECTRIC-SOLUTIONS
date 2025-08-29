<?php
// Test Hostinger Email Configuration for Solectric Solutions
// This file helps verify that your email setup is working correctly

// Enable error reporting for testing
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Hostinger Email Configuration Test</h1>";
echo "<p>Testing email configuration for solectricsolutions.in</p>";

// Test data
$test_data = [
    'user_name' => 'Test User',
    'user_email' => 'test@example.com',
    'user_phone' => '1234567890',
    'service_type' => 'residential',
    'message' => 'This is a test message from Hostinger email configuration. If you receive this, your email setup is working correctly!'
];

echo "<h2>Test Data:</h2>";
echo "<pre>";
print_r($test_data);
echo "</pre>";

// Simulate POST request
$_POST = $test_data;

echo "<h2>Testing Email Sending...</h2>";

// Capture output from contact handler
ob_start();

try {
    // Include the contact handler
    include 'contact-handler.php';
    
    $output = ob_get_clean();
    
    echo "<h3>Response:</h3>";
    echo "<pre>" . htmlspecialchars($output) . "</pre>";
    
    // Parse JSON response
    $response = json_decode($output, true);
    
    if ($response && isset($response['success'])) {
        if ($response['success']) {
            echo "<div style='background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
            echo "<strong>✅ SUCCESS!</strong> Email configuration is working correctly.";
            echo "<br>Message: " . htmlspecialchars($response['message']);
            echo "</div>";
        } else {
            echo "<div style='background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
            echo "<strong>❌ ERROR!</strong> Email configuration failed.";
            echo "<br>Error: " . htmlspecialchars($response['message']);
            echo "</div>";
        }
    } else {
        echo "<div style='background: #fff3cd; color: #856404; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
        echo "<strong>⚠️ WARNING!</strong> Could not parse response. Check the output above.";
        echo "</div>";
    }
    
} catch (Exception $e) {
    ob_end_clean();
    echo "<div style='background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
    echo "<strong>❌ EXCEPTION!</strong> An error occurred during testing.";
    echo "<br>Error: " . htmlspecialchars($e->getMessage());
    echo "</div>";
}

echo "<h2>Next Steps:</h2>";
echo "<ol>";
echo "<li>Check your email inbox at <strong>solectricbengaluru@gmail.com</strong></li>";
echo "<li>If you received the test email, your configuration is working!</li>";
echo "<li>If not, check the error messages above and refer to the setup guide</li>";
echo "<li>Delete this test file after successful testing</li>";
echo "</ol>";

echo "<h2>Troubleshooting Tips:</h2>";
echo "<ul>";
echo "<li>Make sure you've updated the password in contact-handler.php</li>";
echo "<li>Check if SMTP ports (587/465) are open on your server</li>";
echo "<li>Verify your Hostinger email credentials</li>";
echo "<li>Check the contact_log.txt file for detailed logs</li>";
echo "</ul>";

echo "<p><strong>Note:</strong> This test file should be deleted after successful testing for security reasons.</p>";
?>
