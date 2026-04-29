# DB_PHP_MYSQL Setup Guide (Beginner Friendly)

This project is a simple PHP + MySQL CRUD page for student records.

## 1) What this project does

- Connects PHP to MySQL using `mysqli`
- Inserts student data
- Updates student data
- Deletes student data
- Shows all student records in a table

Main file: `db.php`

---

## 2) Prerequisites

You need:

- VS Code
- PHP 8.x (or 7.4+)
- MySQL Server 8.x (or MariaDB)
- Browser (Chrome/Edge)

### Easiest option for beginners (recommended)

Install **XAMPP** (includes Apache + MySQL + PHP):
- Download: https://www.apachefriends.org/index.html
- During install, keep Apache + MySQL + PHP selected.

This is the simplest path if your laptop does not already have PHP/MySQL.

---

## 3) Open project in VS Code

1. Open VS Code.
2. Open folder: `DB_PHP_MYSQL`.
3. Confirm file exists: `db.php`.

---

## 4) Install MySQL on a new laptop (if MySQL is missing)

### Windows (official installer)

1. Download MySQL Installer:
   - https://dev.mysql.com/downloads/installer/
2. Run installer.
3. Choose **Developer Default** (or **Server only** if you want minimal install).
4. Keep default port `3306`.
5. Set root password (remember it).
6. Complete installation.

After install, open **MySQL Command Line Client** or terminal and test:

```sql
mysql -u root -p
```

If login works, MySQL is installed correctly.

---

## 5) Install PHP on a new laptop (if PHP is missing)

### Option A: Using XAMPP (recommended)

- PHP is already included.
- You can use XAMPP Control Panel to start services.

### Option B: Manual PHP install

1. Download PHP for Windows: https://windows.php.net/download/
2. Extract to a folder (example: `C:\php`).
3. Add that folder to PATH.
4. Open new terminal and run:

```bash
php -v
```

If version shows, PHP is installed.

---

## 6) What if `mysqli` is not available?

The project requires `mysqli` extension.

### Check if `mysqli` is enabled

Run:

```bash
php -m | findstr mysqli
```

If output shows `mysqli`, it is enabled.

### If no output, enable `mysqli`

1. Find active php.ini:

```bash
php --ini
```

2. Open the loaded php.ini file.
3. Find this line and make sure it is enabled (remove semicolon):

```ini
extension=mysqli
```

4. Verify PHP extension files exist (especially `php_mysqli.dll`) in PHP `ext` folder.
5. Save php.ini.
6. Restart Apache/PHP server and terminal.
7. Re-check:

```bash
php -m | findstr mysqli
```

If still not working, use XAMPP (it includes working mysqli by default).

---

## 7) Create database and table

Open MySQL terminal and run:

```sql
CREATE DATABASE IF NOT EXISTS student_details;
USE student_details;

CREATE TABLE IF NOT EXISTS student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);
```

---

## 8) Update DB credentials in project

Open `db.php` and edit DB connection values if needed:

- host: `localhost`
- user: `root`
- password: your MySQL root password
- database: `student_details`

Important: If your MySQL password is different, update it in `db.php` before running.

---

## 9) Run the project

## Method A: PHP built-in server (easy in VS Code terminal)

Inside project folder:

```bash
php -S localhost:8000
```

Open browser:

- http://localhost:8000/db.php

## Method B: XAMPP Apache

1. Copy project folder into XAMPP `htdocs`.
2. Start Apache and MySQL from XAMPP Control Panel.
3. Open browser:

- http://localhost/DB_PHP_MYSQL/db.php

---

## 10) Quick test flow

1. Enter Name + Email, click Insert.
2. Confirm row appears in table.
3. Enter ID + new values, click Update.
4. Enter ID, click Delete.

---

## 11) Troubleshooting

### Error: "Connection Failed"

- MySQL service may not be running.
- Wrong username/password/database in `db.php`.
- Port may not be `3306`.

### Error: "Call to undefined function mysqli_connect()"

- `mysqli` extension is not enabled.
- Follow section "What if mysqli is not available?" above.

### Table does not show data

- Ensure table name is exactly `student`.
- Ensure database selected is `student_details`.

---

## 12) Security note (important)

Current code uses direct SQL with user input and plaintext DB password in source. This is fine for lab/demo, but not production.

For production projects, use:
- Prepared statements
- Input validation
- Environment variables for credentials
