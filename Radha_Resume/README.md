# WT Assignment 3

This folder contains a single-page professional CV website built with HTML, CSS, Bootstrap, Font Awesome, Google Fonts, and jQuery.

## What is included

- `index.html` - main CV page
- `style.css` - custom styling for the layout and animations
- `pic.jpg` - profile image used in the sidebar
- `video.mp4` - background video used behind the page

## Requirements

- A modern web browser such as Chrome, Edge, or Firefox
- Internet access, because the page loads Bootstrap, Font Awesome, Google Fonts, and jQuery from CDNs

## Step-by-step setup

1. Make sure all project files are in the same folder.
2. Keep `index.html`, `style.css`, `pic.jpg`, and `video.mp4` together in `WT_Assignment3`.
3. Check that the file names match exactly, including the file extensions.
4. Open `index.html` in a code editor or browser to confirm the links to `style.css`, `pic.jpg`, and `video.mp4` are correct.
5. If you want the smoothest local experience, run the page through a local server instead of double-clicking the file.

## How to run

### Option 1: Open directly

1. Go to the `WT_Assignment3` folder.
2. Double-click `index.html`.
3. The page will open in your browser.

### Option 2: Run from the terminal without Live Server

If you do not have Live Server, use a local terminal server instead.

#### If you are using a college PC

1. Copy the full project folder to the college computer or open it from a USB drive.
2. Make sure `index.html`, `style.css`, `pic.jpg`, and `video.mp4` are still in the same folder.
3. Open PowerShell or Command Prompt.
4. Change into the project folder:

```powershell
cd C:\Users\radha\OneDrive\Documents\TY\sem6\Web_Technology\WT_Assignment3
```

5. Start the server with one of these commands:

```powershell
py -m http.server 8000
```

or

```powershell
python -m http.server 8000
```

6. Keep the terminal open.
7. Open a browser and visit `http://localhost:8000`.
8. Click `index.html` if the page does not open automatically.

#### Using Python in PowerShell or Command Prompt

1. Open PowerShell or Command Prompt.
2. Change to the project folder:

```powershell
cd C:\Users\radha\OneDrive\Documents\TY\sem6\Web_Technology\WT_Assignment3
```

3. Start the server:

```powershell
python -m http.server 8000
```

4. Leave the terminal running.
5. Open your browser and go to `http://localhost:8000`.
6. If needed, click `index.html` to open the page.

#### If `python` does not work

Use this command instead:

```powershell
py -m http.server 8000
```

### Option 3: Run with a local server using Live Server

This is recommended for testing and for avoiding browser restrictions with local media files.

#### Using VS Code Live Server

1. Open the folder in VS Code.
2. Install the Live Server extension if you do not already have it.
3. Right-click `index.html`.
4. Select **Open with Live Server**.
5. The CV page will open in your default browser.

#### Using Python

1. Open Terminal in the `WT_Assignment3` folder.
2. Run one of these commands:

```bash
python -m http.server 8000
```

or, on some Windows setups:

```bash
py -m http.server 8000
```

3. Open your browser and go to `http://localhost:8000`.
4. Click `index.html` if it does not open automatically.

## Notes

- If the profile image or video does not appear, confirm that `pic.jpg` and `video.mp4` are in the same folder as `index.html`.
- If icons or fonts do not load, check your internet connection because they are loaded from online CDNs.
- A `favicon.ico` 404 in the terminal is normal if you do not have a favicon file. It does not stop the page from working.
- The page uses jQuery animations and Bootstrap styling, so it should be viewed in a modern browser.

vercel app deployment :
https://radha-resume-26.vercel.app/ 