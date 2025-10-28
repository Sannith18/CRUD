# PHP CRUD Project

A simple PHP CRUD (Create, Read, Update, Delete) application for managing user records, with image uploads and MySQL integration.

## Features

- Add new users with first/last name, password, gender, email, phone, address, and image upload
- Display all records in a structured table
- Update and delete records
- Responsive design using CSS
- MySQL database connection

## Getting Started

### Prerequisites

- PHP 7.x or higher
- MySQL
- A web server (like XAMPP, WAMP, or LAMP)
- Browser

### Installation

1. Clone this repository to your local system.
git clone https://github.com/Sannith18/CRUD

text
2. Import the SQL schema to MySQL (create a database named `form`, matching your connection config).
3. Place the project files in your server's root directory (`htdocs` for XAMPP, etc.).
4. Modify `connection.php` with your MySQL credentials if needed.

### Usage

- **Add user**: Go to the registration form, fill details, upload an image, and submit.
- **View records**: See all users in the display table.
- **Update**: Click "Update" next to a record to edit.
- **Delete**: Click "Delete" next to a record to remove it.

## File Structure

- `form.php` - Registration and image upload.
- `display.php` - List all users.
- `update_design.php` - Update user info.
- `delete_design.php` - Delete users.
- `connection.php` - Database connection details.
- `style.css` - App styling.
- `fileupload.php` - Handle image uploads.

## Help

If you encounter database errors, check your credentials in `connection.php` and ensure the MySQL server is running.

