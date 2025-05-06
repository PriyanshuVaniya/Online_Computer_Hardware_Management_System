# Admin Panel - PHP-Based Management System

This is a dynamic Admin Panel built using PHP, designed to manage an online system for products, users, orders, payments, feedback, and complaints. It provides a secure, modular, and scalable backend interface for administrative operations.

## 🚀 Features

- 🔐 User Authentication (Login, Register, Logout, Forgot Password)
- 🛍️ Product, Category, and Brand Management
- 📦 Order and Payment Handling
- 🙋 User and Admin Management
- 📝 Feedback and Complaint Handling
- 🔁 Password Change System
- 📄 Modular File Structure
- ⚙️ Composer Integration for PHP Dependency Management

---

## 📁 Folder Structure

```
adminpan/
├── add-brand.php
├── add-category.php
├── add-complaint.php
├── add-feedback.php
├── add-order.php
├── add-payment.php
├── add-product.php
├── add-user.php
├── authentication-login.php
├── authentication-register.php
├── change-password.php
├── composer.json
├── composer.lock
├── edit-order.php
├── edit-product.php
├── forgot-password.php
├── header.php
├── index.php
├── logout.php
└── ... (additional supporting files)
```

---

## 🧰 Technologies Used

- **Backend**: PHP (7.x+)
- **Frontend**: HTML, CSS
- **Database**: MySQL (assumed)
- **Dependency Management**: Composer

---

## 🛠️ Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/admin-panel.git
   cd admin-panel
   ```

2. **Move to Web Server Directory**
   Move the `adminpan` folder into your web server directory (e.g., `htdocs` for XAMPP).

3. **Install Dependencies**
   If you're using Composer:
   ```bash
   composer install
   ```

4. **Database Setup**
   - Create a MySQL database (e.g., `admin_panel_db`).
   - Import the provided SQL dump file (if available).
   - Configure your database credentials in a PHP config file (e.g., `config.php`).

5. **Run the Application**
   Open your browser and go to:
   ```
   http://localhost/adminpan/
   ```

---

## 📋 Requirements

- PHP 7.x or later
- MySQL
- Apache/Nginx
- Composer

---

## 🔒 Security Tips

- Make sure to secure sensitive files and directories.
- Sanitize all user inputs to prevent SQL injection.
- Implement HTTPS in production environments.
- Use hashed passwords with `password_hash()` and `password_verify()`.

---



---

## 🧑‍💻 Author

- **Priyanshu Vaniya**
- [GitHub Profile](https://github.com/PriyanshuVaniya)
- Contact: priyanshuvaniya2703@gmail.com

---

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
