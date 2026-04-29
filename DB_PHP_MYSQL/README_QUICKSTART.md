# Quick Setup (10-15 Minutes)

If you are new, follow these exact steps.

## Fastest Path: Use XAMPP

1. Install XAMPP: https://www.apachefriends.org/index.html
2. Open XAMPP Control Panel.
3. Start **Apache** and **MySQL**.
4. Open this project in VS Code.
5. In MySQL terminal, run:

```sql
CREATE DATABASE IF NOT EXISTS student_details;
USE student_details;
CREATE TABLE IF NOT EXISTS student (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL
);
```

6. Open `db.php` and set correct DB password in `mysqli_connect(...)`.
7. In VS Code terminal (project folder), run:

```bash
php -S localhost:8000
```

8. Open browser:

- http://localhost:8000/db.php

9. Insert one test student.
10. Verify row appears.

---

## If `mysqli` error appears

If you see error like:
- `Call to undefined function mysqli_connect()`

Do this:

1. Check module:

```bash
php -m | findstr mysqli
```

2. If empty, find php.ini:

```bash
php --ini
```

3. In php.ini, enable:

```ini
extension=mysqli
```

4. Save and restart server.
5. Run again:

```bash
php -m | findstr mysqli
```

---

## If MySQL is not installed on another laptop

1. Download MySQL Installer:
   - https://dev.mysql.com/downloads/installer/
2. Install with **Developer Default**.
3. Set root password.
4. Start MySQL service.
5. Re-run DB/table SQL commands above.

Now run project again from step 7.
