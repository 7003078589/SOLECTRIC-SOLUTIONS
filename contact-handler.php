<?php
// Contact Form Handler for Solectric Solutions
// Simplified and robust version for Hostinger Email

// Prevent any HTML error output
error_reporting(0);
ini_set('display_errors', 0);

// Set headers for JSON response
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Function to send JSON response and exit
function sendJsonResponse($success, $message, $statusCode = 200) {
    http_response_code($statusCode);
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendJsonResponse(false, 'Method not allowed', 405);
}

// Get input data
$input = json_decode(file_get_contents('php://input'), true);
if (!$input) {
    $input = $_POST;
}

// Validate required fields
$required_fields = ['user_name', 'user_email', 'user_phone', 'service_type', 'message'];
$missing_fields = [];

foreach ($required_fields as $field) {
    if (empty($input[$field])) {
        $missing_fields[] = $field;
    }
}

if (!empty($missing_fields)) {
    sendJsonResponse(false, 'Missing required fields: ' . implode(', ', $missing_fields), 400);
}

// Sanitize and validate input
$name = trim($input['user_name']);
$email = trim($input['user_email']);
$phone = trim($input['user_phone']);
$service_type = trim($input['service_type']);
$message = trim($input['message']);

// Basic validation
if (strlen($name) < 2) {
    sendJsonResponse(false, 'Name must be at least 2 characters long', 400);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    sendJsonResponse(false, 'Invalid email address', 400);
}

if (strlen($phone) < 10) {
    sendJsonResponse(false, 'Phone number must be at least 10 digits', 400);
}

if (strlen($message) < 10) {
    sendJsonResponse(false, 'Message must be at least 10 characters long', 400);
}

// Email configuration
$to_email = 'solectricbengaluru@gmail.com';
$from_email = 'info@solectricsolutions.in';
$from_name = 'Solectric Solutions Website';
$subject = "New Solar Inquiry from $name";

// Create email content
$email_content = "
New inquiry from website:

Name: $name
Email: $email
Phone: $phone
Service Type: $service_type
Message: $message

Date: " . date('d/m/Y H:i:s') . "

Please respond within 24 hours.
";

// Create HTML version
$html_content = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>New Solar Inquiry</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #0f9d58; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f9f9f9; }
        .field { margin: 10px 0; }
        .label { font-weight: bold; color: #0f9d58; }
        .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>New Solar Inquiry</h1>
        </div>
        <div class='content'>
            <p>You have received a new inquiry from your website:</p>
            
            <div class='field'>
                <span class='label'>Name:</span> $name
            </div>
            <div class='field'>
                <span class='label'>Email:</span> <a href='mailto:$email'>$email</a>
            </div>
            <div class='field'>
                <span class='label'>Phone:</span> <a href='tel:$phone'>$phone</a>
            </div>
            <div class='field'>
                <span class='label'>Service Type:</span> $service_type
            </div>
            <div class='field'>
                <span class='label'>Message:</span><br>
                " . nl2br(htmlspecialchars($message)) . "
            </div>
            
            <div class='field'>
                <span class='label'>Date:</span> " . date('d/m/Y H:i:s') . "
            </div>
            
            <p>Please respond to this inquiry within 24 hours.</p>
        </div>
        <div class='footer'>
            <p>Best regards,<br>$from_name</p>
        </div>
    </div>
</body>
</html>
";

// Try to send email using basic mail() function first
$headers = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-Type: text/html; charset=UTF-8";
$headers[] = "From: $from_name <$from_email>";
$headers[] = "Reply-To: $from_name <$from_email>";
$headers[] = "X-Mailer: PHP/" . phpversion();

$mail_sent = mail($to_email, $subject, $html_content, implode("\r\n", $headers));

if ($mail_sent) {
    // Log successful submission
    $log_entry = "[" . date('Y-m-d H:i:s') . "] SUCCESS - Name: $name, Email: $email, Phone: $phone, Service: $service_type\n";
    file_put_contents('contact_log.txt', $log_entry, FILE_APPEND | LOCK_EX);
    
    sendJsonResponse(true, 'Message sent successfully! We will get back to you within 24 hours.');
} else {
    // Log failed submission
    $log_entry = "[" . date('Y-m-d H:i:s') . "] FAILED - Name: $name, Email: $email, Phone: $phone, Service: $service_type\n";
    file_put_contents('contact_log.txt', $log_entry, FILE_APPEND | LOCK_EX);
    
    sendJsonResponse(false, 'Failed to send message. Please try again or contact us directly at +91 95389 21012', 500);
}
?>
