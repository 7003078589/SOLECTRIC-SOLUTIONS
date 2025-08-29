# 📧 Hostinger Email Setup Guide

## 🎯 **How to Set Up Email on Hostinger**

### **Step 1: Check Your Email Plan**

1. **Login to Hostinger Control Panel**
2. **Go to "Email" section**
3. **Check what's included in your plan:**

| Plan Type | Email Accounts | Storage | Cost |
|-----------|----------------|---------|------|
| **Free Hosting** | 0 | 0 | Free |
| **Single Shared** | 1 | 1GB | Free with hosting |
| **Premium Shared** | 100 | 100GB | Free with hosting |
| **Business Shared** | 100 | 100GB | Free with hosting |

### **Step 2: Create Email Account**

1. **In Hostinger Control Panel:**
   - Go to "Email" → "Email Accounts"
   - Click "Create Email Account"
   - **Email:** `info@solectricsolutions.in`
   - **Password:** Create strong password
   - **Storage:** Use available space
   - Click "Create"

### **Step 3: Configure Email Settings**

**IMAP/SMTP Settings:**
```
IMAP Server: imap.hostinger.com
IMAP Port: 993 (SSL)
SMTP Server: smtp.hostinger.com
SMTP Port: 587 (TLS)
Username: info@solectricsolutions.in
Password: Your email password
```

### **Step 4: Update Your Website**

**In `contact-handler.php` (line 83):**
```php
$to_email = 'info@solectricsolutions.in';  // Your Hostinger email
$from_email = 'info@solectricsolutions.in'; // Your Hostinger email
```

**In `index.html` (lines 870, 955):**
```html
<p><a href="mailto:info@solectricsolutions.in">info@solectricsolutions.in</a></p>
```

## 💰 **Email Pricing on Hostinger**

### **Free Email (with hosting):**
- ✅ **Included with hosting plans**
- ✅ **No additional charges**
- ✅ **Professional domain email**
- ✅ **Webmail access**

### **Paid Email Plans (if needed):**
- **Email Starter:** $0.99/month
- **Email Premium:** $2.99/month  
- **Email Business:** $3.99/month

## 🔧 **Alternative: Use Gmail with Custom Domain**

### **Step 1: Set up Gmail with your domain**
1. **In Hostinger Control Panel:**
   - Go to "Email" → "Email Forwarding"
   - Create forward: `info@solectricsolutions.in` → `solectricbengaluru@gmail.com`

### **Step 2: Configure Gmail**
1. **In Gmail Settings:**
   - Go to "Accounts and Import"
   - Add "Send mail as": `info@solectricsolutions.in`

### **Step 3: Update website**
```php
$to_email = 'solectricbengaluru@gmail.com';  // Your Gmail
$from_email = 'info@solectricsolutions.in';  // Your domain
```

## 🚀 **Recommended Solution**

### **Option 1: Free Hostinger Email (Recommended)**
1. **Check your hosting plan** - most include free email
2. **Create email account:** `info@solectricsolutions.in`
3. **Update website** to use new email
4. **No additional charges**

### **Option 2: Email Forwarding (Free)**
1. **Forward domain email** to your Gmail
2. **Keep using Gmail** but with professional domain
3. **No charges**

### **Option 3: Paid Email Plan**
1. **If you need more features**
2. **Choose Email Starter** ($0.99/month)
3. **Professional email hosting**

## 📋 **Step-by-Step Setup**

### **1. Check Your Plan:**
- Login to Hostinger
- Go to "Email" section
- See what's included

### **2. Create Email Account:**
- Click "Create Email Account"
- Use: `info@solectricsolutions.in`
- Set strong password

### **3. Update Website:**
- Change email addresses in files
- Test contact form
- Verify emails work

### **4. Configure Email Client:**
- Use IMAP/SMTP settings
- Test sending/receiving
- Set up on phone/computer

## ✅ **Benefits of Hostinger Email**

- **Professional domain email**
- **Included with hosting** (usually free)
- **Webmail access**
- **IMAP/SMTP support**
- **Spam protection**
- **Email forwarding**

## 🎯 **Action Plan**

1. **Check your hosting plan** for email inclusion
2. **Create email account** if available
3. **Update website** to use new email
4. **Test contact form** functionality
5. **Configure email clients** if needed

**Most Hostinger hosting plans include free email accounts!** 🎉
