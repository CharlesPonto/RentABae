# StudySync – Your Smart Learning Partner

A modern, responsive landing page for students to organize study schedules, access free resources, and receive study tips. Built with PHP, MySQL, and Tailwind CSS.

## Features
- Hero section with CTA
- Features overview
- Student testimonials
- Accessible, responsive sign-up form
- Stores sign-ups in MySQL
- SEO and accessibility best practices

## Requirements
- PHP 7.2+
- MySQL (use MySQL Workbench or similar)
- Web server (XAMPP, WAMP, etc.)

## Installation & Setup
1. **Clone or copy the project files to your web server directory.**
2. **Database:**
   - Create a database (e.g., `studysync`).
   - Import `sql/create_table.sql` to create the `submissions` table.
3. **Configure DB credentials:**
   - Edit `includes/db.php` and set your MySQL username, password, and database name.
4. **Run the site:**
   - Open `index.php` in your browser via your local server (e.g., `http://localhost/studysync/index.php`).

## File Structure
```
index.php                # Main landing page
includes/db.php          # Database connection (edit credentials here)
process_form.php         # Handles form submission
sql/create_table.sql     # SQL for submissions table
assets/                  # (Optional) Images or custom CSS
```

## Accessibility & SEO
- Uses semantic HTML5 tags (`<header>`, `<main>`, `<section>`, `<footer>`, etc.)
- All images/icons have `alt` text
- Good color contrast (Tailwind default)
- Keyboard navigable
- Includes `<title>` and `<meta name="description">`
- Proper heading order

## Customization
- Change colors or add a logo by editing `index.php` and using Tailwind classes.
- Add more features or sections as needed.

---
**Made with 💻 for our WebTech class.** 
\

$fullname = htmlspecialchars($_POST['fullname']);
        $email = htmlspecialchars($_POST['email']);
        $boyfriend = htmlspecialchars($_POST['boyfriend']);
        $reason = htmlspecialchars($_POST['reason']);
        $message = htmlspecialchars($_POST['message']);