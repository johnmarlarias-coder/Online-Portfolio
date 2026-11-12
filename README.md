# John Marl Abogado Portfolio

This portfolio is a PHP page with separate CSS and JavaScript files. Rating and comment CRUD is stored in MySQL.

## Run locally with XAMPP

1. Start Apache and MySQL in XAMPP.
2. Import this folder's `setup.sql` file through phpMyAdmin at `http://localhost/phpmyadmin`.
3. Put this folder in `htdocs` and open `http://localhost/john-marl-abogado/`, or run `php -S localhost:8000` from this folder and open `http://localhost:8000/`.

The default connection uses MySQL at `127.0.0.1`, database `portfolio_feedback`, username `root`, and an empty password. For other credentials, set `DB_HOST`, `DB_NAME`, `DB_USER`, and `DB_PASSWORD`. Use a separate database user and password for public hosting. GitHub Pages cannot run PHP.

Visitors can save, change, or remove a rating. They can add comments, view comments from other visitors, and edit or delete comments created in their current browser session.
