# Fix EmailJS Template Configuration

## The Issue
Your contact form emails are going to your personal email instead of `solectricbengaluru@gmail.com` (your business email).

## Solution: Fix EmailJS Template Settings

### Step 1: Access EmailJS Dashboard
1. Go to [EmailJS Dashboard](https://dashboard.emailjs.com/)
2. Sign in to your account
3. Click on "Email Templates" in the left sidebar

### Step 2: Find Your Template
1. Look for template ID: `template_j854a45`
2. Click on it to edit

### Step 3: Check Template Configuration
In your EmailJS template, make sure you have these settings:

#### Template Settings:
- **Template Name**: `Contact Form Template` (or any name you prefer)
- **Subject**: `New Solar Inquiry from {{from_name}}`

#### Template Content:
Make sure your template content includes the `{{to_email}}` variable or has a hardcoded recipient email.

### Step 4: Fix the Template Content
Replace your current template content with this:

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

### Step 5: Check Email Service Configuration
1. Go to "Email Services" in the left sidebar
2. Find service ID: `service_vkqkgbo`
3. Click on it to edit
4. Make sure it's connected to `solectricbengaluru@gmail.com`

### Step 6: Alternative Fix - Hardcode Recipient Email
If the above doesn't work, you can hardcode the recipient email in the template:

1. In your EmailJS template, add this line at the top:
```
To: solectricbengaluru@gmail.com
```

2. Or modify the template to use a hardcoded recipient instead of `{{to_email}}`

### Step 7: Test the Fix
1. Save your template changes
2. Go back to your website
3. Fill out the contact form
4. Check if the email goes to `solectricbengaluru@gmail.com`

## Alternative Solution: Update JavaScript Code

If the template fix doesn't work, we can modify the JavaScript to ensure the correct recipient:

```javascript
// In your script.js file, update the templateParams:
const templateParams = {
    to_email: 'solectricbengaluru@gmail.com',  // This should be the recipient
    to_name: 'Solectric Solutions Team',
    from_name: name,
    from_email: email,
    from_phone: phone,
    service_type: serviceType,
    message: message,
    reply_to: email,
    subject: `New Solar Inquiry from ${name}`,
    date: new Date().toLocaleDateString('en-IN'),
    time: new Date().toLocaleTimeString('en-IN')
};
```

## Debugging Steps

### 1. Check Browser Console
1. Open your website
2. Press F12 to open developer tools
3. Go to Console tab
4. Fill out and submit the contact form
5. Look for any error messages or the debug log we added

### 2. Check EmailJS Dashboard
1. Go to EmailJS dashboard
2. Check "Email Logs" section
3. See if emails are being sent and to which address

### 3. Test with Email Test Page
1. Open `email-test.html`
2. Fill out the test form
3. Submit and check the console for debug information

## Common Issues and Solutions

### Issue 1: Template Variables Not Matching
**Problem**: Template variables don't match what's being sent from JavaScript
**Solution**: Make sure template uses these exact variables:
- `{{from_name}}`
- `{{from_email}}`
- `{{from_phone}}`
- `{{service_type}}`
- `{{message}}`
- `{{date}}`
- `{{time}}`

### Issue 2: Email Service Not Connected
**Problem**: EmailJS service not properly connected to your email
**Solution**: 
1. Go to Email Services in EmailJS dashboard
2. Reconnect your email service
3. Test the connection

### Issue 3: Wrong Template ID
**Problem**: Using wrong template ID
**Solution**: 
1. Verify template ID is `template_j854a45`
2. Check that the template exists and is active

## Quick Test

To quickly test if the fix worked:

1. **Open your website** (`index.html`)
2. **Fill out the contact form** with test data
3. **Submit the form**
4. **Check your email** at `solectricbengaluru@gmail.com`
5. **Check browser console** for debug information

## Contact Information for Support

If you still have issues:
- **EmailJS Support**: support@emailjs.com
- **Your Business Email**: solectricbengaluru@gmail.com
- **Phone**: +91 95389 21012

## Important Notes

- Make sure you're logged into the correct EmailJS account
- Check that your email service is active and connected
- Verify that the template is published and active
- Test with the email test page first before testing on the main website
