# Email Setup Guide for Solectric Solutions

## Overview
Your website already has EmailJS integrated to handle contact form submissions. This guide explains how it works and how to ensure it's properly configured.

## Current Configuration

### EmailJS Setup
- **Public Key**: `sucGvi6iQ4QhmQQdy`
- **Service ID**: `service_vkqkgbo`
- **Template ID**: `template_j854a45`
- **Recipient Email**: `solectricbengaluru@gmail.com`

## How It Works

### 1. Contact Form Submission
When a client fills out the contact form on your website:

1. **Form Validation**: The system validates all required fields
2. **Data Collection**: Collects client information (name, email, phone, service type, message)
3. **Email Sending**: Uses EmailJS to send the form data to your email
4. **Success/Error Handling**: Shows appropriate messages to the client

### 2. Email Content
The email sent to you will include:
- Client's full name
- Client's email address
- Client's phone number
- Selected service type
- Client's message
- Date and time of submission
- Reply-to address (client's email)

## Testing Your Email Setup

### Option 1: Use the Test Page
1. Open `email-test.html` in your browser
2. Fill out the test form with your details
3. Click "Send Test Email"
4. Check if you receive the email at `solectricbengaluru@gmail.com`

### Option 2: Test from Main Website
1. Go to your main website (`index.html`)
2. Scroll to the contact section
3. Fill out the contact form
4. Submit and check for the email

## EmailJS Dashboard Setup

### 1. Access EmailJS Dashboard
- Go to [EmailJS Dashboard](https://dashboard.emailjs.com/)
- Sign in with your account

### 2. Verify Service Configuration
- Check that service `service_vkqkgbo` is active
- Ensure it's connected to your email provider (Gmail, Outlook, etc.)

### 3. Verify Email Template
- Check that template `template_j854a45` exists
- Ensure it contains the correct variables:
  - `{{from_name}}` - Client's name
  - `{{from_email}}` - Client's email
  - `{{from_phone}}` - Client's phone
  - `{{service_type}}` - Selected service
  - `{{message}}` - Client's message
  - `{{date}}` - Submission date
  - `{{time}}` - Submission time

## Troubleshooting

### Common Issues

#### 1. Emails Not Being Received
**Possible Causes:**
- EmailJS service not properly configured
- Template variables don't match
- Email provider blocking emails

**Solutions:**
- Check EmailJS dashboard for service status
- Verify template variables
- Check spam/junk folder
- Test with different email provider

#### 2. Form Not Submitting
**Possible Causes:**
- JavaScript errors
- Network connectivity issues
- EmailJS initialization problems

**Solutions:**
- Check browser console for errors
- Verify internet connection
- Ensure EmailJS script is loading

#### 3. Validation Errors
**Possible Causes:**
- Invalid email format
- Missing required fields
- Phone number too short

**Solutions:**
- Check form validation rules
- Ensure all required fields are filled
- Use proper email format

## Advanced Features

### 1. Customer Confirmation Emails
You can enable automatic confirmation emails to customers:

1. Create a new EmailJS template for customer confirmations
2. Uncomment the confirmation email code in `script.js`
3. Update the template ID in the code

### 2. Email Templates
You can customize email templates in EmailJS dashboard:

**Sample Template for Business Email:**
```
Subject: New Solar Inquiry from {{from_name}}

Dear Solectric Solutions Team,

You have received a new inquiry from your website:

Name: {{from_name}}
Email: {{from_email}}
Phone: {{from_phone}}
Service Type: {{service_type}}
Message: {{message}}

Date: {{date}}
Time: {{time}}

Please respond to this inquiry within 24 hours.

Best regards,
Solectric Solutions Website
```

**Sample Template for Customer Confirmation:**
```
Subject: Thank you for contacting Solectric Solutions

Dear {{customer_name}},

Thank you for your interest in our solar solutions. We have received your inquiry for {{service_type}} services.

Our team will review your requirements and get back to you within 24 hours.

In the meantime, if you have any urgent questions, please feel free to call us at {{phone}}.

Best regards,
{{company_name}} Team
{{email}}
{{phone}}
```

## Security Considerations

### 1. Rate Limiting
EmailJS has built-in rate limiting to prevent spam. This is usually sufficient for most business websites.

### 2. Data Validation
The form includes client-side validation to ensure data quality:
- Name: Minimum 2 characters
- Email: Valid email format
- Phone: Minimum 10 digits
- Message: Minimum 10 characters

### 3. Spam Protection
- EmailJS includes spam protection
- Consider adding CAPTCHA for additional security
- Monitor for unusual submission patterns

## Monitoring and Analytics

### 1. EmailJS Dashboard
- Monitor email delivery rates
- Check for failed deliveries
- View submission statistics

### 2. Website Analytics
- Track form submission rates
- Monitor conversion rates
- Identify potential issues

## Maintenance

### Regular Checks
1. **Monthly**: Test email functionality
2. **Quarterly**: Review EmailJS usage and limits
3. **Annually**: Update email templates and contact information

### Updates
- Keep EmailJS library updated
- Review and update form validation rules
- Update contact information as needed

## Support

If you encounter issues:
1. Check the troubleshooting section above
2. Review EmailJS documentation
3. Contact EmailJS support if needed
4. Check browser console for JavaScript errors

## Quick Reference

### Important IDs
- **Public Key**: `sucGvi6iQ4QhmQQdy`
- **Service ID**: `service_vkqkgbo`
- **Template ID**: `template_j854a45`
- **Recipient**: `solectricbengaluru@gmail.com`

### Test URLs
- **Main Website**: `index.html`
- **Email Test**: `email-test.html`

### Contact Information
- **Phone**: +91 95389 21012
- **Email**: solectricbengaluru@gmail.com
- **Website**: www.solectricsolutions.in
