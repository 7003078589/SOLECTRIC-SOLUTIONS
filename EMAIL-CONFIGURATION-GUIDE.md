# 📧 Email Configuration Guide - Where Email Addresses Are Set

## 🎯 **Email Addresses in Your Website**

Your website has email addresses configured in **2 main places**:

---

## 📍 **Location 1: Contact Form Processing (PHP)**

### **File:** `contact-handler.php` (Lines 82-86)

```php
// Configuration
$to_email = 'solectricbengaluru@gmail.com';        // ← WHERE EMAILS GO
$to_name = 'Solectric Solutions Team';              // ← RECIPIENT NAME
$from_email = 'solectricbengaluru@gmail.com';      // ← SENDER EMAIL
$from_name = 'Solectric Solutions Website';        // ← SENDER NAME
$subject = "New Solar Inquiry from $name";         // ← EMAIL SUBJECT
```

**What this does:**
- **`$to_email`** = Where customer inquiries are sent
- **`$from_email`** = Email address that sends the email
- **`$from_name`** = Name that appears as sender

---

## 📍 **Location 2: Website Display (HTML)**

### **File:** `index.html` (Contact Section)

**Line 870 - Contact Card:**
```html
<p><a href="mailto:solectricbengaluru@gmail.com">solectricbengaluru@gmail.com</a></p>
```

**Line 955 - Footer:**
```html
<p><i class="fas fa-envelope"></i> solectricbengaluru@gmail.com</p>
```

**What this does:**
- Shows email address to customers
- Makes email clickable (opens email client)
- Displays in footer for easy access

---

## 🔧 **How to Change Email Addresses**

### **To Change Where Form Emails Go:**

1. **Open:** `contact-handler.php`
2. **Find:** Line 83
3. **Change:** `$to_email = 'your-new-email@gmail.com';`

### **To Change Displayed Email:**

1. **Open:** `index.html`
2. **Find:** Lines 870 and 955
3. **Change:** `solectricbengaluru@gmail.com` to your new email

---

## 📋 **Email Flow Diagram**

```
Customer sees email on website
         ↓
    solectricbengaluru@gmail.com (index.html)
         ↓
Customer fills contact form
         ↓
Form sends to contact-handler.php
         ↓
PHP sends email to solectricbengaluru@gmail.com
         ↓
You receive email in Gmail inbox
```

---

## 🎯 **Current Email Configuration**

| Purpose | Email Address | File Location |
|---------|---------------|---------------|
| **Display to customers** | `solectricbengaluru@gmail.com` | `index.html` (lines 870, 955) |
| **Receive form submissions** | `solectricbengaluru@gmail.com` | `contact-handler.php` (line 83) |
| **Send confirmation emails** | `noreply@solectricsolutions.in` | `contact-handler.php` (line 200) |

---

## 🛠️ **Quick Changes**

### **Change to Personal Email:**
```php
// In contact-handler.php line 83
$to_email = 'yourname@gmail.com';
```

### **Change to Multiple Emails:**
```php
// In contact-handler.php line 83
$to_email = 'solectricbengaluru@gmail.com, backup@gmail.com';
```

### **Change Display Email:**
```html
<!-- In index.html lines 870 and 955 -->
<p><a href="mailto:yourname@gmail.com">yourname@gmail.com</a></p>
```

---

## ✅ **Why This Works Without Hostinger Email**

1. **PHP `mail()` function** uses server's built-in mail system
2. **No special email hosting** required
3. **Works with any Gmail account** you already have
4. **Server handles delivery** automatically

---

## 🧪 **Test Your Configuration**

1. **Upload** `test-email-system.html` to your server
2. **Visit** the test page
3. **Submit** test form
4. **Check** your Gmail inbox
5. **Verify** email arrives at configured address

---

## 📞 **Summary**

**Your email system works by:**
- Customer sees email on website: `solectricbengaluru@gmail.com`
- Customer submits form → PHP processes → Email sent to `solectricbengaluru@gmail.com`
- You receive email in your Gmail inbox

**No Hostinger email charges because:**
- Uses PHP `mail()` function (built into server)
- Works with existing Gmail account
- No special email hosting needed

**All emails go to:** `solectricbengaluru@gmail.com` ✅
