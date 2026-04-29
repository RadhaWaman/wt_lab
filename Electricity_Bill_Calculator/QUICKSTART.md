# Electricity Bill Calculator Quick Start

This guide is for someone opening the project in VS Code for the first time and wanting to run it as quickly as possible.

## What You Need

- VS Code
- Python 3.7 or later
- Internet connection for installing Python packages

You do not need to install a separate SQL server or database tool. This project uses SQLite, which comes with Python and Django support already built in.

If the laptop has nothing installed yet, install Python first. That will also give you `pip`, which is used to install the project dependencies.

## Open The Project In VS Code

1. Open VS Code.
2. Click **File > Open Folder**.
3. Select the `electricity_bill_calculator` folder.
4. Open a terminal in VS Code by clicking **Terminal > New Terminal**.

## Set Up The Project

### 1. Check Python

In the VS Code terminal, run:

```bash
python --version
```

If Python is not found, install Python 3.7+ first and try again.

### 2. Create a virtual environment

In the VS Code terminal, run:

```bash
python -m venv venv
```

### 3. Activate the virtual environment

On Windows PowerShell:

```bash
venv\Scripts\Activate.ps1
```

If PowerShell blocks activation, run this once and try again:

```bash
Set-ExecutionPolicy -Scope Process -ExecutionPolicy Bypass
```

On Command Prompt:

```bash
venv\Scripts\activate
```

### 4. Install the required packages

Run:

```bash
pip install -r requirements.txt
```

## Run The App

### 5. Create the database tables

Run:

```bash
python manage.py migrate
```

If `db.sqlite3` does not exist yet, this command will create it.

### 6. Start the development server

Run:

```bash
python manage.py runserver
```

## Open The Website

- Main app: `http://127.0.0.1:8000/`
- Admin panel: `http://127.0.0.1:8000/admin/`

## Optional Admin Login

If you want to use the admin panel, create an admin user first:

```bash
python manage.py createsuperuser
```

Then open `/admin/` and sign in with the username and password you created.

## If You Move The Project To Another Laptop

- Copy the whole project folder.
- Keep `db.sqlite3` if you want to keep old bill history.
- If you only need a fresh setup, it is fine to delete `db.sqlite3` and run `python manage.py migrate` again.

## Common Problems

### Port 8000 is already in use

Run the server on another port:

```bash
python manage.py runserver 8080
```

### PowerShell will not activate the virtual environment

Run:

```bash
Set-ExecutionPolicy -Scope Process -ExecutionPolicy Bypass
venv\Scripts\Activate.ps1
```

### Packages are missing

Run:

```bash
pip install -r requirements.txt
```

## Project At A Glance

- Django handles the backend.
- SQLite stores the bill history.
- Bootstrap styles the pages.
- jQuery is used for simple form validation.

## About requirements.txt

This project only lists the Python packages it needs. Right now that is just Django.

It does not list SQLite or a separate SQL database package because the app uses SQLite, and SQLite is already available through Python and Django.
