# Array Search & Sort Demonstration Website

A fully functional web application for demonstrating searching and sorting operations on integer arrays and named entity arrays using JavaScript, jQuery, and Bootstrap.

---

## 📋 Features

### **Integer Array Operations**
- Create arrays from comma-separated integers
- Linear search to find elements and their indices
- Sort in ascending order
- Sort in descending order

### **Named Entity Array Operations**
- Add named entities with Name and City
- Search entities by name
- Sort by name (A-Z)
- Sort by city (A-Z)
- Delete all entities

### **User Interface**
- Bootstrap 5 responsive design
- Beautiful gradient background
- Interactive buttons with hover effects
- Real-time result display
- Data validation and user feedback

---

## 🚀 How to Run on a New Laptop (WITHOUT Live Server)

### **Method 1: Simple Double-Click (Easiest)**
1. Navigate to the folder containing `index.html`
2. Double-click `index.html`
3. It will automatically open in your default browser
4. **Done!** The website is now running

**Note:** This is the simplest method and works perfectly for this project.

---

### **Method 2: Manual Browser Open**
1. Open your web browser (Chrome, Firefox, Edge, Safari)
2. Press `Ctrl+O` (Windows) or `Cmd+O` (Mac)
3. Navigate to the folder and select `index.html`
4. Click "Open"
5. **Done!** The website is now running

---

### **Method 3: Using Python (Recommended for Development)**

#### **Requirements:**
- Python 3.x installed on your system

#### **Steps:**
1. Open Command Prompt (Windows) or Terminal (Mac/Linux)
2. Navigate to the project folder:
   ```
   cd path\to\JS_Syllabus_Assignment_3
   ```
3. Run one of these commands:

   **Python 3:**
   ```
   python -m http.server 8000
   ```
   
   **Python 2 (if Python 3 not available):**
   ```
   python -m SimpleHTTPServer 8000
   ```

4. Open your browser and go to:
   ```
   http://localhost:8000
   ```
5. You should see the website loaded
6. To stop the server, press `Ctrl+C` in the terminal

---

### **Method 4: Using Node.js (If Installed)**

#### **Requirements:**
- Node.js installed on your system

#### **Steps:**
1. Open Command Prompt (Windows) or Terminal (Mac/Linux)
2. Navigate to the project folder:
   ```
   cd path\to\JS_Syllabus_Assignment_3
   ```
3. Install a simple HTTP server (one-time setup):
   ```
   npm install -g http-server
   ```
4. Run the server:
   ```
   http-server
   ```
5. Open your browser and go to:
   ```
   http://localhost:8080
   ```
6. You should see the website loaded
7. To stop the server, press `Ctrl+C` in the terminal

---

### **Method 5: Using VS Code Live Server Extension**

#### **Steps:**
1. Install VS Code (if not already installed)
2. Open the project folder in VS Code
3. Install "Live Server" extension by Ritwick Dey
4. Right-click on `index.html` and select "Open with Live Server"
5. The website will open automatically in your browser
6. Any changes you make will auto-refresh

---

## 📦 File Structure

```
JS_Syllabus_Assignment_3/
│
├── index.html          # Main HTML file (contains all code)
└── README.md           # This file
```

---

## 🛠️ Technical Details

### **Technologies Used:**
- **HTML5** - Structure and semantic markup
- **CSS3** - Modern styling with gradients and animations
- **JavaScript** - Core search and sort algorithms
- **jQuery 3.6.0** - DOM manipulation and simplification
- **Bootstrap 5.3.0** - Responsive grid and components

### **CDN Libraries Used:**
- Bootstrap CSS: `https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css`
- Bootstrap JS: `https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js`
- jQuery: `https://code.jquery.com/jquery-3.6.0.min.js`

---

## 💡 How to Use the Application

### **For Integer Arrays:**
1. **Create Array**: Enter comma-separated integers in the input field (e.g., `45, 23, 67, 12, 89, 34`)
2. **Click "Create Array"** button
3. **Search**: Enter a number and click "Search" to find its index
4. **Sort**: Click "Sort Ascending" or "Sort Descending"
5. Results appear in the result boxes below

### **For Named Entities:**
1. **Add Entity**: Enter a name and city, then click "Add Entity"
2. **View List**: All entities are displayed in a table
3. **Search**: Enter a name and click "Search" to find that person and their city
4. **Sort**: Click "Sort by Name" or "Sort by City"
5. **Clear**: Click "Clear All" to delete all entities

---

## ⚙️ Troubleshooting

### **Issue: Page shows blank or won't load**
- **Solution 1**: Make sure you're running it in a modern browser (Chrome, Firefox, Edge, Safari)
- **Solution 2**: Check that you're accessing it from `localhost:PORT` or using the file directly
- **Solution 3**: Clear your browser cache (Ctrl+Shift+Delete) and reload

### **Issue: Buttons don't work**
- **Solution**: This could indicate jQuery didn't load. Check browser console (F12 → Console)
- **Solution 2**: Try refreshing the page (F5)

### **Issue: Styling looks broken**
- **Solution**: Clear browser cache and reload
- **Solution 2**: Try a different browser
- **Solution 3**: Check your internet connection (Bootstrap and jQuery load from CDN)

### **Issue: "Cannot GET /" when using Python/Node server**
- **Solution**: Make sure you're in the correct directory where `index.html` is located
- **Solution 2**: Access the full file path: `http://localhost:PORT/index.html`

---

## 📝 Sample Data

The application comes pre-loaded with sample integer data:
```
[45, 23, 67, 12, 89, 34]
```

You can replace this with any comma-separated integers.

---

## 🎓 Educational Purpose

This project demonstrates:
- ✅ Array creation and manipulation
- ✅ Linear search algorithm
- ✅ Sorting algorithms (bubble sort via JavaScript's native sort)
- ✅ DOM manipulation with jQuery
- ✅ Event handling and user interaction
- ✅ Bootstrap responsive design
- ✅ Modern web development practices

---

## 📞 Support

If you encounter any issues:
1. Check that `index.html` file exists in the directory
2. Ensure you have a modern web browser
3. Try a different method from the ones listed above
4. Check browser console for error messages (F12 key)

---

## 📄 License

This project is for educational purposes.

---

## ✨ Notes

- **No installation required** - Just open the HTML file
- **All code is inline** - Single HTML file contains everything
- **Internet required** - Bootstrap and jQuery load from CDN
- **Mobile friendly** - Responsive design works on phones and tablets
- **No database needed** - All data stored in browser memory

---

**Happy Learning! 🎉**