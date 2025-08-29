# 📧 PHP Email System Explanation - How It Works

## 🎯 **How Your PHP Email System Works**

Your website uses a **server-side PHP script** to send emails. Here's exactly how it works:

### 📋 **Step-by-Step Process**

1. **Customer fills contact form** on your website
2. **JavaScript sends data** to `contact-handler.php`
3. **PHP processes the data** and creates an email
4. **PHP sends email** using the `mail()` function
5. **Email arrives** in your Gmail inbox

---

## 🔧 **Where Email Addresses Are Configured**

### **Location: `contact-handler.php` (Lines 82-86)**

```php
// Configuration
$to_email = 'solectricbengaluru@gmail.com';        // WHERE EMAILS GO
$to_name = 'Solectric Solutions Team';              // RECIPIENT NAME
$from_email = 'solectricbengaluru@gmail.com';      // SENDER EMAIL
$from_name = 'Solectric Solutions Website';        // SENDER NAME
$subject = "New Solar Inquiry from $name";         // EMAIL SUBJECT
```

### **📧 Email Configuration Explained**

| Setting | Current Value | What It Does |
|---------|---------------|--------------|
| `$to_email` | `solectricbengaluru@gmail.com` | **Where customer inquiries go** |
| `$to_name` | `Solectric Solutions Team` | Name shown in email |
| `$from_email` | `solectricbengaluru@gmail.com` | Email address that sends the email |
| `$from_name` | `Solectric Solutions Website` | Name that appears as sender |

---

## 🛠️ **How to Change Email Addresses**

### **To Change Where Emails Go:**

1. **Open:** `contact-handler.php`
2. **Find:** Line 83
3. **Change:** `$to_email = 'your-new-email@gmail.com';`

### **Example Changes:**

```php
// Change to your personal email
$to_email = 'yourname@gmail.com';

// Change to multiple emails (separate with comma)
$to_email = 'solectricbengaluru@gmail.com, backup@gmail.com';

// Change to company email
$to_email = 'info@solectricsolutions.in';
```

---

## 🔄 **How the System Works Without Hostinger Email**

### **Why It Works Without Paid Email:**

1. **PHP `mail()` function** uses your server's built-in mail system
2. **No special email hosting** required
3. **Works with any Gmail account** you already have
4. **Server handles email delivery** automatically

### **Email Flow:**
```
Customer Form → PHP Script → Server Mail System → Gmail Inbox
```

---

## 📱 **Email Addresses in Your Website**

### **Contact Information Displayed:**

**In `index.html` (Contact Section):**
- **Email:** `solectricbengaluru@gmail.com` (displayed to customers)
- **Phone:** `+91 95389 21012`
- **Address:** Jayanagar, Bengaluru

### **Email Addresses Used:**

| Purpose | Email Address | Location |
|---------|---------------|----------|
| **Display to customers** | `solectricbengaluru@gmail.com` | `index.html` (contact section) |
| **Receive form submissions** | `solectricbengaluru@gmail.com` | `contact-handler.php` (line 83) |
| **Send confirmation emails** | `noreply@solectricsolutions.in` | `contact-handler.php` (line 200) |

---

## 🧪 **Testing Your Email System**

### **Test File: `test-email-system.html`**

1. **Upload** `test-email-system.html` to your server
2. **Visit** the page in your browser
3. **Fill** the test form
4. **Submit** and check your Gmail inbox
5. **Verify** email arrives at `solectricbengaluru@gmail.com`

---

## ⚙️ **Server Configuration**

### **What Your Hosting Provider Needs:**

Your hosting provider (Hostinger) should have:
- ✅ **PHP enabled**
- ✅ **mail() function working**
- ✅ **SMTP configured** (usually automatic)

### **If Emails Don't Work:**

1. **Check spam folder** first
2. **Contact Hostinger support** to enable mail function
3. **Use Formspree as backup** (free alternative)

---

## 📋 **Quick Reference**

### **Files Involved:**
- `index.html` - Contact form and display email
- `contact-handler.php` - Email processing script
- `script.js` - Form submission handling
- `test-email-system.html` - Testing tool

### **Key Email Addresses:**
- **Primary:** `solectricbengaluru@gmail.com`
- **Backup:** Can be changed in `contact-handler.php`
- **Display:** Shown in website contact section

### **No Hostinger Email Charges Because:**
- Uses PHP `mail()` function
- Works with existing Gmail account
- No special email hosting needed
- Server handles delivery automatically

---

## 🎉 **Summary**

**Your email system works by:**
1. Customer submits form
2. PHP script processes data
3. Server sends email to your Gmail
4. You receive professional HTML email

**Email addresses are configured in:**
- `contact-handler.php` (lines 82-86)
- `index.html` (contact section display)

**No Hostinger email charges because:**
- Uses built-in server mail system
- Works with your existing Gmail
- No special email hosting required

**Your emails go to:** `solectricbengaluru@gmail.com` ✅
