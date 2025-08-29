<?php
// Hostinger Email Activity Checker
// This script helps verify email activity on your Hostinger server

echo "<h1>📧 Hostinger Email Activity Check</h1>";

// Check if contact log exists and show recent activity
$log_file = 'contact_log.txt';
if (file_exists($log_file)) {
    echo "<h2>📋 Recent Contact Form Activity:</h2>";
    echo "<div style='background: #f5f5f5; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
    $log_content = file_get_contents($log_file);
    $lines = explode("\n", $log_content);
    $recent_lines = array_slice($lines, -10); // Show last 10 entries
    foreach ($recent_lines as $line) {
        if (trim($line) !== '') {
            if (strpos($line, 'SUCCESS') !== false) {
                echo "<p style='color: green;'>✅ " . htmlspecialchars($line) . "</p>";
            } elseif (strpos($line, 'FAILED') !== false) {
                echo "<p style='color: red;'>❌ " . htmlspecialchars($line) . "</p>";
            } else {
                echo "<p>" . htmlspecialchars($line) . "</p>";
            }
        }
    }
    echo "</div>";
} else {
    echo "<p>❌ No contact log found yet.</p>";
}

// Show current email configuration
echo "<h2>⚙️ Current Email Configuration:</h2>";
echo "<div style='background: #e8f5e8; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
echo "<p><strong>From Email:</strong> info@solectricsolutions.in</p>";
echo "<p><strong>To Email:</strong> rsingh70090@gmail.com (Testing)</p>";
echo "<p><strong>SMTP Host:</strong> smtp.hostinger.com</p>";
echo "<p><strong>SMTP Port:</strong> 587</p>";
echo "</div>";

// Check server information
echo "<h2>🖥️ Server Information:</h2>";
echo "<div style='background: #f0f8ff; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
echo "<p><strong>Server:</strong> " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p><strong>PHP Version:</strong> " . phpversion() . "</p>";
echo "<p><strong>Current Time:</strong> " . date('Y-m-d H:i:s') . "</p>";
echo "</div>";

// Instructions for Hostinger dashboard
echo "<h2>📊 How to Check in Hostinger Dashboard:</h2>";
echo "<div style='background: #fff3cd; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
echo "<ol>";
echo "<li><strong>Login to Hostinger:</strong> Go to https://hpanel.hostinger.com</li>";
echo "<li><strong>Navigate to Email:</strong> Click on 'Email' in the left sidebar</li>";
echo "<li><strong>Select Email Account:</strong> Click on 'info@solectricsolutions.in'</li>";
echo "<li><strong>Check Email Activity:</strong> Look for 'Email Activity' or 'Logs' section</li>";
echo "<li><strong>Check Sent Emails:</strong> Look for emails sent to rsingh70090@gmail.com</li>";
echo "</ol>";
echo "</div>";

// Test email functionality
echo "<h2>🧪 Test Email Function:</h2>";
echo "<form method='post' style='background: #f8f9fa; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
echo "<p><strong>Send a test email to verify functionality:</strong></p>";
echo "<input type='hidden' name='test_email' value='1'>";
echo "<button type='submit' style='background: #0f9d58; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;'>Send Test Email</button>";
echo "</form>";

// Handle test email
if (isset($_POST['test_email'])) {
    $test_subject = "Test Email from Solectric Solutions - " . date('Y-m-d H:i:s');
    $test_message = "
    <html>
    <body>
        <h2>Test Email from Hostinger</h2>
        <p>This is a test email to verify that your Hostinger email system is working correctly.</p>
        <p><strong>Sent from:</strong> info@solectricsolutions.in</p>
        <p><strong>Sent to:</strong> rsingh70090@gmail.com</p>
        <p><strong>Date:</strong> " . date('Y-m-d H:i:s') . "</p>
        <p>If you receive this email, your Hostinger email configuration is working perfectly!</p>
    </body>
    </html>";
    
    $headers = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-Type: text/html; charset=UTF-8";
    $headers[] = "From: Solectric Solutions <info@solectricsolutions.in>";
    $headers[] = "Reply-To: info@solectricsolutions.in";
    
    $test_sent = mail('rsingh70090@gmail.com', $test_subject, $test_message, implode("\r\n", $headers));
    
    if ($test_sent) {
        echo "<p style='color: green; background: #d4edda; padding: 10px; border-radius: 5px;'>✅ Test email sent successfully! Check rsingh70090@gmail.com</p>";
    } else {
        echo "<p style='color: red; background: #f8d7da; padding: 10px; border-radius: 5px;'>❌ Test email failed to send</p>";
    }
}

echo "<h2>📝 Next Steps:</h2>";
echo "<ul>";
echo "<li>✅ Email system is working (confirmed by receiving emails)</li>";
echo "<li>🔄 Change email back to solectricbengaluru@gmail.com after testing</li>";
echo "<li>📊 Monitor Hostinger dashboard for email activity</li>";
echo "<li>📧 Check spam folder if emails don't appear in inbox</li>";
echo "</ul>";
?>
