# Hostinger PHP Backend Email Setup Guide

## Overview
This guide will help you set up a PHP-based email system for your Solectric Solutions contact form on Hostinger hosting.

## Files Created
1. `contact-handler.php` - Main PHP script that handles form submissions
2. Updated `script.js` - Modified to use PHP backend instead of EmailJS
3. Updated `index.html` - Removed EmailJS dependency

## Step-by-Step Implementation

### Step 1: Upload Files to Hostinger

1. **Access your Hostinger control panel**
   - Log in to your Hostinger account
   - Go to "Hosting" → "Manage" → "File Manager"

2. **Upload the PHP file**
   - Navigate to your website's root directory (usually `public_html`)
   - Upload `contact-handler.php` to the same folder as your `index.html`

3. **Update existing files**
   - Replace your existing `script.js` with the updated version
   - Replace your existing `index.html` with the updated version

### Step 2: Configure Email Settings

1. **Set up domain email (Recommended)**
   - In Hostinger control panel, go to "Email" → "Create Email Account"
   - Create: `noreply@solectricsolutions.in`
   - This will be used as the "From" email address

2. **Alternative: Use existing email**
   - If you don't want to create a domain email, you can modify the PHP file
   - Change `$from_email = 'noreply@solectricsolutions.in';` to your existing email

### Step 3: Test the System

1. **Test locally first**
   - Upload all files to Hostinger
   - Open your website
   - Fill out the contact form
   - Check if you receive the email at `solectricbengaluru@gmail.com`

2. **Check for errors**
   - If emails aren't being sent, check the `contact_log.txt` file
   - This file will be created automatically in your website directory

### Step 4: Security Configuration

1. **Set proper file permissions**
   - `contact-handler.php`: 644
   - `contact_log.txt`: 666 (if it exists)

2. **Disable error reporting in production**
   - In `contact-handler.php`, comment out or remove these lines:
   ```php
   // error_reporting(E_ALL);
   // ini_set('display_errors', 1);
   ```

## File Structure
```
public_html/
├── index.html
├── script.js
├── styles.css
├── contact-handler.php
├── contact_log.txt (created automatically)
└── Images/
    └── ...
```

## Features of the PHP Backend

### ✅ **Security Features**
- Input validation and sanitization
- CSRF protection through proper headers
- SQL injection prevention
- XSS protection

### ✅ **Email Features**
- HTML formatted emails
- Automatic customer confirmation emails
- Detailed business emails with all form data
- Reply-to functionality

### ✅ **Logging & Monitoring**
- Automatic submission logging
- Success/failure tracking
- Timestamp recording

### ✅ **Error Handling**
- Comprehensive error messages
- Graceful failure handling
- User-friendly error display

## Configuration Options

### Email Recipients
In `contact-handler.php`, you can modify:
```php
$to_email = 'solectricbengaluru@gmail.com';  // Your business email
$from_email = 'noreply@solectricsolutions.in';  // From email address
```

### Email Templates
The PHP file includes both:
1. **Business email template** - Sent to you with inquiry details
2. **Customer confirmation template** - Sent to customers automatically

### Logging
- All form submissions are logged to `contact_log.txt`
- Includes timestamp, status, and basic details
- Useful for monitoring and debugging

## Troubleshooting

### Issue 1: Emails Not Being Sent
**Possible Causes:**
- PHP mail function disabled on Hostinger
- Incorrect email configuration
- Spam filters blocking emails

**Solutions:**
1. Check Hostinger's PHP mail settings
2. Verify email account configuration
3. Check spam/junk folders
4. Review `contact_log.txt` for errors

### Issue 2: Form Not Submitting
**Possible Causes:**
- JavaScript errors
- PHP file not found
- Server configuration issues

**Solutions:**
1. Check browser console (F12) for errors
2. Verify `contact-handler.php` is in the correct location
3. Test PHP file directly in browser

### Issue 3: Validation Errors
**Possible Causes:**
- Form data not being sent correctly
- PHP validation rules too strict

**Solutions:**
1. Check form field names match PHP expectations
2. Adjust validation rules in PHP file if needed

## Advanced Configuration

### Custom Email Templates
You can modify the email templates in `contact-handler.php`:

```php
// Business email template
$html_content = "
<!DOCTYPE html>
<html>
<head>
    <title>New Solar Inquiry</title>
</head>
<body>
    <!-- Your custom HTML email template -->
</body>
</html>
";
```

### Additional Validation
Add more validation rules in the PHP file:

```php
// Example: Phone number format validation
if (!preg_match('/^[0-9+\-\s()]+$/', $phone)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid phone number format']);
    exit;
}
```

### Rate Limiting
Add rate limiting to prevent spam:

```php
// Add this before processing the form
$ip = $_SERVER['REMOTE_ADDR'];
$rate_limit_file = 'rate_limit_' . md5($ip) . '.txt';

if (file_exists($rate_limit_file) && (time() - filemtime($rate_limit_file)) < 300) {
    http_response_code(429);
    echo json_encode(['success' => false, 'message' => 'Too many requests. Please wait 5 minutes.']);
    exit;
}

file_put_contents($rate_limit_file, time());
```

## Monitoring and Maintenance

### Regular Checks
1. **Weekly**: Check `contact_log.txt` for any failed submissions
2. **Monthly**: Test the contact form functionality
3. **Quarterly**: Review and update email templates

### Backup
- Keep backups of your PHP files
- Export contact logs regularly
- Backup email templates

## Support

If you encounter issues:
1. Check this guide's troubleshooting section
2. Review Hostinger's PHP documentation
3. Contact Hostinger support for server-related issues
4. Check `contact_log.txt` for detailed error information

## Performance Optimization

### For High Traffic Sites
1. **Enable caching** for static files
2. **Optimize images** in your website
3. **Use CDN** for better loading speeds
4. **Monitor server resources** usage

### Email Optimization
1. **Batch processing** for multiple emails
2. **Queue system** for high-volume submissions
3. **Email service integration** (SMTP) for better deliverability

## Security Best Practices

1. **Keep PHP files secure**
   - Set proper file permissions
   - Don't expose sensitive information in error messages

2. **Regular updates**
   - Keep PHP version updated
   - Monitor for security patches

3. **Input validation**
   - Always validate and sanitize user input
   - Use prepared statements if using databases

4. **HTTPS**
   - Ensure your website uses HTTPS
   - Secure form submissions

## Success Metrics

Track these metrics to measure success:
- **Form submission rate**
- **Email delivery rate**
- **Response time to inquiries**
- **Customer satisfaction**

## Conclusion

This PHP backend system provides:
- ✅ Reliable email delivery
- ✅ Professional email templates
- ✅ Comprehensive logging
- ✅ Security features
- ✅ Easy maintenance
- ✅ Cost-effective solution

The system is designed to work seamlessly with Hostinger hosting and provides a robust foundation for handling customer inquiries.
