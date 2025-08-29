# Hostinger Email Setup Guide for Solectric Solutions

## 🎯 Overview
This guide will help you configure your Hostinger email service to work with your contact form. Your Hostinger email is now activated for `solectricsolutions.in` with the Business Premium plan.

## 📋 Prerequisites
- ✅ Hostinger email activated (Business Premium plan)
- ✅ Domain connected to email service
- ✅ Access to Hostinger email dashboard

## 🔧 Step-by-Step Configuration

### Step 1: Get Your Hostinger Email Credentials

1. **Login to Hostinger Email Dashboard**
   - Go to your Hostinger email dashboard
   - Navigate to "Connect Apps & Devices" in the left sidebar

2. **Find SMTP Settings**
   - Look for "SMTP Settings" or "Email Client Configuration"
   - Note down these details:
     - **SMTP Server**: `smtp.hostinger.com`
     - **SMTP Port**: `587` (TLS) or `465` (SSL)
     - **Username**: `info@solectricsolutions.in`
     - **Password**: Your Hostinger email password
     - **Security**: TLS (recommended) or SSL

### Step 2: Update PHP Configuration

1. **Edit `contact-handler.php`**
   - Open the file in your code editor
   - Find the `$hostinger_config` array (around line 70)
   - Replace `YOUR_HOSTINGER_EMAIL_PASSWORD` with your actual password

```php
$hostinger_config = [
    'smtp_host' => 'smtp.hostinger.com',
    'smtp_port' => 587,
    'smtp_username' => 'info@solectricsolutions.in',
    'smtp_password' => 'YOUR_ACTUAL_PASSWORD_HERE', // ← Replace this
    'smtp_secure' => 'tls'
];
```

### Step 3: Test Your Email Configuration

1. **Create a Test File**
   - Create `test-email.php` in your root directory
   - Use this simple test script:

```php
<?php
// Test Hostinger Email Configuration
require_once 'contact-handler.php';

// Test data
$test_data = [
    'user_name' => 'Test User',
    'user_email' => 'test@example.com',
    'user_phone' => '1234567890',
    'service_type' => 'residential',
    'message' => 'This is a test message from Hostinger email configuration.'
];

// Simulate POST request
$_POST = $test_data;

// Include the contact handler
include 'contact-handler.php';
?>
```

2. **Run the Test**
   - Upload the test file to your server
   - Visit `https://solectricsolutions.in/test-email.php`
   - Check if you receive the test email

### Step 4: Install PHPMailer (Recommended)

For better email reliability, install PHPMailer:

1. **Download PHPMailer**
   ```bash
   composer require phpmailer/phpmailer
   ```

2. **Or Manual Installation**
   - Download PHPMailer from GitHub
   - Extract to your project directory
   - Add this to the top of `contact-handler.php`:

```php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
```

### Step 5: Email Configuration Setup

Your website is configured with the following email setup:

1. **Contact Display**: `solectricbengaluru@gmail.com` (shown to customers)
2. **Email Sending**: `info@solectricsolutions.in` (Hostinger email for sending)
3. **Email Receiving**: `solectricbengaluru@gmail.com` (where you receive inquiries)

This setup provides:
- Professional email sending from your domain
- All inquiries go to your existing Gmail account
- Better email deliverability through Hostinger SMTP

## 🔍 Troubleshooting

### Common Issues and Solutions

#### Issue 1: Emails Not Sending
**Symptoms**: Form submission shows success but no email received

**Solutions**:
1. Check SMTP credentials in `contact-handler.php`
2. Verify Hostinger email password is correct
3. Check if port 587 is open on your server
4. Try port 465 with SSL instead of TLS

#### Issue 2: Authentication Failed
**Symptoms**: "SMTP authentication failed" error

**Solutions**:
1. Double-check username and password
2. Ensure you're using the correct email address format
3. Check if 2FA is enabled on your Hostinger email
4. Try generating an app-specific password

#### Issue 3: Connection Timeout
**Symptoms**: "Connection timed out" error

**Solutions**:
1. Check if SMTP ports are blocked by your hosting provider
2. Try different SMTP ports (587, 465, 25)
3. Contact Hostinger support for SMTP access

#### Issue 4: Emails Going to Spam
**Symptoms**: Emails received but in spam folder

**Solutions**:
1. Set up SPF, DKIM, and DMARC records
2. Use proper "From" address matching your domain
3. Avoid spam trigger words in subject lines
4. Warm up your email sending gradually

### Debug Mode

Enable debug mode by adding this to `contact-handler.php`:

```php
// Add this at the top for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'email_errors.log');
```

## 📧 Email Templates

### Customer Confirmation Email
The system automatically sends a confirmation email to customers with:
- Thank you message
- Service type confirmation
- Contact information
- Response time expectation

### Admin Notification Email
You'll receive detailed inquiry emails with:
- Customer contact information
- Service type requested
- Full message content
- Timestamp and date

## 🔒 Security Best Practices

1. **Password Security**
   - Use a strong, unique password for your Hostinger email
   - Consider using an app-specific password
   - Never commit passwords to version control

2. **Input Validation**
   - All form inputs are sanitized and validated
   - Email addresses are verified
   - Phone numbers are checked for minimum length

3. **Rate Limiting**
   - Consider implementing rate limiting to prevent spam
   - Add CAPTCHA for additional protection

## 📊 Monitoring and Logs

### Email Logs
The system creates `contact_log.txt` with:
- Timestamp of each submission
- Success/failure status
- Customer information (name, email, phone, service)

### Error Logs
Check `email_errors.log` for:
- SMTP connection errors
- Authentication failures
- Email sending issues

## 🚀 Performance Optimization

1. **Email Queue**
   - Consider implementing an email queue for high traffic
   - Use background processing for email sending

2. **Caching**
   - Cache email templates
   - Minimize database queries

3. **Monitoring**
   - Set up email delivery monitoring
   - Track bounce rates and spam complaints

## 📞 Support

If you encounter issues:

1. **Check Hostinger Email Dashboard**
   - Verify email settings
   - Check email logs
   - Test email sending from dashboard

2. **Contact Hostinger Support**
   - For SMTP configuration issues
   - For email delivery problems
   - For account-specific issues

3. **Check Server Logs**
   - Review PHP error logs
   - Check email sending logs
   - Monitor server performance

## ✅ Final Checklist

- [ ] Hostinger email activated and configured
- [ ] SMTP credentials updated in `contact-handler.php`
- [ ] Test email sent and received successfully
- [ ] Website email addresses updated
- [ ] PHPMailer installed (optional but recommended)
- [ ] Email templates customized
- [ ] Security measures implemented
- [ ] Monitoring and logging set up

## 🎉 Success!

Once all steps are completed, your contact form will:
- Send emails through your Hostinger email service
- Provide better deliverability than Gmail
- Include professional branding
- Send automatic confirmations to customers
- Log all submissions for tracking

Your solar business will now have a professional, reliable email system integrated with your website!
