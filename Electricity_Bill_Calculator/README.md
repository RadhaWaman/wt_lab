# Electricity Bill Calculator

This is a Django web application for calculating electricity bills using tiered pricing. It includes a calculator form, a history page, and a Django admin panel for managing saved bill records.

## Features

- Clean, responsive interface built with Bootstrap 5
- Tiered pricing calculation:
  - First 50 units: Rs. 3.50/unit
  - Next 100 units (51-150): Rs. 4.00/unit
  - Next 100 units (151-250): Rs. 5.20/unit
  - Above 250 units: Rs. 6.50/unit
- Detailed bill breakdown
- Calculation history saved in SQLite
- Real-time form validation with jQuery
- Mobile-friendly layout

## Requirements

- Python 3.7 or later
- `pip`
- Windows, macOS, or Linux

## Setup On Another Laptop

If you are moving this project to a different laptop, copy the full project folder first. The app does not need any extra services such as MySQL or PostgreSQL because it uses SQLite.

If you want to keep the existing calculation history, also copy `db.sqlite3`. If you only want the app code and are fine with starting fresh, you can leave that file behind and create a new database with migrations.

### 1. Install Python

Install Python 3.7+ on the new laptop and make sure it is added to PATH. You can verify it with:

```bash
python --version
```

### 2. Open the project folder

Open a terminal in the project directory:

```bash
cd electricity_bill_calculator
```

### 3. Create a virtual environment

Use a virtual environment so the project dependencies stay isolated.

On Windows PowerShell:

```bash
python -m venv venv
venv\Scripts\Activate.ps1
```

If PowerShell blocks the activation script, run this once in the same terminal and then activate again:

```bash
Set-ExecutionPolicy -Scope Process -ExecutionPolicy Bypass
```

On Command Prompt:

```bash
python -m venv venv
venv\Scripts\activate
```

On macOS or Linux:

```bash
python3 -m venv venv
source venv/bin/activate
```

### 4. Install dependencies

Install the packages listed in `requirements.txt`:

```bash
pip install -r requirements.txt
```

### 5. Apply database migrations

Run migrations to create the SQLite database tables:

```bash
python manage.py migrate
```

This command will create `db.sqlite3` if it does not already exist.

### 6. Create an admin user

This step is optional, but needed if you want to use the Django admin panel:

```bash
python manage.py createsuperuser
```

### 7. Start the development server

```bash
python manage.py runserver
```

### 8. Open the app

- Main app: `http://127.0.0.1:8000/`
- Admin panel: `http://127.0.0.1:8000/admin/`

## What Each File Is For

- `manage.py`: Django management commands
- `requirements.txt`: Python dependency list
- `db.sqlite3`: Local SQLite database storing bill records
- `bill_project/`: Main Django project configuration
- `calculator/`: App logic, forms, models, views, and URLs
- `templates/`: HTML templates
- `static/`: CSS and JavaScript assets

## Project Structure

```
electricity_bill_calculator/
├── manage.py                          # Django management script
├── requirements.txt                   # Python dependencies
├── bill_project/                      # Main Django project
│   ├── __init__.py
│   ├── settings.py                    # Django settings
│   ├── urls.py                        # URL configuration
│   ├── asgi.py
│   └── wsgi.py
├── calculator/                        # Django app
│   ├── migrations/                    # Database migrations
│   ├── __init__.py
│   ├── admin.py                       # Admin panel configuration
│   ├── apps.py                        # App configuration
│   ├── forms.py                       # Django forms
│   ├── models.py                      # Database models
│   ├── urls.py                        # App URL routes
│   └── views.py                       # View logic and bill calculation
├── templates/                         # HTML templates
│   ├── base.html                      # Base template
│   └── calculator/
│       ├── index.html                 # Calculator page
│       └── history.html               # History page
└── static/                            # Static files
    ├── css/
    │   └── style.css                  # Custom styles
    └── js/
        └── script.js                  # jQuery scripts
```

## Usage

### Calculate a Bill

1. Open the home page.
2. Enter the customer name.
3. Enter the number of units consumed.
4. Click the calculate button.
5. Review the bill breakdown and total amount.

### View Calculation History

1. Open the history page from the navigation menu.
2. Review previously saved bills.
3. Use the admin panel if you want to manage records directly.

## Pricing Structure

| Unit Range | Rate per Unit |
|-----------|---------------|
| 0-50 units | Rs. 3.50 |
| 51-150 units | Rs. 4.00 |
| 151-250 units | Rs. 5.20 |
| 250+ units | Rs. 6.50 |

## Technologies Used

- Backend: Django 4.2
- Frontend: HTML5, CSS3, Bootstrap 5
- Database: SQLite
- JavaScript: jQuery 3.6

## Features in Detail

### Responsive Design

- Mobile-first layout built with Bootstrap 5
- Works on phones, tablets, and desktops

### Form Validation

- Real-time input validation with jQuery
- Customer name validation
- Units validation for positive numbers only

### Bill Calculation Logic

- Calculates bills using tiered pricing
- Shows a detailed itemized breakdown
- Saves the result in SQLite

### User Experience

- Responsive navigation
- Confirmation prompt for destructive actions
- Simple and clear feedback messages

## Admin Panel

Access the Django admin panel at `/admin/` to view, search, sort, and delete bill records.

## Browser Support

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile browsers (iOS Safari, Chrome Mobile)

## Troubleshooting

### Port 8000 already in use
```bash
python manage.py runserver 8080
```

### Database errors
```bash
python manage.py migrate
```

### Static files not loading
```bash
python manage.py collectstatic --noinput
```

### Virtual environment will not activate on PowerShell

```bash
Set-ExecutionPolicy -Scope Process -ExecutionPolicy Bypass
venv\Scripts\Activate.ps1
```

## Future Enhancements

- Add PDF bill generation
- Email bill reports
- Multiple tariff zones
- Monthly usage graphs
- Customer accounts
- Payment integration

## License

This project is provided as-is for educational purposes.

## Notes

- The project uses SQLite, so no separate database server is required.
- If you copy the project to another laptop, `pip install -r requirements.txt` and `python manage.py migrate` are the key setup steps.

---

**Created**: March 2026 | **Updated**: April 2026
