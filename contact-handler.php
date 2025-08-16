<?php
// Contact Form Handler for Solectric Solutions
// This file handles contact form submissions and sends emails

// Enable error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set headers for JSON response
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

// If JSON parsing failed, try POST data
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
    http_response_code(400);
    echo json_encode([
        'success' => false, 
        'message' => 'Missing required fields: ' . implode(', ', $missing_fields)
    ]);
    exit;
}

// Sanitize and validate input
$name = filter_var(trim($input['user_name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($input['user_email']), FILTER_SANITIZE_EMAIL);
$phone = filter_var(trim($input['user_phone']), FILTER_SANITIZE_STRING);
$service_type = filter_var(trim($input['service_type']), FILTER_SANITIZE_STRING);
$message = filter_var(trim($input['message']), FILTER_SANITIZE_STRING);

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address']);
    exit;
}

// Validate name length
if (strlen($name) < 2) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Name must be at least 2 characters long']);
    exit;
}

// Validate phone length
if (strlen($phone) < 10) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Phone number must be at least 10 digits']);
    exit;
}

// Validate message length
if (strlen($message) < 10) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Message must be at least 10 characters long']);
    exit;
}

// Configuration
$to_email = 'solectricbengaluru@gmail.com';
$to_name = 'Solectric Solutions Team';
$from_email = 'noreply@solectricsolutions.in'; // Use your domain email
$from_name = 'Solectric Solutions Website';
$subject = "New Solar Inquiry from $name";

// Get current date and time
$date = date('d/m/Y');
$time = date('H:i:s');

// Create email content
$email_content = "
Dear $to_name,

You have received a new inquiry from your website:

Name: $name
Email: $email
Phone: $phone
Service Type: $service_type
Message: $message

Date: $date
Time: $time

Please respond to this inquiry within 24 hours.

Best regards,
$from_name
";

// Create HTML version of email
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
            <p>Dear $to_name,</p>
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
                <span class='label'>Date:</span> $date
            </div>
            <div class='field'>
                <span class='label'>Time:</span> $time
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

// Set up email headers
$headers = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-Type: text/html; charset=UTF-8";
$headers[] = "From: $from_name <$from_email>";
$headers[] = "Reply-To: $name <$email>";
$headers[] = "X-Mailer: PHP/" . phpversion();

// Try to send email
$mail_sent = mail($to_email, $subject, $html_content, implode("\r\n", $headers));

if ($mail_sent) {
    // Log successful submission
    logSubmission($name, $email, $phone, $service_type, $message, true);
    
    // Send confirmation email to customer (optional)
    sendCustomerConfirmation($name, $email, $service_type);
    
    echo json_encode([
        'success' => true, 
        'message' => 'Message sent successfully! We will get back to you within 24 hours.'
    ]);
} else {
    // Log failed submission
    logSubmission($name, $email, $phone, $service_type, $message, false);
    
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Failed to send message. Please try again or contact us directly at +91 95389 21012'
    ]);
}

// Function to log submissions
function logSubmission($name, $email, $phone, $service_type, $message, $success) {
    $log_file = 'contact_log.txt';
    $timestamp = date('Y-m-d H:i:s');
    $status = $success ? 'SUCCESS' : 'FAILED';
    $log_entry = "[$timestamp] [$status] Name: $name, Email: $email, Phone: $phone, Service: $service_type\n";
    
    // Create log file if it doesn't exist
    if (!file_exists($log_file)) {
        file_put_contents($log_file, "Contact Form Submission Log\n" . str_repeat("=", 50) . "\n");
    }
    
    file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
}

// Function to send confirmation email to customer
function sendCustomerConfirmation($name, $email, $service_type) {
    $subject = "Thank you for contacting Solectric Solutions";
    $from_email = 'noreply@solectricsolutions.in';
    $from_name = 'Solectric Solutions';
    
    $html_content = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <title>Thank you for contacting us</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #0f9d58; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f9f9f9; }
            .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>Thank you for contacting us!</h1>
            </div>
            <div class='content'>
                <p>Dear $name,</p>
                <p>Thank you for your interest in our solar solutions. We have received your inquiry for <strong>$service_type</strong> services.</p>
                <p>Our team will review your requirements and get back to you within 24 hours.</p>
                <p>In the meantime, if you have any urgent questions, please feel free to call us at <strong>+91 95389 21012</strong>.</p>
            </div>
            <div class='footer'>
                <p>Best regards,<br>Solectric Solutions Team<br>Email: solectricbengaluru@gmail.com<br>Phone: +91 95389 21012</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    $headers = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-Type: text/html; charset=UTF-8";
    $headers[] = "From: $from_name <$from_email>";
    $headers[] = "X-Mailer: PHP/" . phpversion();
    
    mail($email, $subject, $html_content, implode("\r\n", $headers));
}
?>
